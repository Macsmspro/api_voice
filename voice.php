<?php

$url = "https://macsmspro.com/api/voice.php";


$fields = array(
    
    "from" => "xxxxxxxx", // à remplacer par le numéro appelant (numéro vérifié)
    "phone" => "xxxxxxx", // à remplacer par le numéro du destinataire
    "message" => "Mon message", // à remplacer par le message à envoyer
    "token" => "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx", // à remplacer par votre token macsmspro
    "language"  => "fr-FR"
);



  $curl_options = array(
    CURLOPT_URL => $url,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query( $fields ),
    CURLOPT_HTTP_VERSION => 1.0,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HEADER => false
  );

  $curl = curl_init();
  curl_setopt_array( $curl, $curl_options );
  $result = curl_exec( $curl );

  curl_close( $curl );



$response = json_decode($result);

var_dump($response);

?>
