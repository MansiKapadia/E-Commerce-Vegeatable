<?php
ob_start();
?>
<!DOCTYPE html>

<html>
  
<!-- Mirrored from temsool.com/demo/cosmetico/checkout-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Jul 2022 12:18:31 GMT -->
<head>

        <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <title>Cosmetic - Modern Beauty Shop Template</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,700,600,800' rel='stylesheet' type='text/css'>
        <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

        <link href="css/icheck/minimal/yellow.css" rel="stylesheet">


        <!--[if IE 7]>
      
        <link href="css/font-awesome/css/font-awesome-ie7.min.css" rel="stylesheet">
        
        <![endif]-->
        <link  rel="stylesheet" href="css/style.css">

       <link  rel="stylesheet" href="css/responsive.css">


    </head>
    <body>



        <div class="wrapper">
            <section class="section-head">
                <div class="container">
                    <div class="row-fluid top-row">
                        
                        <div class="span4 logo-holder">
                            <div class="logo">
                                <span class="icon">
                                    <img alt="" src="images/logo.png" />
                                </span>
                                <span class="text">
                                    <a href="index.html">FARMER MARKET<span></span></a>
                                </span>
                            </div>




                        </div>

                        <div class="span4 cart-holder">
                            <div class="top-menu cart-menu">
                                <ul class="inline">
                                    
                                    

                                   

                                </ul>


                            </div>
                        </div>
                    </div>


                </div>

                <div class="top-categories">
                    <div class="container">
                        <div class="row-fluid">
                            <div class="span9">
                                <ul class="inline top-cat-menu">
                                    <li>
                                        <a href="signin.php">LOG IN</a>
                                    </li>
                                    <li><a href="Uhome.php">HOME</a></li>
                                    <li><a href="Ucontactus.php">CONTACT US</a></li>

									<li><a href="Uaboutus.php">ABOUT US</a></li>
                                    <li><a href="upurchase.php">PURCHASE</a></li>
                                    <li><a href="udisp.php">YOUR ORDER</a></li>
                                    

                                </ul>
                                
                                
                                <select class="top-cat-menu dropdown">
                                <option value="products-grid.html">
                                  FACE
                                </option>


                                 <option value="products-grid.html">
                                   BODY
                                </option>
                                 <option value="products-grid.html">
                                   MAKE UP
                                </option>
                                 <option value="products-grid.html">
                                   HAIRS
                                </option>
                                 <option value="products-grid.html">
                                   PERFUMES
                                </option>
                                 <option value="products-grid.html">
                                   GIFTS
                                </option>
                                 <option value="products-grid.html">
                                   BRANDS
                                </option>
                                
                                 <option value="products-grid.html">
                                   MUST HAVE
                                </option>



                            </select>


                                
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
          
                
                
           
  </section>



            <section class="section-checkout">
                <div class="container">

                    <div class="phase-title current">
                        <h1>DOMAIN REGISTRATION</h1>
                    </div>

                    <div class="row-fluid">
                        <div class="span6">
                            <div class="form-holder right-border">
                                <h4>registered user</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sem purus, interdum a mi eget.
                                </p>
                                <form method="post">
                                    <div class="control-group">

                                        <div class="controls">
                                            <div class="form-label ">Email</div>

                                            <input type="text" id="email"   name="email1"  class="required span12 cusmo-input"  />

                                        </div>
                                    </div>

                                    <div class="control-group">

                                        <div class="controls">
                                            <div class="form-label ">Password</div>

                                            <input id="password" required="" type="password" name="password1" class="required span12 cusmo-input"  />

                                        </div>
                                    </div>
                                    <div class="rememberme">
                                        <input type="checkbox" class="iCheck" > Remember me
                                    </div>
                                    <div class="forget-password">
                                        <a href="#">Forgot your password?</a>
                                    </div>
                                    <div class="button-holder">
                                    <button class="cusmo-btn narrow " type="submit" name="sublog" >log in</button>
                                    </div>
                                </form>
                            </div>
                            
                        </div>

			<?php
			
            error_reporting(E_ERROR | E_PARSE);
				if(isset($_POST["sublog"]))
				{
					$cn=mysqli_connect("localhost","root","","temp");
					$password1=$_POST["password1"];
					$email1=$_POST["email1"];				
		     		$q="select * from user_mstr where email='$email1' and password='$password1'";
			
					$result=mysqli_query($cn,$q);
					$c=mysqli_num_rows($result);
					if($c>0)
					{
						//mysqli_close($cn);
						//echo "<script>window.location.href="Uhome.php"</script>";
						session_start();
						$_SESSION["email1"]=$email1;
						header('location: Uhome.php');
                       // ob_end_flush();
						//echo "record found" . $_SESSION["email1"];
					} 
					else
					{
						echo "record not found";
					}
					//mysqli_close($cn);
					
				}
			?>
			

                        <div class="span6">
                            <div class="form-holder">
                                <h4>new member</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sem purus, interdum a mi eget.
                                </p>
                                <form  method="post">
	 <div class="control-group">

                                        <div class="controls">
                                            <div class="form-label ">Name</div>

                                            <input type="text"  name="uname"  class="required span12 cusmo-input"  />

                                        </div>
                                    </div>
                                    <div class="control-group">

                                        <div class="controls">
                                            <div class="form-label ">Email</div>

                                            <input type="text"  name="email"  class="required span12 cusmo-input"  />

                                        </div>
                                    </div>

                                    <div class="control-group">

                                        <div class="controls">
                                            <div class="form-label ">Password</div>

                                            <input type="password"  name="password" class="required span12 cusmo-input"  />

                                        </div>
                                    </div>
                                    <div class="control-group">

                                        <div class="controls">
                                            <div class="form-label ">Contact</div>

                                            <input type="contact"  name="contact" class="required span12 cusmo-input"  />

                                        </div>
                                    </div>
                                    <button class="cusmo-btn narrow pull-right" type="submit" name="save" >sign up</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Insert code For New User -->
			
			<?php  
				if(isset($_POST["save"]))
				{
					$cn=mysqli_connect("localhost","root","","temp");
					session_start();
					$uname=$_POST["uname"];
					$_SESSION["uname"]='$uname';
					$email=$_POST["email"];
					$password=$_POST["password"];
					$contact=$_POST["contact"];
					
					
					//check all the feild are full
	if($uname !="" && $password !="" && $contact !="" && $email !="" )
	{
		//check valid phone no
		if(preg_match('/^[0-9]{10}+$/', $contact)) 
		{
					
					$q="insert into user_mstr values(null,'$uname','$email','$password',$contact)";
					if(mysqli_query($cn,$q))
						echo "Record Inserted";
					else
						echo "error : inserted";

					mysqli_close($cn);
				}
				
		else 
		{
			echo " Invalid Phone Number";
		}
		
		
	}
	else
		{
			echo "Fill all the field";
		}
				}
			?>
                </div>
            </section>

            

           
          

        </div>


        <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
        <script src="jquery-migrate-1.1.1.min.js"></script>
        <script src="css/bootstrap/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="js/css_browser_selector.js"></script>
        <script src="js/jquery.icheck.min.js"></script>
        <script type="text/javascript" src="js/twitter-bootstrap-hover-dropdown.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing-1.3.js"></script>
        <script type="text/javascript" src="js/jquery.validate.js"></script>


        <script type="text/javascript" src="js/bootstrap-slider.js"></script>


        <script type="text/javascript" src="js/script.js"></script>
    </body>



<!-- Mirrored from temsool.com/demo/cosmetico/checkout-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Jul 2022 12:18:34 GMT -->
</html>
