<?php

$app->post('/api/GoogleAnalytics/updateExperiment', function ($request, $response) {

    $settings = $this->settings;
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['accessToken','accountId','webPropertyId','profileId','experimentId']);

    if(!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback']=='error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }

    $requiredParams = ['accessToken'=>'accessToken','accountId'=>'accountId','webPropertyId'=>'webPropertyId','profileId'=>'profileId','experimentId'=>'experimentId'];
    $optionalParams = ['name'=>'name','status'=>'status','variations'=>'variations','description'=>'description','editableInGaUi'=>'editableInGaUi','equalWeighting'=>'equalWeighting','minimumExperimentLengthInDays'=>'minimumExperimentLengthInDays','objectiveMetric'=>'objectiveMetric','optimizationType'=>'optimizationType','rewriteVariationUrlsAsOriginal'=>'rewriteVariationUrlsAsOriginal','servingFramework'=>'servingFramework','trafficCoverage'=>'trafficCoverage','winnerConfidenceLevel'=>'winnerConfidenceLevel','fields'=>'fields'];
    $bodyParams = [
       'json' => ['winnerConfidenceLevel','trafficCoverage','servingFramework','rewriteVariationUrlsAsOriginal','optimizationType','fields','name','status','variations','description','editableInGaUi','equalWeighting','minimumExperimentLengthInDays','objectiveMetric']
    ];

    $data = \Models\Params::createParams($requiredParams, $optionalParams, $post_data['args']);

    

    $client = $this->httpClient;
    $query_str = "https://www.googleapis.com/analytics/v3/management/accounts/{$data['accountId']}/webproperties/{$data['webPropertyId']}/profiles/{$data['profileId']}/experiments/{$data['experimentId']}";

    

    $requestParams = \Models\Params::createRequestBody($data, $bodyParams);
    $requestParams['headers'] = ["Authorization"=>"Bearer {$data['accessToken']}"];
     

    try {
        $resp = $client->patch($query_str, $requestParams);
        $responseBody = $resp->getBody()->getContents();

        if(in_array($resp->getStatusCode(), ['200', '201', '202', '203', '204'])) {
            $result['callback'] = 'success';
            $result['contextWrites']['to'] = is_array($responseBody) ? $responseBody : json_decode($responseBody);
            if(empty($result['contextWrites']['to'])) {
                $result['contextWrites']['to']['status_msg'] = "Api return no results";
            }
        } else {
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'API_ERROR';
            $result['contextWrites']['to']['status_msg'] = json_decode($responseBody);
        }

    } catch (\GuzzleHttp\Exception\ClientException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ServerException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ConnectException $exception) {
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'INTERNAL_PACKAGE_ERROR';
        $result['contextWrites']['to']['status_msg'] = 'Something went wrong inside the package.';

    }

    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});