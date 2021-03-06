<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>{{title}}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="{{description}}">
  <meta name="keywords" content="{{keywords}}">

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
  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="brand" href="#">{{site_name}}</a>
        <div class="nav-collapse collapse">
          <ul class="nav">
          {% for item in menu %}
            {% if item['sub'] is not empty  %}
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{item['text']}}<b class="caret"></b></a>
              <ul class="dropdown-menu">
                {% for sub in item['sub'] %}
                <li><a href="{{sub['href']}}">{{sub['text']}}</a></li>
                {% endfor %}
              </ul>
            </li>
            {% else %}
            <li><a href="{{item['href']}}">{{item['text']}}</a></li>
            {% endif %}
          {% endfor %}
          </ul>
          <ul class="nav pull-right">
            <li><a href="/sign_in">登录</a></li>
            <li><a href="/sign_up">注册</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>

  <div class="container">
  {{content}}

  </div> <!-- /container -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/jquery.min.js"></script>
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

