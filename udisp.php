
<!DOCTYPE html>
<html>
    
<!-- Mirrored from temsool.com/demo/cosmetico/shopping-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Jul 2022 12:18:25 GMT -->
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

        <link href="css/chosen.css" rel="stylesheet">


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
                                    <li><a href="udisp.php">YOUR ODRDER</a></li>
                                  

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



            <section class="section-shopping-cart">
                <div class="container">
			<?php
				$cn=mysqli_connect("localhost","root","","temp");
				$q="select * from order_mstr";
				$result=mysqli_query($cn,$q);
			?>
                    <div class="row-fluid">

                        <div class="span12">
                            <div class="page-content shopping-cart-page ">

                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="span2">ORDER ID</th>
                                        
                                            <th class="span2">NAME</th>
                                            <th class="span2">PRICE</th>
											<th class="span2">QUANTITY</th>
                                            <th class="span2">AMOUNT</th>
                                            <th class="span2">Image</th>
                                            <th class="span2">ACTION</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php	
                         
                         while($row=mysqli_fetch_array($result))
                               {
                           ?>
                                        <tr>

                          
                                            <td>
                                                <div class="thumb">
                                                   <?php echo $row['orid']?>
                                                </div>
                                            </td>
                                            
                                            <td>
                                                <div class="thumb">
                                                   <?php echo $row['pname']?>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="thumb">
                                                   <?php echo $row['price']?>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="thumb">
                                                   <?php echo $row['qty']?>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="thumb">
                                                   <?php echo $row['tamt']?>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="thumb">
                                                    <img alt="" src="pimage/<?php echo $row['pimage']?>" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="thumb">
                                                   <a href="udel.php?orid=<?php echo $row['orid']?>">Delete</a>
                                                </div>
                                            </td>
                                            
                                        </tr>

                                        <?php
	}
?>

                                     


                                    </tbody>
                                </table>
                                <div class="buttons-holder">
                                    <a class="cusmo-btn gray narrow" href="Uhome.php">continue shopping</a>
                                   
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

        <script type="text/javascript" src="js/css_browser_selector.js"></script>

        <script type="text/javascript" src="js/twitter-bootstrap-hover-dropdown.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing-1.3.js"></script>
        <script type="text/javascript" src="js/jquery.validate.js"></script>
       
        <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
        <script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
      
        <script type="text/javascript" src="js/bootstrap-slider.js"></script>
        <script type="text/javascript" src="js/jquery.raty.min.js"></script>
        <script type="text/javascript" src="js/chosen.jquery.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>



<!-- Mirrored from temsool.com/demo/cosmetico/shopping-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Jul 2022 12:18:31 GMT -->
</html>
