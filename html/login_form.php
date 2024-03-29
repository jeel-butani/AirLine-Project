<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Registration</title>

    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <!-- <script src="../js/loginjs.js"></script> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <?php
        if(isset($_REQUEST['msg'])){
            ?>
            <div class="login-message" id="myAlert" >
                <?php echo $_REQUEST['msg']; ?>
            </div>
            <?php
        }
        ?>
    
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form action="../php/signup.php" name="loginForm" method="POST">
                <label for="chk" aria-hidden="true">Sign Up</label>
                <input type="text" name="fname" placeholder="First Name" />
                <input type="text" name="lname" placeholder="Last Name" />
                <input type="email" name="email" placeholder="Email"/>
                <input type="text" name="phnnum" placeholder="Enter Phone Number"/>
                <input type="password" name="pswd" placeholder="Password"/>
                <input type="password" name="confirmpswd" placeholder="Confirm Your Password"/>
                <input type="date" name="bod" placeholder="dd-mm-yyyy"/>
                <button type="submit" value="send" name="Submit">SIGN UP</button>
            </form>
        </div>

        <div class="login">
            <form action="login.php" method="POST">
                <label for="chk" aria-hidden="true">LOGIN</label>
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="pswd" placeholder="Password" >
                <button>Login</button>
            </form>
        </div>
    </div>
    
    <!-- <script>

		var alertDiv = document.getElementById("myAlert");

		alertDiv.style.display = "block";

		setTimeout(function() {
			alertDiv.style.display = "none";
		}, 5000);
	</script> -->
</body>

</html>