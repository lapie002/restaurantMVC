<?php //include './models/Product.php';
//include './connection.php';

$instance = new PDO('mysql:host=localhost;dbname=projetmvc','root','root');
//$db = Db::getInstance();

$req = $instance->query('SELECT * FROM Products');
$results = $req->fetchAll();



print_r($results);
//var_dump($db);
//var_dump($instance);

?>
