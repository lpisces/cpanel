<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $title; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo $description; ?>">
  <meta name="keywords" content="<?php echo $keywords; ?>">

  <link href="/css/bootstrap.css" rel="stylesheet">
  <style>
    body {
      padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
    }
  </style>
  <link href="/css/bootstrap-responsive.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <!--
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="../assets/ico/favicon.png">
  -->
</head>

<body>
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="brand" href="#"><?php echo $site_name; ?></a>
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

    <h1>Bootstrap starter template</h1>
    <p>Use this document as a way to quick start any new project.<br> All you get is this message and a barebones HTML document.</p>

  </div> <!-- /container -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/jquery.js"></script>
<script src="/js/bootstrap-transition.js"></script>
<script src="/js/bootstrap-alert.js"></script>
<script src="/js/bootstrap-modal.js"></script>
<script src="/js/bootstrap-dropdown.js"></script>
<script src="/js/bootstrap-scrollspy.js"></script>
<script src="/js/bootstrap-tab.js"></script>
<script src="/js/bootstrap-tooltip.js"></script>
<script src="/js/bootstrap-popover.js"></script>
<script src="/js/bootstrap-button.js"></script>
<script src="/js/bootstrap-collapse.js"></script>
<script src="/js/bootstrap-carousel.js"></script>
<script src="/js/bootstrap-typeahead.js"></script>

</body>
</html>

