<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title></title>
  <meta name="description" content="">

  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/style.css">

  <script src="js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body>
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <header>
      <nav>
     <ul>                   
        <?php
        if (file_exists("index.ini") && is_array($content = parse_ini_file("index.ini", true)))
        {
            if (array_key_exists("navigation", $content))
            {
                foreach ($content["navigation"] as $basename => $title)
                {       
                    if(isset($_GET['page']) and $_GET['page'] == $basename)

                    {
                        $class = 'current';
                    }
                    else
                    {
                        $class = '';
                    }
                        echo '<li><a class="' . $class . '" href="index.php?page=' . $basename . '">' . $title . '</a></li>';
                }
            }
        }
        ?>
    </ul> 
    </nav>
  </header>
  <div class="container" role="main">