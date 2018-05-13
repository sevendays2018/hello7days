<?php
/*
 * PROCESSANDO A MENSAGEM 
 * QUE CHEGA DO BOT
 */
function processMessage($update) {
    if($update["result"]["action"] == "buscar.nfe"){
        $output=array();
    $output["contextOut"] = array( array( "name" => "test-context",
        "lifespan"=>3 ,
        "parameters" => array( "context" => "",
            "date" => date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000)))));
    $output["speech"] = $speech;
    $output["displayText"] = $speech;
    $output["source"] = $intentName;
    echo json_encode($output);
    }
}
/*
 * FUNÇÃO PARA ENVIAR A MENSAGEM
 */
function sendMessage($parameters) {
    echo json_encode($parameters);
}

/*
 * PEGANDO A REQUISIÇÃO
 */
$update_response = file_get_contents("php://input");
$update = json_decode($update_response, true);
if (isset($update["result"]["action"])) {
    processMessage($update);
}


