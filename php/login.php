<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "Iron_Paradise";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            $sql = "SELECT username, password FROM sign_up";

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            echo "Connected successfully";

            $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
            if(($_POST['username'] == $row['username']) && ($_POST['password'] == $row['password'])){
                header("Location: ../Supplements.php");
                echo "Login Success";
            }else{
                echo  "Login Failed";
            }
        }
    }
    
?>
<!DOCTYPE php>
<php>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../login style.css">
</head>
<body>
   
<!-----Background Image----->
<style>
body {
  background-image: url('../Images/D2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
   
    <div id="login-box">
        <div class="left-box">
            <h1>Login</h1>
            <form action="login.php" method="post">   
            <input type="text" name="username" placeholder="Username"/>
            <input type="password" name="password" placeholder="Password"/>
            <input type="submit" name="login-button" value="Login"/>
            </form>
            <div class="form-group">
                  <p>Forgot your password ? <a href="#">click here</a></p>
                </div>
				<a href="../sign%20up.php">
                    <button>Sign Up</button></a>
            <a href="../index.php">
                    <button>Home</button></a>
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
            
<!-----JavaScript----->
<php>
<body>
<script>
window.alert(confirm);
</script>
        
</body>
</php>