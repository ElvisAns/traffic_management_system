<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

  <link rel="apple-touch-icon" href="favicon.png">
  <link rel="shortcut icon" href="favicon.png" type="image/png">
  <meta name="theme-color" content="#4287f5">
  <!-- Windows Phone -->
  <meta name="msapplication-navbutton-color" content="#4287f5">
  <!-- iOS Safari -->
  <meta name="apple-mobile-web-app-status-bar-style" content="#4287f5">
  <title>smart traffic system</title>


  <!-- Bootstrap core CSS -->
  <link href="<?=base_url()?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!--
Ramayana CSS Template
https://templatemo.com/tm-529-ramayana
-->

<!-- Additional CSS Files -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">



<link rel="stylesheet" href="<?=base_url()?>assets/css/templatemo-style.css">
<link rel="stylesheet" href="<?=base_url()?>assets/css/owl.css">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.23/af-2.3.5/b-1.6.5/b-flash-1.6.5/b-print-1.6.5/r-2.2.7/sc-2.0.3/sl-1.3.1/datatables.min.css"/>

</head>

<body class="is-preload">

  <!-- Wrapper -->
  <div id="wrapper">

    <!-- Main -->
    <div id="main">
      <div class="inner">

        <!-- Header -->
        <header id="header">
          <div class="logo">
            <a href="<?=base_url()?>">SMART TRAFFIC </a>
          </div>
        </header>

        <!-- Banner -->

        <!-- Services -->
        <section class="services">
          <div class="container-fluid">
            <div class="row">

              <div class="col-md-12">
                {notification}
              </div>
              <div class="col-md-4">
                <div class="service-item first-item">
                  <!--div class="icon"></div-->
                  <div class="container-icon">
                    <span class="fas fa-car icon-land"></span>
                  </div>
                  <h4>Average car speed</h4>
                  <p class="labe">{avg_speed}Km/h</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="service-item second-item">
                  <!--div class="icon"></div-->
                  <div class="container-icon">
                    <span class="fas fa-database icon-land"></span>
                  </div>
                  <h4>Todays car count</h4>
                  <p class="labe">{car_count}</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="service-item third-item bg-danger">
                  <!--div class="icon"></div-->
                  <div class="container-icon">
                    <span class="fas fa-car-crash icon-land text-white"></span>
                  </div>
                  <h4 class="text-white">Total wanted cars</h4>
                  <p class="labe text-white">{wanted}</p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <div class="container"  style="{data_exist}">
          <div class="row">

            <div class="col-md-12">
              <h1 class="d-block pt-3 pb-2 display-4 text-primary">LOGS TABLE</h1>
            </div>

          </div>
          

          <table style="{data_exist}" id="example" class="table table-striped table-bordered table-responsive" style="width:100%;">
            <thead>
              <tr>
                <th>Names</th>
                <th>Phone</th>
                <th>Speed</th>
                <th>Plate</th>
                <th>Time</th>
                <th>Date</th>
                <th>Obs</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              {table_rows}
            </tbody>
            <tfoot>
             <tr>
              <th>Names</th>
              <th>Phone</th>
              <th>Speed</th>
              <th>Plate</th>
              <th>Time</th>
              <th>Date</th>
              <th>Obs</th>
              <th>Status</th>
            </tr>
          </tfoot>
        </table>

      </div>
    </div>
  </div>

  <!-- Sidebar -->
  <div id="sidebar">

    <div class="inner">

      <!-- Search Box -->
      <section id="search" class="alt">
        <form method="get" action="#">
          <input type="text" name="search" id="search" placeholder="Search..." />
        </form>
      </section>

      <!-- Menu -->
      <nav id="menu">
        <ul>
          <li><a href="<?=base_url()?>">HOME</a></li>
          <li><a href="<?=base_url()?>dashboard/logs">CAR DETECTION LOGS</a></li>
          <li><a href="<?=base_url()?>dashboard/flow">FLOW SETTINGS</a></li>
          <li><a href="<?=base_url()?>dashboard/licence">LICENCES RECORDS</a></li>
          <li>
            <span class="opener">LANE MONITORING</span>
            <ul>
              <li><a href="<?=base_url()?>dashboard/monitor">ALL</a></li>
              <li><a href="<?=base_url()?>dashboard/lane/lane1">LANE 1</a></li>
              <li><a href="<?=base_url()?>dashboard/lane/lane2">LANE 2</a></li>
              <li><a href="<?=base_url()?>dashboard/lane/lane3">LANE 3</a></li>
            </ul>
          </li>
          <li>
            <li><a href="<?=base_url()?>dashboard/check">SYSTEM CHECK</a>(status)</li>
          </ul>
        </nav>

        <!-- Footer -->
        <footer id="footer">
          <p class="copyright">Copyright &copy; 2021</p>
        </footer>

      </div>
    </div>

  </div>



  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="<?=base_url()?>vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="<?=base_url()?>assets/js/browser.min.js"></script>
  <script src="<?=base_url()?>assets/js/breakpoints.min.js"></script>
  <script src="<?=base_url()?>assets/js/transition.js"></script>
  <script src="<?=base_url()?>assets/js/owl-carousel.js"></script>
  <script src="<?=base_url()?>assets/js/custom.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js" integrity="sha512-UwcC/iaz5ziHX7V6LjSKaXgCuRRqbTp1QHpbOJ4l1nw2/boCfZ2KlFIqBUA/uRVF0onbREnY9do8rM/uT/ilqw==" crossorigin="anonymous"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.23/af-2.3.5/b-1.6.5/b-html5-1.6.5/b-print-1.6.5/r-2.2.7/sc-2.0.3/sl-1.3.1/datatables.min.js"></script>


  <script type="text/javascript">
    $(document).ready(function() {
     $('#example').DataTable( {
      dom: 'Bfrtip',
      buttons: [
      {
        extend: 'pdfHtml5',
        messageTop: 'Here is the complete list of the car logs'
      }
      ]
    } );
   } );

    
var link = "<?=base_url()?>";

var delay=0;


setTimeout(function(){
  $.ajax({url: link+"/end_point", success: function(result){


    var res = JSON.parse(result);


    $.ajax({url: link+"/end_point/get_count", success: function(result){
      delay = result;
    }
  }
  );

  }});
},100);


setInterval(function(){


  if (delay>0) {
    delay--;


    $.ajax({url: link+"/end_point/write_count/"+ delay, success: function(result){
      console.log(result);
    }
  }
  )

  }

  else{
    $.ajax({url: link+"/end_point", success: function(result){

      var res = JSON.parse(result);

        $.ajax({url: link+"/end_point/get_count", success: function(result1){
          delay = result1;
          if(delay<=0){delay=res.delay_light_change}
          }
        }
      );

    }
  })
  }

},1000)
 </script>
</body>


</html>
