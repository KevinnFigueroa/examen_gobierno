<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercise 3</title>

        <!-- FUENTES GOOGLE -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        
        <style><?php include("../static/css/style.css");?></style>
        
        <link rel="stylesheet" type="text/css" href="./static/css/style.css"> 
    </head>

    <body>
        <?php $response = include("../services/get_data.php");?>
        <div class="principal-container">
            <div class="row-title">
            <?php
            if($response['status_code'] != 200){
                echo '<h2 class="title-container">'.$response['message'].'</h2>';
                echo '<h2 class="title-container">'.$response['status_code'].'</h2>';
            }else{

                switch($response['queryType']):
                    case 1:
                        echo 
                        '<h2 class="title-container">Lista con calles sugeridas</h2>'.
                        '<h4 class="query-url"> Query: '.$response['queryUrl'].'</h4>'.
                        '<h4 class="results-length"> Resultados: '.$response['resultsCount'].'</h4>';
                        
                        echo '</div>';
                        foreach($response['direccionesNormalizadas'] as $data){
                        echo "<div class='container-result'>".
                        '<h5 class="result">'.'Nombre de calle: '.$data['nombre_calle'].'</h5>'.
                        '<h5 class="result">'.'Dirección: '.$data['direccion'].'</h5>'.
                        '<br>'.'</div>'; 
                    }
                    echo '</div>';
                    break;
                    
                    case 2:
                        echo 
                        '<h2 class="title-container">Dirección de esquina más cercana</h2>'.
                        '<h4 class="query-url"> Query: '.$response['queryUrl'].'</h4>'.
                        '<h4 class="results-length"> Resultados: '.$response['resultsCount'].'</h4>';
                        
                        echo '</div>';
                        echo "<div class='container-result'>".'<h5 class="result">'.'Nombre de calle: '.$response['nombre_calle'].'</h5>'.
                        '<h5 class="result">'.'Dirección: '.$response['direccion'].'</h5>'.'<br>'."</div>";
                        echo '</div>';
                        break;
                    endswitch;
                } 
            ?>
            </div>     

        </div>
    </body>
</html>