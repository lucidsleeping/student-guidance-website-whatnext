<!DOCTYPE html>
<html>
<head>
  <title>GETWACKED</title>
</head>
<body>


<meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="#" class="navbar-brand">WhatNext?</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="home.html">Home</a></li>
                         <li class="active"><a href="form.php">Form</a></li>
                         <li><a href="about-us.html">About Us</a></li>
                         <li><a href="blog-posts.html">Blog</a></li>
                    </ul>
               </div>

          </div>
     </section>


        <?php
        include "dbConn.php"; 
        $records = mysqli_query($db,"select * from student order by id desc"); 
        ($data = mysqli_fetch_array($records))    
       ?>
    <section id="">
        <div class="container">      
              <div class="row">
    
        <div class="col-md-12 col-sm-12">
            <h3>Your ID          - <?php echo $data['id'];?></h3> 
            <h3>Your Name        - <?php echo $data['name'];?></h3>
            <h3>Your GPA         - <?php echo $data['gpa'];?></h3>
            <h3>Your GRE Score   - <?php echo $data['grescore'];?></h3>
            <h3>Your GATE Score  - <?php echo $data['gatescore'];?></h3>
            <h3>Your CAT Score   - <?php echo $data['catscore'];?></h3>
            <h3>Your intrest     - <?php echo $data['interests'];?></h3>
            <h3>Your hobbie      - <?php echo $data['hobbies'];?></h3>
        </div>
</div>
</div>

    </section>    
<!--
         
                    <div class="col-md-8 col-sm-12">

                         <form action="insert.php" method="post">

                              <div class="col-md-13 col-sm-12">
                                   <h1>Enter your Information</h1>
                                   <br>
                                   <input type="text" id="name" class="form-control" placeholder="Enter full name" name="name" required>
                                   <br>
                                   <input type="email" id="email" class="form-control" placeholder="Enter email address" name="email" required>
                                   <br>
                                   <input type="number" id="gpa" class="form-control" placeholder="Enter Total GPA" name="gpa" required>
                                   <br>
                                   <input type="number" id="grescore" class="form-control" placeholder="Enter GRE Score" name="grescore" required>
                                   <br>
                                   <input type="number" id="tofelscore" class="form-control" placeholder="Enter Tofel Score" name="tofelscore" required>
                                   <br>
                              </div>

                              <div class="col-md-4 col-sm-12">
                              <div class="submitformat">
                              <input type="submit" name="submit" value="Submit" onclick="window.location='form.php';" value="click here">
                              <div>    
                              </div>

                         </form>
                    </div>
 
 


               </div>
          </div>   
-->



     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                              <?php echo $data['id']; ?>
                              </div>
                              <address>
                                   <p>212 Barrington Court <br>New York, ABC 10001</p>
                              </address>
                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2021 WhatNext?</p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Contact Info</h2>
                              </div>
                              <address>
                                   <p>+1 333 4040 5566</p>
                                   <p><a href="mailto:contact@company.com">contact@company.com</a></p>
                              </address>
                         </div>
                    </div>                    
               </div>
          </div>
     </footer>



     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>
</body>
</html>