<?php

$app->post('/api/GoogleAnalytics/getAnalytics', function ($request, $response) {

    $settings = $this->settings;
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['accessToken','analyticsId','startDate','endDate','metrics']);

    if(!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback']=='error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }

    $requiredParams = ['accessToken'=>'accessToken','analyticsId'=>'ids','startDate'=>'start-date','endDate'=>'end-date','metrics'=>'metrics'];
    $optionalParams = ['dimensions'=>'dimensions','filters'=>'filters','includeEmptyRows'=>'include-empty-rows','maxResults'=>'max-results','samplingLevel'=>'samplingLevel','segment'=>'segment','sort'=>'sort','startIndex'=>'start-index','fields'=>'fields'];
    $bodyParams = [
       'query' => ['ids','start-date','end-date','metrics','dimensions','filters','include-empty-rows','max-results','samplingLevel','segment','sort','start-index','fields']
    ];

    $data = \Models\Params::createParams($requiredParams, $optionalParams, $post_data['args']);

    
    $data['metrics'] = \Models\Params::toString($data['metrics'], ','); 
    $data['dimensions'] = \Models\Params::toString($data['dimensions'], ','); 
    $data['filters'] = \Models\Params::toString($data['filters'], ','); 
    $data['sort'] = \Models\Params::toString($data['sort'], ','); 
    $data['fields'] = \Models\Params::toString($data['fields'], ','); 

    $client = $this->httpClient;
    $query_str = "https://www.googleapis.com/analytics/v3/data/ga";

    

    $requestParams = \Models\Params::createRequestBody($data, $bodyParams);
    $requestParams['headers'] = ["Authorization"=>"Bearer {$data['accessToken']}"];
     

    try {
        $resp = $client->get($query_str, $requestParams);
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