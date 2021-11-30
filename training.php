<!DOCTYPE php>
<php>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width =device-width, initial-scale=1">
<link rel="stylesheet" href="training%20style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
</head>
<body>

<!-----Background Image----->
<style>
body {
  background-image: url('Images/F11.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

<!-----Menu----->

<section class="header">
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="supplements.php"><img src="Images/Logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
   <i class="fa fa-bars"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="supplements.php">Supplements</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="package.php">Packages and Rates</a>
      </li> 
       <li class="nav-items">
        <a class="nav-link" href="Classes.php">Book My Class</a>
        <ul class="navbar-nav">
            <li class="nav-links">
                <a href="zumba.php">My Zumba Class</a>
            </li>
        </ul>
           <ul class="navbar-nav">
            <li class="nav-links">
                <a href="#">My Personal Training Class</a>
            </li>
        </ul>
           <ul class="navbar-nav">
            <li class="nav-links">
                <a href="crossfit.php">My Crossfit Class</a>
            </li>
        </ul>
      </li>      
    </ul>
    
<!-----Icons----->
 
         <ul class="right-menu ml-auto">
                   <li class="nav-item">
        <a class="nav-link" href="php/login.php">Logout</a>
      </li>
             <li><i class="fa fa-facebook"></i></li>
             <li><i class="fa fa-instagram"></i></li>
             <li><i class="fa fa-twitter"></i></li>
             <li><i class="fa fa-youtube"></i></li>
             <li><i class="fa fa-shopping-cart"></i></li>
             <li>
                 <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-append">
        <span class="input-group-text"><i class="fa fa-search"></i></span>
              </div>
            </div>
             </li>
         </ul>
  </div>
</nav>

<!-----SlideShow----->

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="Images/U1.jpg" style="width:100%">
  <div class="text">Build a Foundation</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="Images/U5.jpg" style="width:100%">
  <div class="text">Raise your Strength</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="Images/U6.jpg" style="width:100%">
  <div class="text">Increase Stamina</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="Images/U7.jpg" style="width:100%">
  <div class="text">Have Dignity</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>


<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 4 seconds
}
</script>

<!-----Banner----->

<div class="banner">
   <div class="banner-img">
       <img src="Images/T3.jpg">
   </div>
   <div class="banner-title">
       <h1>Helps to build a Foundation</h1>
       <h1>Find a method to Relax</h1>
   </div> 
</div>
</section>

<!-----Packages and Rates----->

<section class="Packages">
    <div class="container">
        <div class="package-box">
           <div class="title-style-01 text-center">
                <h2>Personal Training Packages</h2>
            </div>
        </div>
    </div>
</section>

<div class="title-style3 text-center">
<h1>Membership Details</h1>
</div>
<div class="membership-img">
<img src="Images/K5.PNG" class="center">
</div>

<div class="title-style3 text-center">
<h1>Special Membership Details</h1>
</div>
<div class="membership-img">
<img src="Images/K6.PNG" class="center">
</div>

<!-----Trainers----->

<section class="Trainers">
    <div class="container">
        <div class="Trainers-box">
           <div class="title-style-01 text-center">
                <h2>Our Trainers</h2>
            </div>
        </div>
    </div>
</section>

<div class="row">
<div class="column">
<div class="card">
<img src="Images/Q2.jpg" alt="Denim Jeans" style="width-100%">
<h1>Peter Roger</h1>
<p class="price">Rs. 1500</p>
<p>Certified Personal Trainer with 4 years experience</p>
<a href="php/booking.php"><button>Book My Trainer</button></a>
</div>
</div> 
</div>

<div class="row">
<div class="column">
<div class="card">
<img src="Images/Q3.jpg" alt="Denim Jeans" style="width-100%">
<h1>Melissa Wild</h1>
<p class="price">Rs. 1300</p>
<p>Certified Personal Trainer with 2 years experience</p>
<a href="php/booking.php"><button>Book My Trainer</button></a>
</div>
</div> 
</div>

<div class="row">
<div class="column">
<div class="card">
<img src="Images/S3.jpg" alt="Denim Jeans" style="width-100%">
<h1>Andrew Steve</h1>
<p class="price">Rs. 1600</p>
<p>Senior Personal Trainer and Brand Ambassador for Need Supplement</p>
<a href="php/booking.php"><button>Book My Trainer</button></a>
</div>
</div> 
</div>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61489a2325797d7a89ffe6de/1fg1pk7e9';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>
</php>