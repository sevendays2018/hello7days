<?php
function processMessage($update) {
    if($update["result"]["action"] == "sayHello"){
       echo {
  "line": {
    "type": "text",
    "text": "hello"
  }
};
    }
}

function sendMessage($parameters) {
    echo $parameters;
}

$update_response = file_get_contents("php://input");
$update = json_decode($update_response, true);
if (isset($update["result"]["action"])) {
    processMessage($update);
}
?>
