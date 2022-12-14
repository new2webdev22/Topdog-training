<?php

function send_Email()
{
    function input_data($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if (isset($_POST["email"])) {
        $username = input_data($_POST["username"]);
        $email = input_data($_POST["email"]);
        $message = input_data($_POST["message"]);
       
        $to = "jamiewebdev22@gmail.com";
        $body = "";

        $body .= "From: " . $username . "\r\n";
        $body .= "Email: " . $email . "\r\n";
        $body .= "Message: " . $message . "\r\n";
        if (isset($_POST["submit"])) {
            mail($to, "Top Dog Request Info", $body);
            header("Location: thankyou.php");
        }
    }
}
send_Email();

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Top Dog Training & Behaviour</title>

  <!-- Bootstrap cdn  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
  <!-- fontsawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous" />
  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;900&family=Ubuntu:wght@400;700&display=swap" rel="stylesheet" />

  <!-- CSSstylesheet -->
  <link rel="stylesheet" href="css/styles.css" />

</head>

<body>
  <section id="title">
    <div class="container-fluid">
      <!-- Nav Bar -->
      <nav class="navbar navbar-expand-lg navbar-dark">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-background"><a class="navbar-brand" href="">Top Dog Training & Behaviour</a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="#pricing">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#testimonials">Reviews</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#form">Contact</a>
              </li>
            </ul>
          </div>
        </div>
        <img class="logo-title" src="images/brand-logo.png" alt="logo">
      </nav>

      <!-- Title -->
      <div class="row">
        <div class="col-lg-6">
          <h1>
            Training consults, Board and Trains for any dogs Puppies to older
            dogs.
          </h1>
          <div class="btn-contain">
            <a href="#form"> <button type="button" href="#form" class="btn btn-dark btn-lg download-button">
                <i class="fa-solid fa-shield-dog"></i> </i> Contact
              </button></a>

          </div>
        </div>
        <div class="col-lg-6">
          <img class="impulse-img" src="images/impulse.jpg" class="dog-img" alt="impulse-image" />
        </div>
      </div>
    </div>
  </section>

  <!-- Features -->

  <section id="features">
    <div class="container-fluid features-row">
      <div class="row">
        <div class="col-lg-4">
          <i class="fa-solid fa-shield-dog fa-3x"></i>
          <h3>All Dogs.</h3>
          <p>
            We cater for all dogs of any shape size breed or age.
          </p>
        </div>

        <div class="col-lg-4">
          <i class="fa-solid fa-shield-dog fa-3x"></i>
          <h3>Reactivity.</h3>
          <p>From human to dog aggression and reactivity we can help you make your walks with your dog a joyful experience instead of a dreaded chore.</p>
        </div>

        <div class="col-lg-4">
          <i class="fa-solid fa-shield-dog fa-3x"></i>
          <h3>Off Leash Freedom.</h3>
          <p>Everyone wants their dog to be able to run off leash freely as a dog should be able to but with the peace of mind that your dog will come back to you when called under ANY situation. We specialise in remote collar training to ensure that your dog gets the freedom that it deserves and SAFELY.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->


  <section id="testimonials">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <h2>
            We had a session at Top Dog a few weeks back. The session was generous, organised and really clear. Brandon provided very direct and easy to implement advice for us and our 10 month old german shepherd.
          </h2>

          <em>David, Perth</em>
        </div>
        <div class="carousel-item">
          <h2 class="testimonial-text">
            Just finished our one on one training with Brandon and our Boxer x American Bulldog Casper, and I would (and have) recommend him in a heart beat to anyone wanting training for their dog. I have another dog, Joey, who was trained using a normal reward training method and I have Casper trained with Brandons reactive and positive reinforcement training. I can easily say she is far better behaved, more responsive and just generally happier and more relaxed than Boston and I will be using the same training techniques on him from now on to try and undo his reliance on treats
          </h2>

          <em>Beth, Perth</em>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <!-- Press -->

  <section id="press">
    <img class="press-logo" src="images/brandon-impulse.jpg" alt="tc-logo" />
    <img class="press-logo" src="images/jamie-impulse.jpg" alt="tnw-logo" />

  </section>

  <!-- Pricing -->

  <section id="pricing">
    <h2 class="price-title">A Plan for Every Dog's Needs</h2>
    <p>Simple and affordable sessions for your dog.</p>

    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="card">
          <div class="card-header">
            <h3>Phone Consult</h3>
          </div>
          <div class="card-body">
            <h2>Free</h2>
            <p>30 minute chat</p>
            <p>Solid Advice</p>

          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="card">
          <div class="card-header">
            <h3>Standard session</h3>
          </div>
          <div class="card-body">
            <h2>$80</h2>
            <p>1.5 hour session</p>
            <p>Teaching owner principles</p>
            <p>USB drive of training techniques</p>

          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="card border-dark">
          <div class="card-header bg-dark text-white">
            <h3>Premium session</h3>
          </div>
          <div class="card-body">
            <h2>$150</h2>
            <p>2 hour session</p>
            <p>Teaching owner principles</p>
            <p>USB drive of traning techniques</p>
            <p>Mobile (can come to you)</p>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact FORM -->

  <div class="container">
    <form id="form" action="" method="POST">
      <div class="title">Contact us</div>
      <!-- /**
        * ! user name Input here 
        **/ -->
      <div>
        <label for="username">Name</label>
        <i class="fa-solid fa-user"></i>
        <input type="text" name="username" id="username" placeholder="name here" />
        <i class="fa-solid fa-circle-exclamation failure-icon"></i>
        <i class="fa-solid fa-check success-icon"></i>
        <div class="error"></div>
      </div>

      <!-- /**
        * ! Email Input here 
        **/ -->
      <div>
        <label for="email">Email</label>
        <i class="fa-solid fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="email here" />
        <i class="fa-solid fa-circle-exclamation failure-icon"></i>
        <i class="fa-solid fa-check success-icon"></i>
        <div class="error"></div>
      </div>


      <!-- /**
        * ! Message Input here 
        **/ -->

      <div>
        <label for="message">Message</label>
        <i class="fa-solid fa-phone"></i>
        <textarea name="message" id="message" cols="30" rows="10" placeholder="message here"></textarea>
        <i class="fa-solid fa-circle-exclamation failure-icon"></i>
        <i class="fa-solid fa-check success-icon"></i>
        <div class="error"></div>
      </div>

      <button type="submit" id="submit" name="submit">Submit</button>
    </form>
  </div>

  <hr>
  <!--Section: Contact v.2-->
  <!-- Footer -->

  <footer id="footer">
    <i class="footer-logo fa-brands fa-twitter"></i>
    <i class="footer-logo fa-brands fa-facebook-f"></i>
    <i class="footer-logo fa-brands fa-instagram"></i>
    <i class="footer-logo fa-solid fa-envelope"></i>
    <p>?? Copyright Top Dog Training and Behaviour</p>
    <p>Brandon Fabris</p>
  </footer>
  <script src="script.js"></script>
  <script type="text/javascript">
   if(window.history.replaceState){
    window.history.replaceState(null, null, window.location.href);
   }
  </script>
</body>

</html>
