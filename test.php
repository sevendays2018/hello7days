<?php
function processMessage($update) {
    //if the action is homework then run below
    if($update["result"]["action"] == "homework"){
      
     //trying to create a basic card
      array_push($messages, array(
        "buttons"=> [
          [
            "title"=> "Button title",
            "openUrlAction"=> [
              "url"=> "https://linkUrl.com"
              ]
            ]
          ],
          "formattedText"=> "AoG Card Description",
          "image"=>[
            "url"=>'https://linkUrl.com',
            "accessibility_text"=>'image-alt'
          ],
          "platform"=> "google",
          "subtitle"=> "card subtitle",
          "title"=> "Card title",
          "type"=> "basic_card",
          )
         );

         $response=array(
            "source" => $update["result"]["source"],
            "speech" => "Speech for response",  //This is the only thing that returns
            "messages" => $messages,  //This is what I want to return, I think
            "contextOut" => array()
          );
          sendMessage($response);
      }
  }
  /*
   * Send back message
  */
  function sendMessage($messageout) {
      print_r ($messageout);
      echo json_encode($messageout);
  }

  //Get the json message and decode
  $json = file_get_contents('php://input');
  $request = json_decode($json, true);
  $action = $request["result"]["action"];
  $parameters = $request["result"]["parameters"];
  $messages=[];

  //If the message has an action attached, call the processMessage function
  if (isset($update["result"]["action"])) {
      processMessage($update);
  }
?>
