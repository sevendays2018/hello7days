<?php
function processMessage($update) {
    if($update["result"]["action"] == "sayHello"){
        var messageData = {
  "line": {
    "type": "image",
    "originalContentUrl": "https://i.ytimg.com/vi/bjgbFdfty8Q/maxresdefault.jpg",
    "previewImageUrl": "https://i.ytimg.com/vi/bjgbFdfty8Q/maxresdefault.jpg"
  }
}
        sendMessage($messageData);
    }
}

function sendMessage($parameters) {
    echo json_encode($parameters);
}

$update_response = file_get_contents("php://input");
$update = json_decode($update_response, true);
if (isset($update["result"]["action"])) {
    processMessage($update);
}
?>
