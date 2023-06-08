<!DOCTYPE html>
<html>
<head>
    <title>ZeroCostGaming - Home</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="imagens/logo/logorosa.png">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet"  href="indexphp.css">
</head>
    <style>
    .loginBox input{width: 100%;margin-bottom: 20px}
    .loginBox input[type="text"], 
    .loginBox input[type="password"]{border: none;border-bottom: 2px solid #FF66C4;outline: none;
                height: 40px;color: #fff;background: transparent;font-size: 16px;padding-left: 20px;box-sizing: border-box}
    .loginBox input[type="text"]:hover, 
    .loginBox input[type="password"]:hover{color: #FF66C4;border: 1px solid #FF66C4;}
    .loginBox input[type="text"]:focus,
    .loginBox input[type="password"]:focus{border-bottom: 2px solid #FF66C4}
    .inputBox{position: relative}
    .inputBox span{position: absolute;top: 10px;color: #262626}
    .loginBox input[type="submit"]{border: none;outline: none;height: 40px;font-size: 16px;
            background: #59238F;color: #fff;border-radius: 20px;cursor: pointer}.loginBox a{color: #262626;font-size: 14px;
            font-weight: bold;text-decoration: none;text-align: center;display: block}a:hover{color: #FF66C4}
</style>
<body class="gradient">
    <!-- NAVBAR -->
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid" style="margin-left: 5%;margin-right: 5%;">
        <a class="navbar-brand" href="welcome.php">
            <img src="imagens/logo/logorosa.png" alt="" width="me-auto" height="40">
        </a>
        <button class="navbar-toggler collapsed d-flex d-lg-none flex-column justify-content-around" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-icon top-bar"></span>
            <span class="toggler-icon middle-bar"></span>
            <span class="toggler-icon bottom-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active margemleft" aria-current="page" href="welcome.php" margin-left>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link margemleft" href="wishlist.php">Wishlist</a>
                </li>
                </ul>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li> -->
            
            </ul>

            <?php
            session_start(); // Start the session

            // Check if the user is logged in
            if (isset($_SESSION['username'])) {
                echo '<form action="logout.php" method="POST">';
                echo '<input type="submit" value="Logout" class="btn btn-outline-light margemleft">';
                echo '</form>';
            } else {
                echo '<ul class="navbar-nav">';
                echo '<li class="nav-item">';
                // echo '<a class="nav-link margemleft" href="index.php">login</a>';
                echo '</li>';
                echo '</ul>';
            }
            ?>

        </div>
    </div>
</nav>
<div class="container" style="background-color: #190934;">
    <div class="loginBox"> <img src="imagens/logo/logorosa.png" width="40%" style="margin-left: 30%;">
        <h4 style="color: #ffffff;text-align: center; margin-bottom: 10%; margin-top: 10%;" >ZeroCostGaming Account</h4>
        <form action="login.php" method="post">
            <div class="inputBox">
                <input type="text" id="username" placeholder="Username" name="username" required><br><br>
                <input type="password" id="password" placeholder="Password" name="password" required><br><br>
                <?php if ($_SERVER["REQUEST_METHOD"] === "POST") {
                    $username = $_POST["username"];
                    $password = $_POST["password"];
        
                    if ($username === "admin" && $password === "password") {
                        // Successful login
                        echo '<span class="success-message">Login successful</span>';
                        // Perform any additional actions or redirection here
                    } else {
                        // Invalid login
                        echo '<span class="error-message">Invalid username or password</span>';
                    }
                } ?>
            </div>
            <input type="submit" name="" value="Login" style="background-color: #d654a4">
        </form> 
        <div class="text-center">
            <a href="indexsignup.php"><p style="color: #FF66C4;">Sign-Up</p></a>
        </div>
    </div>
</div>


    <!-- <div class="loginBox"> <img class="user" src="https://i.ibb.co/yVGxFPR/2.png" height="100px" width="100px">
        <h3>Sign in here</h3>
        <form action="login.php" method="post">
            <div class="inputBox">
                <input id="uname" type="text" name="Username" placeholder="Username">
                <input id="pass" type="password" name="Password" placeholder="Password">
            </div>
            <input type="submit" name="" value="Login">
        </form> 
        <div class="text-center">
            <p style="color: #59238F;">Sign-Up</p>
        </div>
        
    </div> -->


 <!-- FOOTER -->

 <nav class="navbar navbar-expand-lg ">
    <div class="container-fluid" style="display:flex;justify-content: center;">
        <img src="imagens/logo/logonome.png" alt="" width="me-auto" height="35">
    </div>  
  </nav>
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" >
</script>
<script src="index.js"></script>

</body>
</html>
