
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
          <a class="brand" href="#">Project name</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <h1>Pantheon Varnish ESI Examples</h1>
      <p>Here are a few examples of using Edge Side Includes on Pantheon.</p>

      <ul class="nav nav-tabs" id="example-tabs">
        <li><a href="#simple" data-toggle="tab">Simple Example</a></li>
        <li><a href="#check_for_esi" data-toggle="tab">Check For ESI</a></li>
        <li><a href="#error_no_header" data-toggle="tab">Errorcase: No header</a></li>
      </ul>

      <div class="tab-content">
        <div class="tab-pane active" id="simple">
          <iframe src="/simple/index.php"></iframe>
        </div>
        <div class="tab-pane" id="check_for_esi">
          <iframe src="/check_for_esi/index.php"></iframe>
        </div>
        <div class="tab-pane" id="error_no_header">
          <iframe src="/error_no_header/index.php"></iframe>
        </div>
      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script type="text/javascript>
    $(function () {
      $('#example-tabs a:first').tab('show');
    })

    $('#example-tabs a').click(function (e) {
      e.preventDefault();
      $(this).tab('show');
    })
    </script>
  </body>
</html>

