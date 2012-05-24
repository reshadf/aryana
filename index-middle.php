<?php 
if (!isset($_GET['page'])) {
  $_GET['page'] = 'main.php';
  
}
switch ($_GET['page']){
  case 'main.php':
  case 'schiphol.php':
  case 'tarieven.php':
  case 'kwaliteit.php':
  case 'boeken.php':
  case 'contact.php':
    $file = $_GET['page'];
    break;
  default:
    $file = '404.html';
}
include_once $file;
?>