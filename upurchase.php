<?php
ob_start();
?>
<!DOCTYPE html>
<html>
    
<!-- Mirrored from temsool.com/demo/cosmetico/products-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Jul 2022 12:18:37 GMT -->
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

        <link href="css/dataslider.css" rel="stylesheet">
        <link href="css/chosen.css" rel="stylesheet">
        <link href="css/flexslider.css" rel="stylesheet">

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
          
                
                <div class="breadcrumb-holder">
                    <div class="container">
                        <ul class="inline bcrumb">
                            <li>
                                <a href="index.html">home</a>
                            </li>
                            <li>face</li>
                            <li class="active">all products</li>


                        </ul>

                        <div class="grid-list-buttons">
                            <ul class="inline">
                                <li class="active"><a data-toggle="tab" href="#grid-view"><i class="icon-th-large"></i> Grid</a></li>
                                <li ><a data-toggle="tab" href="#list-view"><i class="icon-th-list"></i> List</a></li>

                            </ul>

                        </div>
                    </div>
                </div>
           
  </section>

		<form method="Post">

            <section class="section-two-columns">
                <div class="container">
				 <?php
                  error_reporting(E_ERROR | E_PARSE);
					$pid=$_GET['pid'];
					$cn=mysqli_connect("localhost","root","","temp");
					$q="select * from product_mstr1 where pid=$pid";
					$result=mysqli_query($cn,$q);
					$row=mysqli_fetch_array($result);
				?>
                    <div class="row-fluid">
                       
                        <div class="span9 ">
                            <div class="page-content">
                                <div class="products-page-head">
                                    <h1><?php echo $row['pname']?></h1>
                                    <div class="tag-line">
                                       
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span7">
                                        <div class="flexslider product-gallery">
                                            <ul class="slides">
                                                <li data-thumb="pimage/<?php echo $row['pimage']?>">
                                                    <img alt=""  src="pimage/<?php echo $row['pimage']?>" />
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
									
                                    <div class="span5">
                                        <div class="product-info-box">
                                            
                                            <hr>
                                            <div class="info-holder">
                                                <h4>Product ID: <?php echo $row['pid']?></h4>
                                                <p>
                                                    <?php echo $row['pdesc']?> 
                                                </p>
                                            </div>
                                            <hr>
                                            <div class="drop-downs-holder">
                                                

                                                <div class="drop-selector">
                                                    <span>QTY</span>
                                                    <select class="chosen-select">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>

                                                    </select>
                                                </div>
                                            </div>

                                            <hr>
                                            <div class="price-holder">
                                                <div class="price">
                                                    <span>RS: <?php echo $row['price']?></span>
                                                    
                                                </div>
                                            </div>
                                            <div class="buttons-holder">
                                                
												<input type="Submit" value="Purchase" class="cusmo-btn add-button" name="order" />
                                               
                                            </div>
                                        </div>


                                    </div>


                                </div>
<?php 
		if(isset($_POST["order"]))
		{
			$cn=mysqli_connect("localhost","root","","temp");
			session_start();
			$uname=$_SESSION['email1'];
			//$uname=$_GET["uname"];
            $pimage =$row['pimage'];
			$pname=$row['pname'];
			$price=$row['price'];
			$qty=1;
			//$tamt=$_POST["tamt"];
			
			$tamt=$price;
			$q="insert into order_mstr values(null,'$uname','$pname',$price,$qty,$tamt,'$pimage')";
			if(mysqli_query($cn,$q))
				header('location: udisp.php');
			else
				echo "ERROR : Inserted";
			
		}
?>                                
                               
                                 
                                
                            </div>
                        </div>
                    </div>
                     </div>
            </section>

            
        </form>    
            

        </div>


        <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
        <script src="jquery-migrate-1.1.1.min.js"></script>
        <script src="css/bootstrap/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="js/css_browser_selector.js"></script>

        <script type="text/javascript" src="js/twitter-bootstrap-hover-dropdown.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing-1.3.js"></script>
        <script type="text/javascript" src="js/chosen.jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.raty.min.js"></script>
        <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
     
        <script type="text/javascript" src="js/bootstrap-slider.js"></script>
       
        <script type="text/javascript" src="js/script.js"></script>
    </body>



<!-- Mirrored from temsool.com/demo/cosmetico/products-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Jul 2022 12:18:38 GMT -->
</html>
