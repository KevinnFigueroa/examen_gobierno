<?php
include("query_to_service.php");

if($_SERVER["REQUEST_METHOD"] == "GET"){
    $requestObject = new getDataFromService();

    $queryUrl = '';

    if(isset($_GET['calle'])){
        $calle = $_GET['calle'];
        $queryUrl .= 'calle='.$calle; 
    }
    if(isset($_GET['direccion'])){
        $direccion = $_GET['direccion'];
        $queryUrl .= '&direccion='.$direccion; 
    }
    if(isset($_GET['maxOptions'])){
        $maxOptions = $_GET['maxOptions'];
        $queryUrl .= '&maxOptions='.$maxOptions; 
    }
    if(isset($_GET['geocodificar'])){
        $geocodificar = $_GET['geocodificar'];
        $queryUrl .= '&geocodificar='.$geocodificar; 
    }
    if(isset($_GET['srid'])){
        $srid = $_GET['srid']; 
        $queryUrl .= '&srid='.$srid; 
    }
    if(isset($_GET['lat']) && isset($_GET['lng'])){
        $lat = $_GET['lat']; 
        $lng = $_GET['lng'];

        if(empty($lat) || empty($lng)){
            $response['message'] = "Debe enviar par latitud y longitud";
            $response['status_code'] = 204;
            
            return $response;
        }

        $queryUrl .= '&lat='.$lat.'&'.'lng='.$lng;
        
        //TODO: implement validate lat and lng
        
        //$resultLat = preg_match('/^(\-?\d+(\.\d+)?),\s*(\-?\d+(\.\d+)?)$/', $lat);
        //$resultLng = preg_match('/^(\-?\d+(\.\d+)?),\s*(\-?\d+(\.\d+)?)$/', $lng);
        
        /*if($resultLat == 1 && $resultLng == 1){
        }else{
            $response['message'] = "Debe enviar valores double como latitud y longitud";
            $response['status_code'] = 204;
            
            return $response;
        }*/
    }
    if(isset($_GET['tipoResultado'])){
        $tipoResultado = $_GET['tipoResultado'];
        $queryUrl .= '&tipoResultado='.$tipoResultado;  
    }

    if(empty($queryUrl)){
        $response['message'] = "No ha enviado parametros para buscar";
        $response['status_code'] = 204;
        return $response;
    }

    $response = $requestObject->getSuggestedStreets($queryUrl);
    
    $json_response = json_decode($response,true);
    $json_response['queryUrl'] = $queryUrl;

    if(isset($json_response['errorMessage'])){
        $json_response['status_code'] = 204;
        $json_response ['message'] = "No hemos podido obtener resultados para la query: ".$queryUrl;
        return $json_response;
    }

    $json_response['status_code'] = 200;
    
    //queryType = 1 if the object has a list, queryType = 2 if the object is a simple Json
    if(isset($json_response['direccionesNormalizadas'])){
        $json_response['queryType'] = 1;
        $json_response['resultsCount'] = count($json_response['direccionesNormalizadas']);
    }else{
        $json_response['queryType'] = 2;
        $json_response['resultsCount'] = 1;
    }

    return $json_response;

}else{
    $json_response['message'] = "Método ".$_SERVER['REQUEST_METHOD']." no válido";
    $json_response['status_code'] = 400;
    return $response;
}
?>