<?php
sendMessage(
           array(
            //"source" => $update["result"]["source"],
            "speech" => "test",
            "displayText" => "HELLO",
            "contextOut" => array()
        )
        );
function sendMessage($parameters) {
    //$finale = json_decode($parameters);
    echo json_encode($parameters);
}
?>
