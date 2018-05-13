<?php
function processMessage($update) {
    if($update["result"]["action"] == "sayHello"){
        sendMessage(
            {
                "source":$update["result"]["source"],
                "speech":"Hello",
                "displayText":"HI"
            }
            /*array(
            "source" => $update["result"]["source"],
            "speech" => "{
  \"line\": {
    \"type\": \"image\",
    \"originalContentUrl\": \"https://i.ytimg.com/vi/bjgbFdfty8Q/maxresdefault.jpg\",
    \"previewImageUrl\": \"https://i.ytimg.com/vi/bjgbFdfty8Q/maxresdefault.jpg\"
  }
}",
            "displayText" => "HELLO",
            "contextOut" => array()
        )*/
        );
    }
}

function sendMessage($parameters) {
    $finale = json_decode($parameters);
    echo json_encode($finale);
}

$update_response = file_get_contents("php://input");
$update = json_decode($update_response, true);
if (isset($update["result"]["action"])) {
    processMessage($update);
}
?>

