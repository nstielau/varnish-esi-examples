<?php 
header("Cache-Control: max-age=0");
$examples = array('simple', 'check_for_esi', 'error_no_header', 'error_not_xml');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Pantheon Varnish ESI Examples</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <h1>Pantheon Varnish ESI Examples</h1>
      <p>Here are a few examples of using Edge Side Includes on Pantheon.</p>
      <p>You can see the code for these examples on <a href="https://github.com/nstielau/varnish-esi-examples">Github</a></p>

      <ul class="nav nav-tabs" id="example-tabs">
<?php foreach ($examples as &$example) { ?>
        <li><a href="#<?php echo $example?>" data-toggle="tab"><?php echo $example; ?></a></li>
<?php } ?>
      </ul>


      <div class="tab-content">
      <?php
      $firsttab = TRUE;
      foreach ($examples as &$example) { 
      ?>
        <div class="tab-pane <?php if($firsttab){echo 'active';} $firsttab = FALSE;?>" id="<?php echo $example ?>">
          <h2>Rendered</h2>
          <pre>
<?php
          $host = $_SERVER['HTTP_HOST'];
          $response = file_get_contents("http://$host/$example/index.php");
          echo htmlentities($response);
?>
          </pre>

          <h2>Code</h2>
          <pre>
<?php
          $filename = "./$example/index.php";
          $fh = fopen($filename, 'r');
          $theData = fread($fh, filesize($filename));
          fclose($fh);
          echo htmlentities($theData);
?>
          </pre>
        </div>
        <?php } ?>
      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script type="text/javascript>
    $('#example-tabs a').click(function (e) {
      e.preventDefault();
      $(this).tab('show');
    })

    $(function () {
      $('#example-tabs a:first').tab('show');
    })
    </script>
  </body>
</html>

