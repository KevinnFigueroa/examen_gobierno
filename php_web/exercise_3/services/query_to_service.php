<?php
require_once 'HTTP/Request2.php';

class getDataFromService{
    function getSuggestedStreets($queryUrl){
        $request = new HTTP_Request2();
        
        $request->setUrl('http://servicios.usig.buenosaires.gob.ar/normalizar/?'.$queryUrl);
        $request->setMethod(HTTP_Request2::METHOD_GET);
        $request->setConfig(array(
            'follow_redirects' => TRUE
        ));
        $request->setHeader(array(
            'Content-Type' => 'application/json',
            'Cookie' => 'BIGipServerPool_titles_mapas=1610683402.20480.0000'
        ));
            try {
                $response = $request->send();
                if ($response->getStatus() == 200) {
                    return $response->getBody();
                }
                else {
                    echo 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
                    $response->getReasonPhrase();
                }
            }
            catch(HTTP_Request2_Exception $e) {
                echo 'Error: ' . $e->getMessage();
            }
        }
    }

?>