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
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.23/af-2.3.5/b-1.6.5/b-flash-1.6.5/b-print-1.6.5/r-2.2.7/sc-2.0.3/sl-1.3.1/datatables.min.css" />
<style type="text/css">
  /* Style the form */
  
  /* Style the input fields */
  input {
    padding: 10px;
    width: 100%;
    font-size: 17px;
    font-family: Raleway;
    border: 1px solid #aaaaaa;
  }

  /* Mark input boxes that gets an error on validation: */
  input.invalid {
    background-color: #ffdddd;
  }

  /* Hide all steps by default: */
  .tab {
    display: none;
  }

  /* Make circles that indicate the steps of the form: */
  .step {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;
    border-radius: 50%;
    display: inline-block;
    opacity: 0.5;
  }

  /* Mark the active step: */
  .step.active {
    opacity: 1;
  }

  /* Mark the steps that are finished and valid: */
  .step.finish {
    background-color: #4CAF50;
  }
</style>
</head>

<body class="is-preload">
  <!-- Wrapper -->
  <div id="wrapper">
    <!-- Main -->
    <div id="main">
      <div class="inner">
        <!-- Header -->
        <header id="header">
          <div class="logo"> <a href="<?=base_url()?>">SMART TRAFFIC </a> </div>
        </header>
        <!-- Banner -->
        <!-- Services -->
        <section class="services">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12"> {notification} </div>
              <div class="col-md-4">
                <div class="service-item first-item">
                  <!--div class="icon"></div-->
                  <div class="container-icon"> <span class="fas fa-car icon-land"></span> </div>
                  <h4>Average car speed</h4>
                  <p class="labe">{avg_speed}Km/h</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="service-item second-item">
                  <!--div class="icon"></div-->
                  <div class="container-icon"> <span class="fas fa-database icon-land"></span> </div>
                  <h4>Todays car count</h4>
                  <p class="labe">{car_count}</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="service-item third-item bg-danger">
                  <!--div class="icon"></div-->
                  <div class="container-icon"> <span class="fas fa-car-crash icon-land text-white"></span> </div>
                  <h4 class="text-white">Total wanted cars</h4>
                  <p class="labe text-white">{wanted}</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- MultiStep Form -->
        <div class="container-fluid" id="grad1">
          <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
              <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2><strong>SETTING THE APP BEHAVIOURS</strong></h2>
                <p>Fill all form field to go to next step</p>
                <div class="row">
                  <div class="col-md-12 mx-0">
                    <form id="regForm" action="<?=base_url()?>/dashboard/flow" class="px-4 shadow-lg" method="post">

                      <!-- One "tab" for each step in the form: -->
                      <div class="tab text-left pt-2">
                        <h2 class="text-primary">TRAFFIC LIGHT</h2>
                        <div class="form-group">
                         <label for="max_sec_wait">Maximum waiting time(in seconds)</label>
                         <input type="number" id="max_sec_wait" class="form-control" name="max_sec_wait" placeholder="max_sec_wait" value="{max_sec_wait}" min="60" max="500" step="15" />
                       </div>

                       <div class="form-group">
                        <label for="min_sec_wait">Minimum waiting time(in seconds)</label>
                        <input type="number" id="min_sec_wait" name="min_sec_wait" class="form-control" placeholder="min_sec_wait" value="{min_sec_wait}" min="30" max="500" step="15" />
                      </div>


                      <div class="form-group">
                       <label for="switching_mode">Swiching behaviour</label>

                       <select id="switching_mode" name="switching_mode" class="form-control" placeholder="switching_mode">
                        <option>Lane by Lane</option>
                        <option>A Pair of Lane twice</option>
                        <option>System decision</option>
                      </select>
                    </div>
                  </div>

                  <div class="tab">
                    <h2 class="text-primary">STREET LIGHT</h2>
                    <div class="form-group">
                      <label for= "time_on_street_light">Time to on Street Lights</label>
                      <input type="time" id= "time_on_street_light" class="form-control" name="time_on_street_light" value="{time_on_street_light}" placeholder="time_on_street_light" min="17:00" max="19:00">
                    </div>

                    <div class="form-group">
                      <label for="time_off_street_light">Time to off Street Lights</label>
                      <input type="time" id="time_off_street_light" class="form-control" name="time_off_street_light" value="{time_off_street_light}" placeholder="time_off_street_light" min="05:00" max="07:30">
                    </div>
                  </div>

                  <div class="tab">
                    <h2 class="text-primary">Streaming URLs</h2>
                    <div class="form-group">
                      <label for="camera_lane_1">Lane 1 IP camera</label>
                      <input type="text" class="form-control" placeholder="http://192.168.43.121/...."  id="camera_lane_1" name="camera_lane_1" value="{camera_lane_1}" required>
                    </div>

                    <div class="form-group">
                      <label for="camera_lane_2">Lane 2 IP camera</label>
                      <input type="text" class="form-control" placeholder="http://192.168.43.121/...."  id="camera_lane_2" name="camera_lane_2" value="{camera_lane_2}" required>
                    </div>

                    <div class="form-group">
                      <label for="camera_lane_3">Lane 3 IP camera</label>
                      <input type="text" class="form-control" placeholder="http://192.168.43.121/...."  id="camera_lane_3" name="camera_lane_3" value="{camera_lane_3}" required>
                    </div>

                  </div>

                  <div class="tab">
                    <h1 class="text-success">Success, you can now save this settings</h1>
                    <img src="https://i.pinimg.com/originals/35/f3/23/35f323bc5b41dc4269001529e3ff1278.gif" class="img img-responsive">
                  </div>

                  <div style="overflow:auto;">
                    <div style="float:right;">
                      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                    </div>
                  </div>

                  <!-- Circles which indicates the steps of the form: -->
                  <div style="text-align:center;margin-top:40px;">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                  </div>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Sidebar -->
<div id="sidebar">
  <div class="inner">
    <!-- Search Box -->
    <section id="search" class="alt">
      <form method="get" action="#">
        <input type="text" name="search" id="search" placeholder="Search..." /> </form>
      </section>
      <!-- Menu -->
      <nav id="menu">
        <ul>
          <li><a href="<?=base_url()?>">HOME</a></li>
          <li><a href="<?=base_url()?>dashboard/logs">CAR DETECTION LOGS</a></li>
          <li><a href="<?=base_url()?>dashboard/flow">FLOW SETTINGS</a></li>
          <li><a href="<?=base_url()?>dashboard/licence">LICENCES RECORDS</a></li>
          <li> <span class="opener">LANE MONITORING</span>
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
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "save settings";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();

  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}



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