<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" href="img\icon\21-512.png" type="image/x-icon">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
  <link href="css\login_model.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/one-page-wonder.min.css" rel="stylesheet">
  
  <link rel="stylesheet" href="css\styles.css" />
  <link rel="stylesheet" href="dist\aos.css" />
  <style>a:link {text-decoration: none;}</style>
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php" > <img src="img\icon\21-512.png" style="opacity: 0.3;" height="30px" alt="Dreem City"> &nbsp;Dream city</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="galary.php">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="document.getElementById('id02').style.display='block'">Sign Up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="document.getElementById('id01').style.display='block'">Log In</a>
          </li>       
        </ul>
      </div>
    </div>
  </nav>


<!--login model start-->  
  <div id="id01" class="modal">
  <form class="modal-content animate w-50 " action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img\icon\singin2.png" height="50" alt="login">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
<!--login model end-->


<!--ragistration start-->  
<div id="id02" class="modal">
<form class="modal-content animate w-50" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img\icon\singup2.png" height="50" alt="Ragistration">
    </div>

    <div class="container">
      <table class="table table-hover">
        <tbody>
        <tr>
          <td>
          <label for="fname"><b>Name</b></label>
          </td>
          <td>
          <input type="text" placeholder="Enter Frist Name" name="fname" required>
          </td>
          <td>
          <input type="text" placeholder="Enter Last Name" name="lname" required>
          </td>
        </tr>
        <tr>
          <td> <label for="email"><b>Email</b></label></td>
          <td><input type="text" placeholder="Enter Email" name="email" required></td>
          <td> <label for="dob"><b>DOB</b></label> <input class="form-control-inline" type="date" name="dob" required></td>
        </tr>
        <tr>
          <td>
          <label for="password"><b>Password</b></label>
          </td>
          <td>
          <input type="password" placeholder="Enter Password" name="pass" min="8" required>
          </td>
          <td>
          <input type="password" placeholder="Enter Conform Password" name="cnpass" min="8" required>
          </td>
        </tr>
        </tbody>
      </table>
      <button type="submit">Ragister</button>
</div>
  </form>
</div>
<!--ragistration model end-->



  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js\fontawesome\fontawesome.js" crossorigin="anonymous"></script>
  <script src="dist\aos.js"></script>
    <script>
      AOS.init({
        easing: 'ease-in-out-sine'
      });
    </script>
    <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>

</html>