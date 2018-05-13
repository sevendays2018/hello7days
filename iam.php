<?php
sendMessage(
           array(
            //"source" => $update["result"]["source"],
            "speech" => "{
  \"line\": {
    \"type\": \"image\",
    \"originalContentUrl\": \"https://i.ytimg.com/vi/bjgbFdfty8Q/maxresdefault.jpg\",
    \"previewImageUrl\": \"https://i.ytimg.com/vi/bjgbFdfty8Q/maxresdefault.jpg\"
  }
}",
            "displayText" => "HELLO",
            "contextOut" => array()
        )
        );
function sendMessage($parameters) {
    //$finale = json_decode($parameters);
    echo json_encode($parameters);
}
?>
