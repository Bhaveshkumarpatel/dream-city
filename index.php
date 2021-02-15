<?php include 'navbar.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dream City</title>
  
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/one-page-wonder.min.css" rel="stylesheet">
  
  <link rel="stylesheet" href="css\styles.css" />
  <link rel="stylesheet" href="dist\aos.css" />
  <style>
  #city_image
  {
    background-color: green;
    transition: transform .2s;
    margin: 0 auto;
    box-shadow: 0 8px 10px #888888;
  }
  #city_image:hover 
  {
    -ms-transform: scale(1.5); /* IE 9 */
    -webkit-transform: scale(1.5); /* Safari 3-8 */
    transform: scale(1.05); 
  }
  a:link {text-decoration: none;}
  </style>
</head>

<body>
  <header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">Dream city</h1>
        <h2 class="masthead-subheading mb-0">Evryday Learn Somthing New</h2>
        <a href="#" class="btn btn-primary btn-xl rounded-pill mt-5">Learn More</a>
      </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
  </header>

  <section>
    <div class="container" data-aos="fade-right"> <!--    <div class="container aos-all" data-aos="fade-down"> -->
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <a href="ahmedabad.php"> <img class="img-fluid rounded-circle" id="city_image" src="img/002.jpg" alt=""> </a>
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <a href="ahmedabad.php"> <h2 class="display-4">Ahmedabad</h2> </a>
            <p>Ahmedabad is the largest city and former capital of the Indian state of Gujarat. It is the administrative headquarters of the Ahmedabad.</p>  
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container"  data-aos="fade-left" >
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="p-5">
          <a href="surat.php"> <img class="img-fluid rounded-circle" id="city_image" src="img/001.jpg" alt=""> </a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="p-5">
            <a href="surat.php"> <h2 class="display-4">Surat</h2> </a>
            <p>Surat is a city in the Indian state of Gujarat. It used to be a large seaport and is now the commercial and economic center in South Gujarat.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container" data-aos="fade-right">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <a href="Valsad.php"> <img class="img-fluid rounded-circle" id="city_image" src="img/00003.jpg" alt=""> </a> 
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <a href="Valsad.php"> <h2 class="display-4">Vadodra</h2> </a>
            <p>Vadodra, formerly also known as Baroda, is the 3rd largest city in the Indian state of Gujarat. It is the administrative headquarters of Vadodra.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container"  data-aos="fade-left" >
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="p-5">
          <a href="Valsad.php"> <img class="img-fluid rounded-circle" id="city_image" src="img/04.jpg" alt=""> </a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="p-5">
            <a href="Valsad.php"> <h2 class="display-4">Valsad</h2> </a>
            <p>Valsad, historically known as Bulsar, is a city and a municipality in Valsad district of the Indian state of Gujarat. It is the district headquarters of Valsad district.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <center>
  <a href="#" class="btn btn-primary btn-xl rounded-pill mt-5">More City</a> 
  </center>
  <br>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="dist\aos.js"></script>
    <script>
      AOS.init({
        easing: 'ease-in-out-sine'
      });
    </script>

</body>

</html>
<?php include 'footer.php';?>