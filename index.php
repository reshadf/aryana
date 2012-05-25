<?php 
$userErrors = Array();
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){

$PHP_SELF =$_POST['PHP_SELF'];

$submit = $_POST['submit'];

$naam = $_POST['naam'];

$email = $_POST['email'];

$telefoon = $_POST['telefoon'];

$datum = $_POST['datum'];

$maand = $_POST['maand'];

$jaar = $_POST['jaar'];

$uur = $_POST['uur'];

$minuut = $_POST['minuut'];

$adres = $_POST['adres'];

$postcode = $_POST['postcode'];

$bestemming = $_POST['bestemming'];

$reizigers = $_POST['reizigers'];

$suggesties = $_POST['suggesties'];

if( !isset($_POST['naam']) || $_POST['naam'] == '' ){
    // Naam is niet ingevuld
    $userErrors[] = 'U heeft geen naam ingevuld';
  }
    if( !isset($_POST['email']) || $_POST['email'] == ''){
        
        $userErrors[] = 'u heeft geen email ingevuld';
    }
        if( !isset($_POST['telefoon']) || $_POST['telefoon'] == ''){

            $userErrors[] = 'u heeft geen telefoonnummer ingevuld';
        }
            if( !isset($_POST['datum']) || $_POST['datum'] == ''){
        
        $userErrors[] = 'u heeft geen datum ingevuld';
    }
                if( !isset($_POST['maand']) || $_POST['maand'] == ''){
        
        $userErrors[] = 'u heeft geen maand ingevuld';
    }
                    if( !isset($_POST['jaar']) || $_POST['jaar'] == ''){
        
        $userErrors[] = 'u heeft geen jaar ingevuld';
    }
                        if( !isset($_POST['uur']) || $_POST['uur'] == ''){
        
        $userErrors[] = 'u heeft geen uur ingevuld';
    }
                            if( !isset($_POST['minuut']) || $_POST['minuut'] == ''){
        
        $userErrors[] = 'u heeft geen email ingevuld';
    }
                                if( !isset($_POST['adres']) || $_POST['adres'] == ''){
        
        $userErrors[] = 'u heeft geen adres ingevuld';
    }
                                    if( !isset($_POST['postcode']) || $_POST['postcode'] == ''){
        
        $userErrors[] = 'u heeft geen postcode ingevuld';
    }
                                        if( !isset($_POST['bestemming']) || $_POST['bestemming'] == ''){
        
        $userErrors[] = 'u heeft geen bestemming ingevuld';
    }
                                            if( !isset($_POST['reizigers']) || $_POST['reizigers'] == ''){
        
        $userErrors[] = 'u heeft geen reizigers opgegeven';
    }
                if( count($userErrors) == 0 )
            {
                    $formsent = mail('bella.taxi.haarlem@live.nl', "TaxiAryana: $naam",

                    "\nNaam: $naam \nE-mail: $email \nTelefoon: $telefoon \n\nDatum: $datum - $maand - $jaar \nUur: $uur:$minuut \n\nAdres \n$adres $postcode 

                    \nBestemming \n$bestemming \nReizigers \n$reizigers \n\nsuggesties \n$suggesties");

                    echo'<font color=#ffffff><b>Bedankt!</b>,

                    <br>Uw bericht is verstuurd! <br>Er wordt z.s.m contact met u opgenomen</font>';

                    $error = false;
                    $confirm = 'bedankt! we nemen zo snel mogelijk contact met u op om uw reis te bevestigen.';
                }
                    else {
                            
                            // Er is niks gevonden, dit is geen systeem fout maar een zoekfout => user error
        $userError[] = 'Het versturen is niet gelukt, probeer het opnieuw.';
                                
                    }
    }
?>
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