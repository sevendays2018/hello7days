<?php
/* Webhook Script for 7 Days BOT */
/* Please note that it support only LINE Messaging API for now */

// Recieve INPUT Data //
function processMessage($update) {
    if($update["result"]["action"] == "sayHello"){
        sendMessage(000);
    }
}
function sendMessage($parameters) {
    //$finale = json_decode($parameters);
    echo json_encode($update);
}
$update_response = file_get_contents("php://input");
$update = json_decode($update_response, true);
if (isset($update["result"]["action"])) {
    processMessage($update);
}

/* Developed by 7 Days Team, Trained by Club Everyday's Members */
?>
