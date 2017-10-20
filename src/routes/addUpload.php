<?php
$app->post('/api/GoogleAnalytics/addUpload', function ($request, $response) {

    $settings = $this->settings;
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['accessToken','accountId','webPropertyId','customDataSourceId','file']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API
    $query_str = "https://www.googleapis.com/analytics/v3/management/accounts/{$post_data['args']['accountId']}/webproperties/{$post_data['args']['webPropertyId']}/customDataSources/{$post_data['args']['customDataSourceId']}/uploads";
    $file[] = [
        'name'     => 'file',
        'contents' => fopen($post_data['args']['file'], 'r')
    ];
    $file[] = [
        'name'     => 'uploadType',
        'contents' => 'media'
    ];

    //requesting remote API
    $client = new GuzzleHttp\Client();

    try {

        $resp = $client->request('POST', $query_str, [
            'headers'=>[
                "Authorization" => "Bearer ". $post_data['args']['accessToken'],
                "Content-Type" => "application/octet-stream"
            ],
            'multipart' => $file
        ]);

        $responseBody = $resp->getBody()->getContents();
        $rawBody = json_decode($resp->getBody());

        $all_data[] = $rawBody;
        if ($response->getStatusCode() == '200') {
            $result['callback'] = 'success';
            $result['contextWrites']['to'] = is_array($all_data) ? $all_data : json_decode($all_data);
        } else {
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'API_ERROR';
            $result['contextWrites']['to']['status_msg'] = is_array($responseBody) ? $responseBody : json_decode($responseBody);
        }

    } catch (\GuzzleHttp\Exception\ClientException $exception) {
        $responseBody = $exception->getResponse()->getReasonPhrase();
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $responseBody;

    } catch (GuzzleHttp\Exception\ServerException $exception) {

        $responseBody = $exception->getResponse()->getBody(true);
        $result['callback'] = 'error';
        $result['contextWrites']['to'] = json_decode($responseBody);

    } catch (GuzzleHttp\Exception\BadResponseException $exception) {

        $responseBody = $exception->getResponse()->getBody(true);
        $result['callback'] = 'error';
        $result['contextWrites']['to'] = json_decode($responseBody);

    }


    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});