<?php
if (isset($_GET["cep"])) {
    $cep = $_GET["cep"];
    $url = "https://viacep.com.br/ws/$cep/json/";
    $response = file_get_contents($url);
    echo $response;
}

?>