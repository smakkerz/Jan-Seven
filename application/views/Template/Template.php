<!DOCTYPE html>
<html>
  <head>
    <title><?= $Title ?></title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>Assets/images/posyandu-logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>Assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="<?php echo base_url(); ?>Assets/css/styles.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>Assets/vendors/datatables/css/jquery.dataTables.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="#"><?php echo $Company; ?></a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
    				<?php if($this->session->userdata("isLogin") == TRUE) { ?>
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $this->session->userdata('nama'); ?><b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.html">Profile</a></li>
	                          <li><a href="<?= base_url('Auth/Logout') ?>">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	                  <?php } ?>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>
	<div class="page-content">
    	<div class="row">
    		<?php if($this->session->userdata("isLogin") == TRUE) { ?>
		  	<div class="col-md-2 ">
		  		<div class="sidebar" style="display: block;">
                	<ul class="nav navbar-inverse">
                    <!-- Main menu -->
                    <?php
                    	foreach ($Menu as $key => $value) {
							$explodeURL = explode("/", $value);
							
							if(count($explodeURL) >= 2) {
							$list = explode("_", $explodeURL[1]); 
							} else {
								$list = $explodeURL;
							}

							if(count($list) >= 2) {
								$View = $list[0]." ".$list[1];
							} else {
								$View = $list[0];
							}
							echo "<li>";
							echo "<a href='".base_url(),$value."'><i class='glyphicon glyphicon-list'></i> ".$View."</a>";
							echo "</li>";
						}
					?>
					<li><a href="<?= base_url('Auth/logout') ?>">Logout</a></li>
                    <!-- <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Pages
                            <span class="caret pull-right"></span>
                         </a>
                         <ul>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="signup.html">Signup</a></li>
                        </ul>
                    </li> -->
                	</ul>
             	</div>
		  	</div>
		  	<?php } ?>
		  	<div class="col-md-10">
	        	<?php
                echo $contents;
                ?>
         	</div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?= base_url() ?>Assets/js/Jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?= base_url() ?>Assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>Assets/vendors/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>Assets/js/custom.js"></script>

      <link href="<?= base_url() ?>Assets/vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">

    <script src="<?= base_url() ?>Assets/vendors/datatables/dataTables.bootstrap.js"></script>

    <script src="<?= base_url() ?>Assets/js/custom.js"></script>
    <script src="<?= base_url() ?>Assets/js/tables.js"></script>
<script>
var slideIndex = 1;
	showDivs(slideIndex);

	function plusDivs(n) {
  		showDivs(slideIndex += n);
	}

	function showDivs(n) {
  		var i;
  		var x = document.getElementsByClassName("mySlides");
  		
  		if (n > x.length) {slideIndex = 1}    
  		if (n < 1) {slideIndex = x.length}
  		for (i = 0; i < x.length; i++) {
     		x[i].style.display = "none";  
  		}
  		x[slideIndex-1].style.display = "block";  
	}
</script>
  </body>
</html>