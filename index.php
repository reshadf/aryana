<?php
/*
 * 
 * $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
if ($lang != 'nl') {
    include('landingspage.html');
}
else {
  include('index-header.php'); 
  include('index-middle.php'); 
  include('index-footer.php'); 
  } */
  ?>
<?php 
      ini_set ('display_errors', 1);
      error_reporting (E_ALL);
      include('index-header.php');
      include('index-middle.php');
      include('index-footer.php');
?>