<!DOCTYPE php>
<php>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width =device-width, initial-scale=1">
<link rel="stylesheet" href="package%20style.css">
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
  background-image: url('Images/F8.jpg');
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
        <a class="nav-link" href="#">Packages and Rates</a>
      </li> 
       <li class="nav-items">
        <a class="nav-link" href="classes.php">Book My Class</a>
        <ul class="navbar-nav">
            <li class="nav-links">
                <a href="zumba.php">My Zumba Class</a>
            </li>
        </ul>
           <ul class="navbar-nav">
            <li class="nav-links">
                <a href="training.php">My Personal Training Class</a>
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

<!-----Video----->

<video id="videoBG" poster="Images/Screenshot%204.png" autoplay muted loop style="width:100%;">
    <source src="Videos/Payment.mp4" type="video/mp4">
</video>
</section>

 
<!-----Membership Details----->

<section class="Packages">
    <div class="container">
        <div class="package-box">
           <div class="title-style-01 text-center">
                <h2>Packages and Rates</h2>
            </div>
        </div>
    </div>
</section>


<div class="title-style3 text-center">
<h1>Membership Details</h1>
</div>
<div class="membership-img">
<img src="Images/K1.PNG" class="center">
</div>

<div class="title-style3 text-center">
<h1>Special Membership Details</h1>
</div>
<div class="membership-img">
<img src="Images/K2.PNG" class="center">
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

<!-----Design----->

    <p><div class="design" style="text-align: center">&copy; <em>2021</em> Iron Paradise (Fitness Website) Project | Designed by <strong>Himaz Mowlana</strong></div></p>

</body>
</php>