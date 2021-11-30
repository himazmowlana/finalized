<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" type="text/css" href="sign%20up%20style.css">
    </head>
    <body>
        <div id="login-box">
            <div class="left-box">
                <h1>Sign Up</h1>
                <form action="./php/sign_up.php" method="post">
                <input type="text" name="username" placeholder="Username"/>
                <input type="text" name="email" placeholder="Email"/>
                <input type="password" name="password" placeholder="Password"/>
                <input type="password" name="password2" placeholder="Re-type Password"/>
                <input type="submit" name="signup-button" value="Sign Up"/>
                </form>
                <a href="php/login.php">
                    <button>Back</button></a>
             </div>
    
            <div class="right-box">
                <span class="signinwith">Sign in with<br/>Social Network
                </span>
                <button class="Social Facebook">Login in with Facebook</button>
                <button class="Social Twitter">Login in with Twitter</button>
                <button class="Social Google">Login in with Google+</button>
            </div>
            <div class="or">OR</div>        
        </div>
      </body>
</html>
