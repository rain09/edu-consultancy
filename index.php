<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/custom.css">

    <title>NIBC</title>
  </head>
  <body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  	<section id="nav-bar">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.html"><img src="img/logoo.jpg"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Destination</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#about">Australia</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#about">Europe</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#about">New Zealand</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#about">USA</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              STUDENT SERVICES</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Abroad Study Counselling</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#services">Test Preparation</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Documentation & Visa Guidance</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#team">OUR TEAM</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">CONTACT</a>
            </li>
            <form class="form-inline" action="search.php" method="GET">
      				<input class="form-control mr-sm-2" type="text" placeholder="Search Course" name="course" aria-label="Search">
      				<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit" value="submit">Search</button>
    				</form>
          </ul>
        </div>
      </nav>
    </section>
    <!--Slider-->
    <div id="slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>   
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/studyabroad.jpg" class="d-block w-100" alt="...">              
            </div>
            <div class="carousel-item">
              <img src="img/ielts.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!--About Us-->
    <section id="about">
      <div class="container">
        <h2>COUNTRIES WE REPRESENT</h2>
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3 item">
            <div class="block">
            <a href="#"><img src="img/aus.png"></a>
            <figcaption>
            <h4 align="center"><u>Australia</u></h4>
            </figcaption>
            <div class="countries_desc">
              <p>Australia is a proud education destination and a home to world-class institutions, campuses and academics. A multicultural and diverse study..</p>
            </div>
          </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 item">
            <div class="block">
            <a href="#"><img src="img/euro.png"></a>
            <figcaption>
            <h4 align="center"><u>Europe</u></h4>
            </figcaption>
            <div class="countries_desc">
              <p>Europe is home to many of the world’s oldest and most prestigious universities – and many of the most exciting and attractive student cities. European..</p>
            </div>
          </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 item">
            <div class="block">
            <a href="#"><img src="img/new-zea.png"></a>
            <figcaption>
            <h4 align="center"><u>New Zealand</u></h4>
            </figcaption>
            <div class="countries_desc">
              <p>New Zealand is located in the southwestern Pacific Ocean, just south of Australia. The country is not part of Australia and has  never been, but..</p>
            </div>
          </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 item">
            <div class="block">
            <a href="#"><img src="img/usa.png"></a>
            <figcaption>
            <h4 align="center"><u>USA</u></h4>
            </figcaption>
            <div class="countries_desc">
              <p>The United States is the leader in many areas of technology and research. While studying here, you will be exposed to advanced technology..</p>
            </div>
          </div>
          </div>
        </div>
      </div>          
    </section>
    <!--Services-->
    <section id="services">
      <div class="container">
        <h2>OUR SERVICES</h2>
        <div class="row services">
          <div class="col-md-3 text-center">
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <h3>PTE</h3>
            <p>All your worries about non-availability of test dates are addressed by Our PTE Classes. PTE Academic classes are available at your disposal at NIBC.</p>
          </div>
          <div class="col-md-3 text-center">
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <h3>SAT & GMAT</h3>
            <p>IELTS is designed to assess the language ability of candidates who need to study or work. <br> The TOFEL test is the most widely respected English-language test in the world, recognized by more than 9000 colleges, universities and agiencies in more than 130 countries.</p>
          </div>
          <div class="col-md-3 text-center">
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <h3>SAT</h3>
            <p>Scholastic Aptitude Test, one of the optional test which helps you to get scholarship and admissions at better Universities, are available at NIBC. Well Qualified instructors and immense amount of resources assures better score in SAT.</p>
          </div>
        </div>
      </div>
    </section>
    <!--Team Member-->
    <section id="team">
      <div class="container">
        <h1 align="center">Our Team</h1>
        <div class="row">
          <div class="col-md-3 profile-pic">
            <div class="img-box">
              <img src="img/member1.jpg " class="img-resposnive">
              <ul>
                <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
              </ul>
            </div>
            <h2 align="center">Joe</h2>
            <h3 align="center">Instructor</h3>
          </div>
          <div class="col-md-3 profile-pic">
            <div class="img-box">
              <img src="img/member2.jpg " class="img-resposnive">
              <ul>
                <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
              </ul>
            </div>
            <h2 align="center">Alan</h2>
            <h3 align="center">Managing Director</h3>
          </div>
          <div class="col-md-3 profile-pic">
            <div class="img-box">
              <img src="img/member3.jpg " class="img-resposnive">
              <ul>
                <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
              </ul>
            </div>
            <h2 align="center">Peter</h2>
            <h3 align="center">Supervisor</h3>
          </div>
          <div class="col-md-3 profile-pic">
            <div class="img-box">
              <img src="img/member4.jpg " class="img-resposnive">
              <ul>
                <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                <a href="#"><li><i class="fa fa-twitter"></i></li></a2
                <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
              </ul>
            </div>
            <h2 align="center">Jeena</h2>
            <h3 align="center">Counsellor</h3>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact US-->
    <section id="contact">
      <div class="container">      
        <div class="row">
          <div class="col-md-5">
            <div class="contact-form">
              <h1 class="section_header header_line wow fadeInDown animated animated" style="visibility: visible;">feedback</h1>
              <form action="#" method="POST">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your name">    
                </div>
                <div class="form-group">
                  <input type="number" class="form-control" placeholder="Phone no.">        
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email id">                  
                </div>
                <div class="form-group">
                  <textarea class="form-control" placeholder=" Your Message"></textarea>         
                </div>
                <button type="submit" class="btn-submit">SUBMIT</button>
              </form>
            </div>
          </div>
          <div class="col-md-7 contact-info">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3515.8199660729238!2d83.95660661454987!3d28.21278190970597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995951bedecfb19%3A0x155f51ae6cdda488!2sThe+Tibetan+Encounter+Day+Tours+Pvt.+Ltd!5e0!3m2!1sen!2snp!4v1553427056119" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          <b> Address</b> Lakeside, Pokhara, Nepal<br>
          <b>Telephone</b>   0863432962860
          </div>
        </div>
      </div>
    </section>
    <section id="footer">
            <div class="footerContainer">
                <p class="copyright"; align="center">© 2019</p>
            </div>
        </section>
        <!--Footer closed-->
        <script src="js/smooth-scroll.js"></script>
        <script>
          var scroll = new SmoothScroll('a[href*="#"]');
        </script> 
  </body>
</html>


      	