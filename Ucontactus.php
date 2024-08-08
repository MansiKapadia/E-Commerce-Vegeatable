<!DOCTYPE html>
<html>
    
<!-- Mirrored from temsool.com/demo/cosmetico/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Jul 2022 12:18:34 GMT -->
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
                        <div class="span4">
                             
                        </div>
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


          

            <section class="section-contact">
                <div class="container">
                    
                    <div class="row-fluid">
                        <div class="span6">
                            <div class=" contact-form-holder">
                                   
                                    <h4>leave message</h4>
                               
                                    <div class="message-box"></div>

                                    <form class="contact-form" method="post" >
                                        
                                        <div class="control-group inline-block span6">

                                                    <div class="controls">
                                                        <label class="form-label ">Name</label>

                                                        <input id="cname"   name="name" size="25" class="required cusmo-input span12"  />

                                                    </div>
                                                </div>

                                                <div class="control-group inline-block span6">

                                                    <div class="controls">
                                                        <label  class="form-label">Email</label>
                                                        <input id="cemail"   name="mail" class="required cusmo-input span12"  />

                                                    </div>
                                                </div>
                                        
                                                <div class="control-group">

                                                    <div class="controls">
                                                        <label  class="form-label">Your Message</label>

                                                        <textarea  id="ccomment" name="message" rows="5"  cols="5" class="required span12 cusmo-input"></textarea>
                                                    </div>
                                                </div>

                                        <div class="text-right">
                                                <input class="submit cusmo-btn narrow" type="submit" value="SUBMIT" name="submit" />
                                        </div>
                                                <div id="loading" class="pull-right">
                                                    <img alt="" src="images/loader.gif" />
                                                </div>
												
												<?php
													if(isset($_POST["submit"]))
													{
														$cn=mysqli_connect("localhost","root","","temp");
														$name=$_POST["name"];
														$mail=$_POST["mail"];
														$message=$_POST["message"];
														
														$q="insert into contact_mstr values('$name','$mail','$message')";
														
														if(mysqli_query($cn,$q))
															echo "Record inserted Successfully";
														else
															echo "ERROR : Record";
													}
												?>


                                    </form>
                                </div>
                        </div>
                        <div class="span6">
                            <div class="contact-info-boxes">
                            <h4>contact information</h4>
                            <div class="row-fluid contact-info">
                                <div class="span6">
                                    <p>
                                    Vegetable shop<br>
                                        Good Town 122,vegetable Center,<br>
                                        New York, USA<br><br>
                                        <a class="email-link" >mansikapadia@gmail.com</a>
                                    </p>
                                </div>
                                <div class="span6">
                                    <p>
                                        
                                        <strong>Information:</strong><br>
                                        +1 (123) 456 7890<br><br>
                                        
                                         <strong>Delivery</strong><br>
                                        +45 (123) 321 1221
                                        
                                    </p>
                                </div>
                            </div>
                        </div>
                              </div>
                    </div>
                    
                </div>




            </section>

           
           
            

        </div>


        <script type="text/javascript" src="code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
        <script src="css/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
        <script type="text/javascript" src="js/css_browser_selector.js"></script>
        <script src="js/jquery.icheck.min.js"></script>
        <script type="text/javascript" src="js/twitter-bootstrap-hover-dropdown.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing-1.3.js"></script>
        <script type="text/javascript" src="js/jquery.validate.js"></script>
        <script type="text/javascript" src="js/gmap3.min.js"></script>

        <script type="text/javascript" src="js/bootstrap-slider.js"></script>


        <script type="text/javascript" src="js/script.js"></script>
    </body>



<!-- Mirrored from temsool.com/demo/cosmetico/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Jul 2022 12:18:34 GMT -->
</html>
