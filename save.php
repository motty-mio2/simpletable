<?php
    function console_log( $data ){
        echo '<script>';
        echo 'console.log('. json_encode( $data ) .')';
        echo '</script>';
    }

    $raw = file_get_contents("php://input");
    console_log($raw);
    if ($raw == "") {
        console_log("empty");
    } else {
        $json = json_encode($raw, JSON_UNESCAPED_UNICODE);
        $json = substr(preg_replace('/\\\/u', '', $json), 1, -1);
        file_put_contents("data.json", $json);
    }
?>