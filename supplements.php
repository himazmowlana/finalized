<!DOCTYPE php>
<php>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width =device-width, initial-scale=1">
<link rel="stylesheet" href="supplements%20style.css">
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
  background-image: url('Images/F7.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

<!-----Menu----->

<section class="header">
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img src="Images/Logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
   <i class="fa fa-bars"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Supplements</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="package.php">Packages and Rates</a>
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

<!-----Supplements----->

<section class="Supplements">
    <div class="container">
        <div class="Supplements-box">
           <div class="title-style-01 text-center">
                <h2>Supplements</h2>
            </div>
        </div>
    </div>
</section>

<div class="row">
<div class="column">
<div class="card">
<img src="Images/L1.jpg" alt="Denim Jeans" style="width-100%">
<h1>Mass Tech</h1>
<p class="price">Rs. 25,000</p>
<p>22lbs</p>
<a href="php/cart.php"><button>Buy Now</button></a>
</div>
</div> 
</div>

<div class="row">
<div class="column">
<div class="card">
<img src="Images/L2.jpg" alt="Denim Jeans" style="width-100%">
<h1>Premium Mass Gainer</h1>
<p class="price">Rs. 12,000</p>
<p>12lbs</p>
<a href="php/cart.php"><button>Buy Now</button></a>
</div>
</div> 
</div>

<div class="row">
<div class="column">
<div class="card">
<img src="Images/L3.jpg" alt="Denim Jeans" style="width-100%">
<h1>Mass Muscle Gainer</h1>
<p class="price">Rs. 22,000</p>
<p>20lbs</p>
<a href="php/cart.php"><button>Buy Now</button></a>
</div>
</div> 
</div>

<div class="row">
<div class="column">
<div class="card">
<img src="Images/L5.jpg" alt="Denim Jeans" style="width-100%">
<h1>Combat XL</h1>
<p class="price">Rs. 12,000</p>
<p>12lbs</p>
<a href="php/cart.php"><button>Buy Now</button></a>
</div>
</div> 
</div>

<div class="row">
<div class="column">
<div class="card">
<img src="Images/L4.jpg" alt="Denim Jeans" style="width-100%">
<h1>Hard Mass Gainer</h1>
<p class="price">Rs. 10,000</p>
<p>15lbs</p>
<a href="php/cart.php"><button>Buy Now</button></a>
</div>
</div> 
</div>

<div class="row">
<div class="column">
<div class="card">
<img src="Images/L6.jpg" alt="Denim Jeans" style="width-100%">
<h1>Serious Mass</h1>
<p class="price">Rs. 8000</p>
<p>6lbs</p>
<a href="php/cart.php"><button>Buy Now</button></a>
</div>
</div> 
</div>

<div class="row">
<div class="column">
<div class="card">
<img src="Images/M1.jpg" alt="Denim Jeans" style="width-100%">
<h1>Carnivor Mass Protein</h1>
<p class="price">Rs. 6000</p>
<p>5lbs</p>
<a href="php/cart.php"><button>Buy Now</button></a>
</div>
</div> 
</div>

<div class="row">
<div class="column">
<div class="card">
<img src="Images/M2.jpg" alt="Denim Jeans" style="width-100%">
<h1>Combat Protein</h1>
<p class="price">Rs. 8000</p>
<p>2lbs</p>
<a href="php/cart.php"><button>Buy Now</button></a>
</div>
</div> 
</div>

<div class="row">
<div class="column">
<div class="card">
<img src="Images/M3.jpg" alt="Denim Jeans" style="width-100%">
<h1>Nitro Tech</h1>
<p class="price">Rs. 6000</p>
<p>4lbs</p>
<a href="php/cart.php"><button>Buy Now</button></a>
</div>
</div> 
</div>

<div class="row">
<div class="column">
<div class="card">
<img src="Images/M4.jpg" alt="Denim Jeans" style="width-100%">
<h1>ON Whey</h1>
<p class="price">Rs. 6000</p>
<p>5lbs</p>
<a href="php/cart.php"><button>Buy Now</button></a>
</div>
</div> 
</div>

<div class="row">
<div class="column">
<div class="card">
<img src="Images/M5.jpg" alt="Denim Jeans" style="width-100%">
<h1>Whey Protein</h1>
<p class="price">Rs. 6000</p>
<p>5lbs</p>
<a href="php/cart.php"><button>Buy Now</button></a>
</div>
</div> 
</div>

<div class="row">
<div class="column">
<div class="card">
<img src="Images/M6.jpg" alt="Denim Jeans" style="width-100%">
<h1>Syntha-6 Isolate</h1>
<p class="price">Rs. 7000</p>
<p>4lbs</p>
<a href="php/cart.php"><button>Buy Now</button></a>
</div>
</div> 
</div>

<div class="row">
<div class="column">
<div class="card">
<img src="Images/N1.jpg" alt="Denim Jeans" style="width-100%">
<h1>Platinum Creatine</h1>
<p class="price">Rs. 4000</p>
<p>400g</p>
<a href="php/cart.php"><button>Buy Now</button></a>
</div>
</div> 
</div>

<div class="row">
<div class="column">
<div class="card">
<img src="Images/N2.jpg" alt="Denim Jeans" style="width-100%">
<h1>Creatine Powder</h1>
<p class="price">Rs. 6000</p>
<p>4lbs</p>
<a href="php/cart.php"><button>Buy Now</button></a>
</div>
</div> 
</div>

<div class="row">
<div class="column">
<div class="card">
<img src="Images/N3.jpg" alt="Denim Jeans" style="width-100%">
<h1>BSN Creatine</h1>
<p class="price">Rs. 4000</p>
<p>216g</p>
<a href="php/cart.php"><button>Buy Now</button></a>
</div>
</div> 
</div>

<div class="row">
<div class="column">
<div class="card">
<img src="Images/N4.jpg" alt="Denim Jeans" style="width-100%">
<h1>MP Creatine</h1>
<p class="price">Rs. 3000</p>
<p>300g</p>
<a href="php/cart.php"><button>Buy Now</button></a>
</div>
</div> 
</div>

<div class="row">
<div class="column">
<div class="card">
<img src="Images/N5.jpg" alt="Denim Jeans" style="width-100%">
<h1>True Creatine</h1>
<p class="price">Rs. 3000</p>
<p>205g</p>
<a href="php/cart.php"><button>Buy Now</button></a>
</div>
</div> 
</div>

<div class="row">
<div class="column">
<div class="card">
<img src="Images/N6.jpg" alt="Denim Jeans" style="width-100%">
<h1>Pro-Line Creatine</h1>
<p class="price">Rs. 3000</p>
<p>400g</p>
<a href="php/cart.php"><button>Buy Now</button></a>
</div>
</div> 
</div>

<div class="row">
<div class="column">
<div class="card">
<img src="Images/O1.jpg" alt="Denim Jeans" style="width-100%">
<h1>ON Pre-Workout</h1>
<p class="price">Rs. 6000</p>
<p>300g</p>
<a href="php/cart.php"><button>Buy Now</button></a>
</div>
</div> 
</div>

<div class="row">
<div class="column">
<div class="card">
<img src="Images/O2.jpg" alt="Denim Jeans" style="width-100%">
<h1>Assault Pre-Workout</h1>
<p class="price">Rs 8000</p>
<p>222g</p>
<a href="php/cart.php"><button>Buy Now</button></a>
</div>
</div> 
</div>

<div class="row">
<div class="column">
<div class="card">
<img src="Images/O3.jpg" alt="Denim Jeans" style="width-100%">
<h1>Vapor X5</h1>
<p class="price">Rs. 4000</p>
<p>266g</p>
<a href="php/cart.php"><button>Buy Now</button></a>
</div>
</div> 
</div>

<div class="row">
<div class="column">
<div class="card">
<img src="Images/O4.jpg" alt="Denim Jeans" style="width-100%">
<h1>Cellucor C4</h1>
<p class="price">Rs. 4000</p>
<p>185g</p>
<a href="php/cart.php"><button>Buy Now</button></a>
</div>
</div> 
</div>

<div class="row">
<div class="column">
<div class="card">
<img src="Images/O5.jpg" alt="Denim Jeans" style="width-100%">
<h1>CAT NitraFlex</h1>
<p class="price">Rs. 5000</p>
<p>300g</p>
<a href="php/cart.php"><button>Buy Now</button></a>
</div>
</div> 
</div>

<div class="row">
<div class="column">
<div class="card">
<img src="Images/O6.jpg" alt="Denim Jeans" style="width-100%">
<h1>The Curse</h1>
<p class="price">Rs. 4000</p>
<p>254g</p>
<a href="php/cart.php"><button>Buy Now</button></a>
</div>
</div> 
</div>

<div class="row">
<div class="column">
<div class="card">
<img src="Images/P1.jpg" alt="Denim Jeans" style="width-100%">
<h1>Quest Bar</h1>
<p class="price">Rs. 5000</p>
<p>720g</p>
<a href="php/cart.php"><button>Buy Now</button></a>
</div>
</div> 
</div>

<div class="row">
<div class="column">
<div class="card">
<img src="Images/P2.jpg" alt="Denim Jeans" style="width-100%">
<h1>Protein Crisp</h1>
<p class="price">Rs. 6000</p>
<p>750g</p>
<a href="php/cart.php"><button>Buy Now</button></a>
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