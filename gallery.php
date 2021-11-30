<!DOCTYPE php>
<php>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width =device-width, initial-scale=1">
<link rel="stylesheet" href="gallery%20style.css">
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
  background-image: url('Images/F5.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

<!-----Menu----->

<section class="header">
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="index.php"><img src="Images/Logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
   <i class="fa fa-bars"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li> 
       <li class="nav-item">
        <a class="nav-link" href="service.php">Service</a>
      </li> 
       <li class="nav-item">
        <a class="nav-link" href="#">Gallery</a>
      </li>       
       <li class="nav-item">
        <a class="nav-link" href="clients.php">Clients</a>
      </li>       
       <li class="nav-item">
        <a class="nav-link" href="php/contact_us.php">Contact Us</a>
      </li>       
    </ul>
    
<!-----Icons----->
 
         <ul class="right-menu ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="bmi.php">Calculate My BMI</a>
          </li>          
          <li class="nav-item">
        <a class="nav-link" href="php/login.php">Login</a>
      </li>
             <li><i class="fa fa-facebook"></i></li>
             <li><i class="fa fa-instagram"></i></li>
             <li><i class="fa fa-twitter"></i></li>
             <li><i class="fa fa-youtube"></i></li>
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
</section>

<!-----SlideShow----->

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="Images/D1.jpg" style="width:100%">
  <div class="text">Stay Hungry</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="Images/A2.jpg" style="width:100%">
  <div class="text">Stay Focused</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="Images/A5.jpg" style="width:100%">
  <div class="text">Stay Motivated</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="Images/G1.jpg" style="width:100%">
  <div class="text">Never Give Up</div>
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

<!-----Gallery----->

<div style="text-align:center">
  <h2>Gallery</h2>
  <p>Click on the images below:</p>
</div>

<!-- The four columns -->
<div class="row">
  <div class="column">
    <img src="Images/A5.jpg" alt="Nature" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="Images/A2.jpg" alt="Snow" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="Images/D1.jpg" alt="Mountains" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="Images/D2.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="Images/D3.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="Images/D4.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
   <div class="column">
    <img src="Images/D5.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
   <div class="column">
    <img src="Images/E1.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
   <div class="column">
    <img src="Images/E3.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
    <div class="column">
    <img src="Images/E4.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
    <div class="column">
    <img src="Images/E5.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
    <div class="column">
    <img src="Images/G2.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
    <div class="column">
    <img src="Images/A1.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
   <div class="column">
    <img src="Images/C2.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
   <div class="column">
    <img src="Images/C1.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
    <div class="column">
    <img src="Images/C3.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
   <div class="column">
    <img src="Images/C4.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
   <div class="column">
    <img src="Images/C5.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
   <div class="column">
    <img src="Images/C6.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
</div>
   
    
<div class="container">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <img id="expandedImg" style="width:100%">
  <div id="imgtext"></div>
</div>


<script>
function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}
</script>

<!--Start of Flow XO Script-->
<script src="https://widget.flowxo.com/embed.js" data-fxo-widget="eyJ0aGVtZSI6IiMyOWU2OWIiLCJ3ZWIiOnsiYm90SWQiOiI2MTk5ZTM5ZmQ2ODhkNTFhNmRlYzM1NzMiLCJ0aGVtZSI6IiMyOWU2OWIiLCJsYWJlbCI6Iklyb24gUGFyYWRpc2UgVmlydHVhbCBBc3Npc3RhbnQifSwid2VsY29tZVRleHQiOiJDaGF0IHdpdGggVXMg8J+RhyJ9" async defer></script>
<!--End of Flow XO Script-->

<!-----Design----->

    <p><div class="design" style="text-align: center">&copy; <em>2021</em> Iron Paradise (Fitness Website) Project | Designed by <strong>Himaz Mowlana</strong></div></p>

</body>    
</php>