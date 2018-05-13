<?php
sendMessage(
           {
 "speech": "TESTED",
  "messages": [
    {
      "type": 4,
      "platform": "line",
      "payload": {
        "line": {
          "type": "image",
          "originalContentUrl": "https://i.ytimg.com/vi/bjgbFdfty8Q/maxresdefault.jpg",
    "previewImageUrl": "https://i.ytimg.com/vi/bjgbFdfty8Q/maxresdefault.jpg"
      }
    }
  }
  ]
}
        );
function sendMessage($parameters) {
    //$finale = json_decode($parameters);
    echo $parameters;
}
?>
