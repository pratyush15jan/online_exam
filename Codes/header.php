<!--Copyright (C) 2015 Pratyush Singh - All Rights Reserved
This code is the sole property of Pratyush Singh (pratyush15jan@gmail.com)
You may not use, distribute and modify this code or any part of this code at all.
All rights rest solely with Pratyush Singh-->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top bg-color img-padd">
	
        <div class="container-fluid">
		<div class="header-display" >
		<ul class="pull-right hidden-sm hidden-xs">
                        <li style="cursor: pointer;"><a class="contact_us-bg" href="">Contact Us</a></li>
                    
                      
                    </ul>
					
					<ul id="dnn_Header1_Header1_ulPreLogin" class="pull-right">
					<li id=""><a href="login.php" id="">LogIn</a></li>
                        <li id="" style="cursor: pointer;"><a class="sign-up2 sign-up22" href="signup.php">SIGN UP</a></li>
                        
                    </ul>
		              <ul class="pull-right hidden-sm hidden-xs">
                        <li style="display:none;"><a href="">Support</a>/</li>
                        <li><a href="index.php">Home</a>/</li>
                        
                        <li id="lLanguages" style="position: relative;"><a href="javascript:void(0)" id="" data-lang="en">English</a>/
                        
                                <nav class="regdivhide" style="display: none; top: 33px; right: -67px; width: 136px; font-size: 12px">
                                    <ul>
                                        <span class="topTip" style="left: 9px">
                                            <img src="//d2dmszldu8of4z.cloudfront.net/prelogin/Images/top_tooltip.jpg"></span>
                            
                                
                            
                                <li style="cursor: pointer;" class="inactiveLang" data-lang="Spanish(es)"><span class="ico_drp" style="cursor:pointer"></span>Spanish</li></ul>
                                </nav>
                            
                        </li>
						
                        <li><a href="">for Learners</a>/</li>

						<li>
                            <a id="" href=""> 1-800-567-8059</a>/</li>
                                               
						<li id="" style="display:none;"><a href="">Sign Out</a></li>
                    </ul>
					
					
					</div>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img  src="img/big-logo.png" alt="WizIQ" style="height: auto; width: auto;"></a>
            </div>
			
			
			

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="">Product</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="">Resources</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="">Customers</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="">Prising</a>
                    </li>
					<li>
                        <a class="page-scroll" href="">Partners</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

   <div class="welcome">
  <table width="100%">
  <tr>
  <td>
  <?php @$_SESSION['login']; 
  error_reporting(1);
  ?>
  </td>
    <td >
	<?php
	if(isset($_SESSION['login']))
	{
	 echo "<div align=\"right\"  ><strong><a href=\"login.php\"> Home </a>|<a href=\"signout.php\">Signout</a></strong></div>";
	
	 }
	 else
	 {
	 	echo "&nbsp;";
	 }
	?>
	</td>
	
  </tr>
  
</table>
  </div>