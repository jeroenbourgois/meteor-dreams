<!doctype html>
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title>Ik Heb Hoop</title>
	<link rel="stylesheet" href="static/css/style.css" /> 	
	<script src="static/js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body>


  <div id="main">
  	<img src="static/img/logo.png" width="389" height="65" />
    <h1>In de pers</h1>
    <div>

        <?php

        $directory = 'static/pers/';

        $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));

        while($it->valid()) {

            if (!$it->isDot()) {

                echo('<a href="' . $it->key() . '" target="_blank">' .  $it->getSubPathName() . '</a> <br/>' );

            }

            $it->next();
        }

        ?>
    </div>
  </div>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="static/js/libs/jquery-1.7.2.min.js"><\/script>')</script>

  <!--[if (gte IE 6)&(lte IE 8)]><script src="static/js/libs/selectivizr.js"></script><![endif]-->	
  <script src="static/js/libs/jquery.backstretch.min.js"></script>

  <script type="text/javascript">

    $(document).ready(function(){
      $.backstretch("img/blue_sky_with_clouds.jpg");
    });
  </script>

  <script>
    var _gaq = [['_setAccount','xxxxxxxxxxxxx'], ['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
      g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
      s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
  <noscript>Your browser does not support JavaScript!</noscript> 
  
</body>
</html>
