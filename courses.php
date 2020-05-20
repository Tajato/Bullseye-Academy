<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="assets/css/style.css?v=0.001" rel="stylesheet">
    <script src="assets/js/main.js" async></script>
    <script src="https://kit.fontawesome.com/0d4c0a0b4d.js" crossorigin="anonymous"></script>

</head>
<body>
    <header>
    <?php
     if (isset($_SESSION['email'])) {
        
    echo '<nav class="navbar navbar-expand-sm navbar-light bg-dark">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a href="index.php" class="nav-item nav-link active">Home <span class="sr-only">(current)</span></a>
            <a href="courses.php" class="nav-item nav-link" >Courses</a>
            <a href="#footer" class="nav-item nav-link" >Contact</a>
            <a href="refundpolicy.php" class="nav-item nav-link" >Return Policy</a>
           

            <a href="logout.php" style="position:relative;" class="nav-item nav-link text-primary p-2">Logout</a>

            
          </div>
        </div>
      </nav>';
     } else {
      echo '<nav class="navbar navbar-expand-sm navbar-light bg-dark">
        
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a href="index.php" class="nav-item nav-link active" >Home <span class="sr-only">(current)</span></a>
          <a href="signup.php" class="nav-item nav-link" >Sign Up</a>
          <a href="login.php" class="nav-item nav-link" >Login</a>
          <a href="courses.php" class="nav-item nav-link" >Courses</a>
          <a href="#footer" class="nav-item nav-link" >Contact</a>
         

          <a href="refundpolicy.php" class="nav-item nav-link" >Return Policy</a>
        </div>
      </div>
    </nav>';
     }
      ?>
      <div class="head">
        <img src="assets/images/logo.jpg" class="logo">
        <div class="course-head-text">
            <h1><i class="fas fa-eye"></i>Explore Our Courses</h1>
            <p class="course-para" style="font-family:'Oswald',sans-serif;">INVEST IN YOURSELF TODAY, YOU ARE <strong>WORTH</strong> IT!</p>
        </div>
        </header>

        <div class="card-deck d-flex flex-wrap m-2">
            <div class="card">
                <div class="card-header">
                    <h5 class="text-center">2 Month Online Forex Trading Course</h5>
                </div>
              <!--<img class="card-img-top" src="..." alt="Card image cap">-->
              <i style="color:blue;" class="fas fa-balance-scale fa-5x text-center"></i>

              <p class="text-center" style="font-size:20px;position:relative;top:20px;">$250.00 USD</p>
              <div class="card-body">
                <h5 class="card-title"></h5>
                <ul class="card-text p-2  m-2 fa-ul">
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Done via live webinars twice per week for 8 weeks (1Hour Sessions x16).</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>In depth introduction and breakdown of The Foreign Exchange Market. </li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Mastering the art of Fundamental and Technical Analysis. </li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Keys to Proper Risk/Money Management.</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Market Psychology.</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>“Bullseye” market entry and exits.</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Lifetime access to VIP Telegram Group.</li>
                </ul>
              </div>
              <div class="card-footer text-center">
                <form action="purchase.inc.php" method="post">
                  <button href="purchase.php" name="purchase-submit1" class="btn btn-primary">Purchase</button>
                </form>
              </div>
              </div>
        

              <div class="card">
                <div class="card-header">
                    <h5 class="text-center">4 Month Online Forex Trading Course</h5>
                </div>
              <!--<img class="card-img-top" src="..." alt="Card image cap">-->
              <i style="color:blue;" class="fas fa-balance-scale fa-5x text-center"></i>

              <p class="text-center" style="font-size:20px;position:relative;top:20px;">$400.00 USD</p>
              <div class="card-body">
                <h5 class="card-title"></h5>
                <ul class="card-text p-2 m-2 fa-ul">
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Done via live webinars twice per week for 16 weeks (1Hour Sessions x32).</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>In depth introduction and breakdown of The Foreign Exchange Market. </li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Mastering the art of Fundamental and Technical Analysis. </li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Keys to Proper Risk/Money Management.</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Market Psychology.</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>“Bullseye” market entry and exits.</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Lifetime access to VIP Telegram Group.</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Access to all recorded content</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Access to all of mentor’s chart analysis and trades taken on a daily basis. </li>
                </ul>
              </div>

              <div class="card-footer text-center">
                <form action="purchase.inc.php" method="post">
                  <button  name="purchase-submit2" class="btn btn-primary">Purchase</button>
                  </form>
              </div>
              </div>

              <div class="card">
                <div class="card-header">
                    <h5 class="text-center">2 Month Online 1-on-1 Forex Trading Course</h5>
                </div>
                <i style="color:blue;" class="fas fa-landmark fa-5x text-center"></i>

              <p class="text-center" style="font-size:20px;position:relative;top:20px;">$550.00 USD</p>
              <!--<img class="card-img-top" src="..." alt="Card image cap">-->
              <div class="card-body">
                <h5 class="card-title"></h5>
                <ul class="card-text p-2 m-2 fa-ul">
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Done via live webinars twice per week for 16 weeks (1Hour Sessions x32).</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>In depth introduction and breakdown of The Foreign Exchange Market. </li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Mastering the art of Fundamental and Technical Analysis. </li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Keys to Proper Risk/Money Management.</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Market Psychology.</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>“Bullseye” market entry and exits.</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Lifetime access to VIP Telegram Group.</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Access to all recorded content.</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Access to all of mentor’s chart analysis and trades taken on a daily basis. </li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>24/7 support and access to mentor</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Convenient (for student) webinar schedule</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Lifetime Mentorship.</li>
                </ul>
              </div>
              
              <div class="card-footer text-center">
                <form action="purchase.inc.php" method="post">
                 <button  name="purchase-submit3"class="btn btn-primary">Purchase</button>
               </form>
                </div>
              </div>

              <div class="card">
                <div class="card-header">
                    <h5 class="text-center">4 Month Online 1-on-1 Forex Trading Course</h5>
                </div>
              <!--<img class="card-img-top" src="..." alt="Card image cap">-->
              <i style="color:blue;" class="fas fa-landmark fa-5x text-center"></i>

              <p class="text-center" style="font-size:20px;position:relative;top:20px;">$700.00 USD</p>
              <div class="card-body">
                <h5 class="card-title"></h5>
                <ul class="card-text p-2 m-2 fa-ul">
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Done via live webinars twice per week for 8 weeks (1Hour Sessions x16).
                    </li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>In depth introduction and breakdown of The Foreign Exchange Market. 
                    </li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Mastering the art of Fundamental and Technical Analysis. 
                    </li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Keys to Proper Risk/Money Management.
                    </li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Market Psychology.
                    </li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>“Bullseye” market entry and exits.
                    </li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Lifetime access to VIP Telegram Group.
                    </li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Access to all recorded content
                    </li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Access to all of mentor’s chart analysis and trades taken on a daily basis. 
                    </li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>24/7 support and access to mentor
                    </li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Convenient (for student) webinar schedule
                    </li>
                    
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Lifetime Mentorship 
                    </li>
                </ul>
              </div>
              <div class="card-footer text-center">
                <form action="purchase.inc.php" method="post">
                  <button  name="purchase-submit4" class="btn btn-primary">Purchase</button>
                </form>
                </div>
              </div>
              
            </div>

            <footer id="footer" class="bg-dark">
      <nav class="nav bg-dark justify-content-center m-4">
          <a href="https://www.instagram.com/bullseye_academy/" class="nav-link" target="_blank" ><i class="fab fa-instagram fa-lg"></i></a>
          <a href="https://www.snapchat.com/add/dangelo_876" class=" nav-link" target="_blank" ><i class="fab fa-snapchat-ghost fa-lg"></i></a>
          <a href="" class="nav-link " ><i class=" nav-link fas fa-phone-volume fa-lg"></i>(876) 451-7583</a>
          <a href="" class="nav-link" ><i class="nav-link fas fa-phone-volume fa-lg"></i>(470) 529-6212</a>
  
    </nav>

      </footer>
           
          
      
      
</body>
</html>