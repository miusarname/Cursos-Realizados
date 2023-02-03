<?php

$url = "https://api.dailymotion.com/videos?channel=sport&limit=10";

$opciones = array("ssl" => array("verify_peer" => false, "verify_peer_name" => false));//Seguridad

$res = file_get_contents($url, false, stream_context_create($opciones));

$objRes = json_decode($res);

//print_r($objRes);

/* foreach($objRes->list as $video){
    print_r($video->title);
    print_r($video->channel);
} */


?>

<ul>
    <?php 
    
    foreach($objRes->list as $video){
        print_r("<li>".$video->title."</li>");
        print_r("<li>".$video->channel."</li>");
    }

    ?>
</ul>