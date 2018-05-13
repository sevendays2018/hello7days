<?php
/* Webhook Script for 7 Days BOT */
/* Please note that it support only LINE Messaging API for now */

// Recieve INPUT Data //
$update_response = file_get_contents("php://input");
$update = json_decode($update_response, true);
echo json_encode($update);

/* Developed by 7 Days Team, Trained by Club Everyday's Members */
?>
