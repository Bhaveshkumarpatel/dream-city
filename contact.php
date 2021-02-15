<?php include 'navbar.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <style>

.contact-form{
    background: #ECF0F1 ;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 70%;
}
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}
    </style>

</head>
<body>
<header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1>We are here to help</h1>
        <h2>Contact us at contact@dreemcity.com or use the form below we look forward to connecting with you.</h2>
      </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
  </header>


<div class="row row-cols-1 row-cols-md-3 g-4 p-5" style="text-align: center;">
  <div class="col">
    <div class="card border-0 " data-aos="fade-left" >
      <div class="card-body">
        <h5 class="card-title">Email</h5>
        <p class="card-text">contact@dreemcity.com</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card  border-0" data-aos="zoom-in">
      <div class="card-body">
        <h5 class="card-title">Offece</h5>
        <p class="card-text"> Wilson Hills, near Dharampur, Valsad, Gujarat 390018.</p>
        <a href="https://goo.gl/maps/fWdeDYWvdUK5kw2v8">Get Directions</a>

      </div>
    </div>
  </div>
  <div class="col">
    <div class="card  border-0" data-aos="fade-right">
      <div class="card-body">
        <h5 class="card-title">Contect Number</h5>
        <p class="card-text"> +91 9874563210 </p>
      </div>
    </div>
  </div>
</div>


<div class="container contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form method="post">
                <h3>Drop Us a Message</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
            </form>
</div>



</body>
</html>
<?php include 'footer.php';?>
