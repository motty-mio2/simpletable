<?php
    $json = json_encode(file_get_contents("php://input"), JSON_UNESCAPED_UNICODE);
    $json = substr(preg_replace('/\\\/u', '', $json), 1, -1);

    file_put_contents("data.json", $json);
?>