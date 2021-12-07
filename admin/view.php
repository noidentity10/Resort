<?php
include('../connect.php');
$id =$_GET['id'];
$result = mysql_query("SELECT * FROM reserve WHERE id = '$id'");

while($row = mysql_fetch_array($result))
{	
$name = $row['name'];
$email = $row['email'];
$contact = $row['contact'];
$street  = $row['street'];
$number  = $row['number'];
$city  = $row['city'];
$postal  = $row['postal'];
$arrive  = $row['arrive'];
$depart  = $row['depart'];
$people  = $row['people'];
$room  = $row['room'];
$bedding  = $row['bedding'];
$comment = $row['comment'];

}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MRC RESORT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amcharts css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>


<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
  jQuery(document).ready(function($) {
  
	 $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
	
    })
	</script>
	<style>
.myButton {
	-moz-box-shadow: 3px 4px 0px 0px #1564ad;
	-webkit-box-shadow: 3px 4px 0px 0px #1564ad;
	box-shadow: 3px 4px 0px 0px #1564ad;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #79bbff), color-stop(1, #378de5));
	background:-moz-linear-gradient(top, #79bbff 5%, #378de5 100%);
	background:-webkit-linear-gradient(top, #79bbff 5%, #378de5 100%);
	background:-o-linear-gradient(top, #79bbff 5%, #378de5 100%);
	background:-ms-linear-gradient(top, #79bbff 5%, #378de5 100%);
	background:linear-gradient(to bottom, #79bbff 5%, #378de5 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#79bbff', endColorstr='#378de5',GradientType=0);
	background-color:#79bbff;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px;
	border:1px solid #337bc4;
	display:inline-block;
	cursor:pointer;
	color:#FFF;
	font-family:Arial;
	font-size:14px;
	font-weight:bold;
	padding:12px 44px;
	text-decoration:none;
	text-shadow:0px 1px 0px #528ecc;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #378de5), color-stop(1, #79bbff));
	background:-moz-linear-gradient(top, #378de5 5%, #79bbff 100%);
	background:-webkit-linear-gradient(top, #378de5 5%, #79bbff 100%);
	background:-o-linear-gradient(top, #378de5 5%, #79bbff 100%);
	background:-ms-linear-gradient(top, #378de5 5%, #79bbff 100%);
	background:linear-gradient(to bottom, #378de5 5%, #79bbff 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#378de5', endColorstr='#79bbff',GradientType=0);
	background-color:#378de5;
}
.myButton:active {
	position:relative;
	top:1px;
}

.info-text {
  text-align: left;
  width: 100%;
}

header, form {
  padding: 4em 10%;
}

.form-group {
  margin-bottom: 20px;
}

h2.heading {
  font-size: 18px;
  text-transform: uppercase;
  font-weight: 300;
  text-align: left;
  color: #506982;
  border-bottom: 1px solid #506982;
  padding-bottom: 3px;
  margin-bottom: 20px;
}

.controls {
  text-align: left;
  position: relative;
}
.controls input[type="text"],
.controls input[type="email"],
.controls input[type="number"],
.controls input[type="date"],
.controls input[type="tel"],
.controls textarea,
.controls button,
.controls select {
  padding: 12px;
  font-size: 14px;
  border: 1px solid #c6c6c6;
  width: 100%;
  margin-bottom: 18px;
  color: #888;
  font-family: 'Lato', 'sans-serif';
  font-size: 16px;
  font-weight: 300;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  -moz-transition: all 0.3s;
  -o-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.controls input[type="text"]:focus, .controls input[type="text"]:hover,
.controls input[type="email"]:focus,
.controls input[type="email"]:hover,
.controls input[type="number"]:focus,
.controls input[type="number"]:hover,
.controls input[type="date"]:focus,
.controls input[type="date"]:hover,
.controls input[type="tel"]:focus,
.controls input[type="tel"]:hover,
.controls textarea:focus,
.controls textarea:hover,
.controls button:focus,
.controls button:hover,
.controls select:focus,
.controls select:hover {
  outline: none;
  border-color: #9FB1C1;
}
.controls input[type="text"]:focus + label, .controls input[type="text"]:hover + label,
.controls input[type="email"]:focus + label,
.controls input[type="email"]:hover + label,
.controls input[type="number"]:focus + label,
.controls input[type="number"]:hover + label,
.controls input[type="date"]:focus + label,
.controls input[type="date"]:hover + label,
.controls input[type="tel"]:focus + label,
.controls input[type="tel"]:hover + label,
.controls textarea:focus + label,
.controls textarea:hover + label,
.controls button:focus + label,
.controls button:hover + label,
.controls select:focus + label,
.controls select:hover + label {
  color: #bdcc00;
  cursor: text;
}
.controls .fa-sort {
  position: absolute;
  right: 10px;
  top: 17px;
  color: #999;
}
.controls select {
  -moz-appearance: none;
  -webkit-appearance: none;
  cursor: pointer;
}
.controls label {
  position: absolute;
  left: 8px;
  top: 12px;
  width: 60%;
  color: #999;
  font-size: 16px;
  display: inline-block;
  padding: 4px 10px;
  font-weight: 400;
  background-color: rgba(255, 255, 255, 0);
  -moz-transition: color 0.3s, top 0.3s, background-color 0.8s;
  -o-transition: color 0.3s, top 0.3s, background-color 0.8s;
  -webkit-transition: color 0.3s, top 0.3s, background-color 0.8s;
  transition: color 0.3s, top 0.3s, background-color 0.8s;
  background-color: white;
}
.controls label.active {
  top: -11px;
  color: #555;
  background-color: white;
  width: auto;
}
.controls textarea {
  resize: none;
  height: 200px;
}

button {
  cursor: pointer;
  background-color: #1b3d4d;
  border: none;
  color: #fff;
  padding: 12px 0;
  float: right;
}
button:hover {
  background-color: #224c60;
}

.clear:after {
  content: "";
  display: table;
  clear: both;
}

.grid {
  background: white;
}
.grid:after {
  /* Or @extend clearfix */
  content: "";
  display: table;
  clear: both;
}

[class*='col-'] {
  float: left;
  padding-right: 10px;
}
.grid [class*='col-']:last-of-type {
  padding-right: 0;
}

.col-2-3 {
  width: 66.66%;
}

.col-1-3 {
  width: 33.33%;
}

.col-1-2 {
  width: 50%;
}

.col-1-4 {
  width: 25%;
}

@media (max-width: 760px) {
  .col-1-4-sm, .col-1-3, .col-2-3 {
    width: 100%;
  }

  [class*='col-'] {
    padding-right: 0px;
  }
}
.col-1-8 {
  width: 12.5%;
}
      
</style>
<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
			<h3 style="color:#FFF">Admin Panel</h3>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li>
                                <a href="index.php" ><i class="fa fa-cab (alias)"></i><span>Reservation Request</span></a>
                                
                            </li>
                            <li>
                                <a href="contact.php" ><i class="fa fa-home"></i><span>Contact Request</span></a>
                                
                            </li>
                      
                            <li>
                                <a href="account.php" ><i class="fa fa-dot-circle-o"></i><span>Account Settings</span></a>
                                
                            </li>
                            <li>
                                <a href="../index.php" ><i class="fa fa-reply"></i><span>Logout</span></a>
                                
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                   
                            
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                   
                    <!-- Primary table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
							
                                <h4 class="header-title">Reservation Request</h4>
                                <div class="data-tables datatable-primary">
								
	<div class="form-group">
    <h2 class="heading">Booking & contact</h2>
    <div class="controls">
	Name:<br>
      <input type="text" id="email" class="floatLabel" name="email" value="<?php echo $name ?>" readonly>
    </div>
    <div class="controls">
	Email:<br>
      <input type="text" id="email" class="floatLabel" name="email" value="<?php echo $email ?>" readonly>
    </div>       
    <div class="controls">
	Contact Number:<br>
      <input type="text" id="email" class="floatLabel" name="email" value="<?php echo $contact ?>" readonly>
    </div>
      <div class="grid">
        <div class="col-2-3">
          <div class="controls">
		  Street:<br>
           <input type="text" id="email" class="floatLabel" name="email" value="<?php echo $street ?>" readonly>
          </div>          
        </div>
        <div class="col-1-3">
          <div class="controls">
		  House Number:<br>
            <input type="text" id="email" class="floatLabel" name="email" value="<?php echo $number ?>" readonly>
          </div>          
        </div>
      </div>
      <div class="grid">
        <div class="col-2-3">
          <div class="controls">
		  City:<br>
            <input type="text" id="email" class="floatLabel" name="email" value="<?php echo $city ?>" readonly>
          </div>         
        </div>
        <div class="col-1-3">
          <div class="controls">
		  Postal Code:<br>
            <input type="text" id="email" class="floatLabel" name="email" value="<?php echo $postal ?>" readonly>
          </div>         
        </div>
      </div>
      
  </div>
  <!--  Details -->
  <div class="form-group">
    <h2 class="heading">Details</h2>
    <div class="grid">
    <div class="col-1-4 col-1-4-sm">
      <div class="controls">
        Arrive Date:
        <input type="text" id="email" class="floatLabel" name="email" value="<?php echo $arrive ?>" readonly>
      </div>      
    </div>
    <div class="col-1-4 col-1-4-sm">
      <div class="controls">
        Depart Date:
        <input type="text" id="email" class="floatLabel" name="email" value="<?php echo $depart ?>" readonly>
      </div>      
    </div>
      </div>
      <div class="grid">
    <div class="col-1-3 col-1-3-sm">
      <div class="controls">
	  Number of People:<br>
        <i class="fa fa-sort"></i>
        <input type="text" id="email" class="floatLabel" name="email" value="<?php echo $people ?>" readonly>
      </div>      
    </div>
    <div class="col-1-3 col-1-3-sm">
    <div class="controls">
      <i class="fa fa-sort"></i>
	 Room Type:<br> 
      <input type="text" id="email" class="floatLabel" name="email" value="<?php echo $room ?>" readonly>
     </div>     
    </div>

    <div class="col-1-3 col-1-3-sm">
    <div class="controls">
      <i class="fa fa-sort"></i>
	  Bedding:<br>
      <input type="text" id="email" class="floatLabel" name="email" value="<?php echo $bedding ?>" readonly>
     </div>     
    </div>
      
     </div>
      <div class="grid">
        <p class="info-text">Please describe your needs e.g. Extra beds, children's cots</p>
        <br>
        <div class="controls">
          <textarea name="comment" class="floatLabel" id="comments" readonly><?php echo $comment ?></textarea>
          </div>
  
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Primary table end -->
                   
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2021. All right reserved. MRC RESORT</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->

    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
