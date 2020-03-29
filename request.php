
<?php

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$url = "https://public-api.wordpress.com/rest/v1.1/sites/109720969/posts?number=10&page=$page";
$api = json_decode(file_get_contents($url));


?>

