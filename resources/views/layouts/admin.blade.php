<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <link href="{!! asset('dashio/img/favicon.png') !!}" rel="icon">
  <link href="{!! asset('dashio/img/apple-touch-icon.png') !!}" rel="apple-touch-icon">

  <link href="{!! asset('dashio/lib/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
  <link href="{!! asset('dashio/lib/font-awesome/css/font-awesome.css') !!}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{!! asset('dashio/css/zabuto_calendar.css') !!}">
  <link rel="stylesheet" type="text/css" href="{!! asset('dashio/lib/gritter/css/jquery.gritter.css') !!}" />
  <link href="{!! asset('dashio/css/style.css') !!}" rel="stylesheet">
  <link href="{!! asset('dashio/css/style-responsive.css') !!}" rel="stylesheet">
  <script src="{!! asset('dashio/lib/chart-master/Chart.js') !!}"></script>

</head>

<body>
  <section id="container">
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>DASH<span>IO</span></b></a>
      <!--logo end-->
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html">Logout</a></li>
        </ul>
      </div>
    </header>

    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="{!! asset('dashio/img/ui-sam.jpg') !!}" class="img-circle" width="80"></a></p>
          <h5 class="centered">Sam Soffes</h5>
          
          <li class="mt">
            <a class="active" href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Articles Table</span>
            </a>
          </li>
          <li class="mt">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Users Table</span>
            </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          @yield('content')
        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{!! asset('dashio/lib/jquery/jquery.min.js') !!}"></script>

  <script src="{!! asset('dashio/lib/bootstrap/js/bootstrap.min.js') !!}"></script>
  <script class="include" type="text/javascript" src="{!! asset('dashio/lib/jquery.dcjqaccordion.2.7.js') !!}"></script>
  <script src="{!! asset('dashio/lib/jquery.scrollTo.min.js') !!}"></script>
  <script src="{!! asset('dashio/lib/jquery.nicescroll.js') !!}" type="text/javascript"></script>
  <script src="{!! asset('dashio/lib/jquery.sparkline.js') !!}"></script>
  <!--common script for all pages-->
  <script src="{!! asset('dashio/lib/common-scripts.js') !!}"></script>
  <script type="text/javascript" src="{!! asset('dashio/lib/gritter/js/jquery.gritter.js') !!}"></script>
  <script type="text/javascript" src="{!! asset('dashio/lib/gritter-conf.js') !!}"></script>
  <!--script for this page-->
  <script src="{!! asset('dashio/lib/sparkline-chart.js') !!}"></script>
  <script src="{!! asset('dashio/lib/zabuto_calendar.js') !!}"></script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>
