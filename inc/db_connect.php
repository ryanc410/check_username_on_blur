<?php
$host = '';
$db_name = '';
$user = '';
$password = '';
$dsn = $dsn = 'mysql:host='.$host.';dbname='.$db_name;

try {
  $pdo = new PDO($dsn, $user, $password, [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	    PDO::ATTR_EMULATE_PREPARES => false,              
  ]);
} catch(PDOException $e){
  die('Connection failed: ' . $e->getMessage());
}
?>
