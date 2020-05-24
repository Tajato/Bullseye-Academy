<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Bulleyes Online Forex Trading">
    <meta name="keywords" content="bullseyeacademyllc.com,forex, trading, online trading, money,class,online class,entrepeneur,business,">
    <meta name="author" content="Deangelo Phillips">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="2j76CapQBq2lhPy4FGU1F_KZHg9ZA1QODfdztT0FlBw" />
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" async></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js" async></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" async></script>

    <link href="assets/css/style.css?v=0.001" rel="stylesheet">
    <!-- <script src="assets/js/main.js" defer></script> -->
    <script src="https://kit.fontawesome.com/0d4c0a0b4d.js" crossorigin="anonymous" async></script>

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
            <a href="#student-results" class="nav-item nav-link">Student Results</a>
            <a href="#footer" class="nav-item nav-link" >Contact</a>
            <a href="refundpolicy.php" class="nav-item nav-link you" >Return Policy</a>


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
          <a href="login.php" class="nav-item nav-link " >Login</a>
          <a href="courses.php" class="nav-item nav-link" >Courses</a>
          <a href="#student-results" class="nav-item nav-link">Student Results</a>
          <a href="#footer" class="nav-item nav-link">Contact</a>

          <a href="refundpolicy.php" class="nav-item nav-link you" >Return Policy</a>
        </div>
      </div>
    </nav>';
     }
?>
      <div class="head">
          <img src="assets/images/logo.jpg" class="logo">
          <div class="head-text">

          <h1 class="h1"><i class="fas fa-door-open"></i>Welcome!</h1>
          <p class="head-para">Thank you for choosing Bullseye Academy, where your financial freedom is our number one priority. With dozens of consistenly profitable students currently enrolled, we are home to the most effective educational system for learning how to trade in the foreign exchange market. </p>
            </div>
          </div>
      </header>

      <section class="forex-sec">
        <h1 id="forex-text" style="text-align:center;">What is Forex?</h1>
        <p id="forex-para">Forex is simply a shortened term for FOReign EXchange. The FOReign EXchange market, while also being recession proof, is the most liquid market in the entire world, exchanging approximately 6.6 trillion dollars daily. Profit is made from the forex market by trading one currency against another, using a mobile device or computer to analyze the markets and place trades. </p>
        <video  autoplay  controls loop id="forex">
            <source src="assets/videos/forex.mp4" type="video/mp4">
            Your browser does not support the video tag.

        </video>
      </section>

      <section class="about mb-5">
          <h1 style="text-align:center; font-size:50px;"><i class="far fa-handshake fa-lg" style="text-align:center;"></i>

            Meet The CEO</h1>
          <p class="about-para">Hi, my name is D’Angelo Phillips. I am a 20 year old entrepreneur who was born and raised in St. Catherine, Jamaica.
              I am currently pursuing a dual degree in Mechanical Engineering and Computer Science at the renowned Pennsylvania State University.
                Growing up I’ve always had an entrepreneurship mindset.

              It is a very firm belief of mine that people possess all the power they need in order to live life on their own terms and that working an ordinary 9-5 job would never suffice
               and allow an individual to live their life to the fullest.
               After seeing many people following the traditional path of earning an income, I realized that the majority was missing out on the pleasures that life really has to offer. </p>
               <p class="text-center">
               <img src="assets/images/ceo.jpeg" id="ceo">
              </p>
            <p class="about-para">The aim of 90% of people in the working world is to be Financially Free and Recession Proof, however, that will never happen if one is working on another’s terms as you can be dismissed at any point in time.
                After going through the process of perfecting my Forex skill-set, I started trading and making consistent profits with very minimal losses for several months to date. The process of mastering my skill-set opened my eyes to how powerful and lucrative the Forex market truly is. My style of trading and education that I offer has proven itself repeatedly to be of the highest value and I’m now devoted to sharing it with the world.

            </p>
      </section>

      <section id="student-results mb-5">
      <h1 class="text-center mb-4" style="font-size:50px;"><i class="fas fa-user-ninja fa-lg"></i>Our Student Results</h1>
        <div class="card-columns ml-2">
        <div class="card w-75 ">
        <img class="card-img" src="assets/images/img (1).jpeg">
        </div>

        <div class="card w-75">
        <img class="card-img" src="assets/images/img (2).jpeg">
        </div>
        <div class="card w-75">
        <img class="card-img" src="assets/images/img (3).jpeg">
        </div>
        <div class="card w-75">
        <img class="card-img" src="assets/images/img (4).jpeg">
        </div>
        <div class="card w-75">
        <img class="card-img" src="assets/images/img (5).jpeg">
        </div>
        <div class="card w-75">
        <img class="card-img" src="assets/images/img (6).jpeg">
        </div>
        <div class="card w-75">
        <img class="card-img" src="assets/images/img (7).jpeg">
        </div>
        <div class="card w-75">
        <img class="card-img" src="assets/images/img (8).jpeg">
        </div>
        <div class="card w-75">
        <img class="card-img" src="assets/images/img (9).jpeg">
        </div>
        <div class="card w-75">
        <img class="card-img" src="assets/images/img (10).jpeg">
        </div>
        <div class="card w-75">
        <img class="card-img" src="assets/images/img (11).jpeg">
        </div>
        <div class="card w-75">
        <img class="card-img" src="assets/images/img (12).jpeg">
        </div>
        <div class="card w-75">
        <img class="card-img" src="assets/images/img (13).jpeg">
        </div>
        <div class="card w-75">
        <img class="card-img" src="assets/images/img (14).jpeg">
        </div>
        <div class="card w-75">
        <img class="card-img" src="assets/images/img (15).jpeg">
        </div>
        <div class="card w-75">
        <img class="card-img" src="assets/images/img (16).jpeg">
        </div>
        <div class="card w-75">
        <img class="card-img" src="assets/images/img (17).jpeg">
        </div>
        <div class="card w-75">
        <img class="card-img" src="assets/images/img (18).jpeg">
        </div>
        <div class="card w-75">
        <img class="card-img" src="assets/images/img (19).jpeg">
        </div>
        <div class="card w-75">
        <img class="card-img" src="assets/images/img (20).jpeg">
        </div>
        <div class="card w-75">
        <img class="card-img" src="assets/images/img (21).jpeg">
        </div>
        <div class="card w-75">
        <img class="card-img" src="assets/images/img (22).jpeg">
        </div>
        <div class="card w-75">
        <img class="card-img" src="assets/images/img (23).jpeg">
        </div>
        <div class="card w-75">
        <img class="card-img" src="assets/images/img (24).jpeg">
        </div>
        <div class="card w-75">
        <img class="card-img" src="assets/images/img (25).jpeg">
        </div>
        <div class="card w-75">
        <img class="card-img" src="assets/images/img (26).jpeg">
        </div>
        <div class="card w-75">
        <img class="card-img" src="assets/images/img (27).jpeg">
        </div>
        <div class="card w-75">
        <img class="card-img" src="assets/images/img (28).jpeg">
        </div>
        <div class="card w-75">
        <img class="card-img" src="assets/images/img (29).jpeg">
        </div>
        <div class="card w-75">
        <img class="card-img" src="assets/images/img (30).jpeg">
        </div>
        <div class="card w-75">
        <img class="card-img" src="assets/images/img (31).jpeg">
        </div>
        <div class="card w-75">
        <img class="card-img" src="assets/images/img (32).jpeg">
        </div>
        <div class="card w-75">
        <img class="card-img" src="assets/images/img (33).jpeg">
        </div>
        <div class="card w-75">
        <img class="card-img" src="assets/images/img (34).jpeg">
        </div>
        <div class="card w-75">
        <img class="card-img" src="assets/images/img (35).jpeg">
        </div>


        </div>
      </section>

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
