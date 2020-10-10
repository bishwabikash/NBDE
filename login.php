<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- fonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
    crossorigin="anonymous" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

  <link rel="stylesheet" href="login.css">

  <title>NBDE-A SKILL INDIA INITIATIVE</title>

  <style>
    .navbar {
      overflow: hidden;
    }
    .login-section{
      overflow: hidden;
    }

    .footer-section {
      overflow: hidden;
    }
  </style>
</head>


<body>

  <!-- menubar section -->
  <nav class="navbar navbar-expand-lg navbar-light top-menu bg align-items-center">
    <div class="container-fluid">
      <a class="navbar-brand " href="#">
        <img class="img-cl" src="images/dd.png" alt="">
        <img class="img-cl img2" src="images/NBDE.png" alt="">


      </a>


      </a>



      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>



      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto menu1">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Courses</a></li>
          <li><a href="#">Franchise</a></li>
          <li><a href="#">Academics</a></li>
          <li><a href="#">Events</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Contact</a></li>
        </ul>

        <div class="header-login d-flex ">
          <div class="login">

            <a href="#" class="btn btn-primary">Log-in Portal</a>


          </div>
        </div>

      </div>
    </div>
  </nav>

  <!-- login portal section -->

  <div class="login-section">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-6">
                  <form>
                      <div class="franchise-login">
                          <h4> FRANCHISE LOGIN </h4>

                          <div class="box1">
                              <i class="fas fa-user"></i>
                              <span>Username</span>
                              <input type="text" placeholder="Enter your username ">
                          </div>

                          <div class="box2">
                              <i class="fas fa-key"></i>
                              <span>Password</span>
                              <input type="password" placeholder="Enter your password">
                          </div>

                          <input type="submit" class="submit-button">

                      </div>
                  </form>

              </div>
              <div class="col-lg-6">
                  <form>
                      <div class="admin-login">
                          <h4>ADMIN LOGIN</h4>

                          <div class="box1">
                              <i class="fas fa-user"></i>
                              <span>Username</span>
                              <input type="text" name="adam" placeholder="Enter your username ">
                          </div>

                          <div class="box2">
                              <i class="fas fa-key"></i>
                              <span>Password</span>
                              <input type="password" name="adam_pass" placeholder="Enter your password">

                          </div>

                          <input type="submit" class="submit-button">

                      </div>
                  </form>
              </div>
          </div>

      </div>

  </div>


  <!-- footer section -->


  <div class="footer-section">
      <div class="container-fluid ">

          <div class="row row1">
        <div class="col-lg-6 w-50 ">
          <div class="footer-menu">
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Franchise</a></li>
              <li><a href="#">Courses</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Job Portal</a></li>
            </ul>
          </div>



        </div>
        <div class="col-lg-6 w-50">
          <div class="footer-contact">
            <h6>Contact us :</h6>
            <p>Phone : 0000000000</p>
            <p>Email : xxxxxxx@xyn.com</p>

          </div>


        </div>
      </div>
      <div class="row row2">
        <div class="footer-end text-center  ">
          <p> All rights reserved by NBDE</p>

        </div>
      </div>
    </div>

  </div>






  <!-- Optional JavaScript -->
  <!-- Popper.js first, then Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
    crossorigin="anonymous"></script>
</body>

</html>