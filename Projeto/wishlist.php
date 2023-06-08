<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="imagens/logo/logorosa.png">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="cards.css">
    <link rel="stylesheet" href="games.css">
    <link rel="stylesheet" href="gameprice.css">
    <title>ZeroCostGaming - Fifa 23</title>
</head>
<style>
  .margem30 {
      margin-top: 30px;
  }
</style>
<style>
  .margem20 {
      margin-top: 20px;
      margin-bottom: 20px;
  }
</style>
<style>
  .margemleft {
      margin-left: 20px;
  }
</style>
<style>
  .topo {
      align-items: top;
  }
</style>

<style>
.containerjogo {
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
}

.text {
  font-size: 20px;
  padding-left: 20px;
  color: white;
}

.horizontal-center {
  margin: 0;
  position: absolute;
  right: 32%;
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
}

.rounded-corners {
  border-radius: 15px;
}
  </style>

<body class="gradient">


  <!-- NAVBAR -->
 
   <nav class="navbar navbar-expand-lg ">
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
             <a class="nav-link margemleft" aria-current="page" href="welcome.php" margin-left>Home</a>
           </li>
           <li class="nav-item">
             <a class="nav-link active margemleft" href="wishlist.php">Wishlist</a>
           </li>
         </ul>
         
         <?php
         include 'login_info.php';
       ?>
       </div>
     </div>
   </nav>
  
   
 <!-- INTRO -->

<div class="text" style="display: flex;justify-content: center;margin-top: 50px;margin-bottom: 50px;margin-left: 50px;margin-right: 50px">
  <p style="font-size:500%;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Wishlist</p>
</div>


<!-- IN WISHLIST -->

<?php
session_start(); // Start the session
$username = $_SESSION['username']; // get the username of the logged in user
$wishlist = getWishlist($username); // get the wishlist for the user

function getWishlist($username) {
  $filePath = 'wishlist.txt';

  // Read the file and store the lines in an array
  $lines = file($filePath);
  $wishlist = [];

  // Loop through the lines
  foreach ($lines as $line) {
      // Explode the line to get the username and game
      $parts = explode(':', trim($line));
      $storedUsername = $parts[0];
      $game = $parts[1];

      // If the username matches, add the game to the wishlist
      if ($storedUsername === $username) {
          $wishlist[] = $game;
      }
  }

  return $wishlist;
}

?>

<div class="container" style="display: flex; align-items: center;">
  <h1 class="title margem30">In Your Wishlist</h1>
  <div style="flex-grow: 1; display: flex; justify-content: center;">
    <button id="clear-wishlist-btn" class="btn btn-danger">Clear Wishlist</button>
  </div>
</div>


<div class="movies-list" style="height:50vh;">
    <button class="pre-btn"><img src="imagens/random/pre.png" alt=""></button>
    <button class="nxt-btn"><img src="imagens/random/nxt.png" alt=""></button>
    <div class="card-container">
    <?php foreach ($wishlist as $game): 
        // Check if the .jpg image exists
        $imgPath = "imagens/jogos/{$game}.jpg";
        if (!file_exists($imgPath)) {
            // If the .jpg image doesn't exist, use the .png image
            $imgPath = "imagens/jogos/{$game}.png";
        }
        ?>
    <a href='<?php echo $game. ".php"?>'>
    <div class="card">
        <img src="<?php echo $imgPath; ?>" class="card-img" alt="">
        <div class="card-body">
            <h2 class="name"><?php echo $game; ?></h2>
        </div>
    </div> </a>
    <?php endforeach; ?>
</div>
</div>



   <!-- FOOTER -->

<nav class="navbar navbar-expand-lg" style="position:absolute; bottom:0 ; width:100%">
  <div class="container-fluid" style="display:flex;justify-content: center;">
      <img src="imagens/logo/logonome.png" alt="" width="me-auto" height="35">
  </div>
</nav>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $game = $_POST['game'];

    // sanitize the inputs
    $username = htmlspecialchars(strip_tags($username));
    $game = htmlspecialchars(strip_tags($game));

    // create a new line for the wishlist file
    $line = $username . ":" . $game;

    // load the current wishlist into an array
    $wishlist = file('wishlist.txt', FILE_IGNORE_NEW_LINES);

    // check if the line is already in the wishlist
    if (in_array($line, $wishlist)) {
        // if so, remove the line from the array
        $wishlist = array_diff($wishlist, [$line]);
        // write the updated wishlist back to the file
        file_put_contents('wishlist.txt', implode("\n", $wishlist));
        // return a response indicating that the game was removed
        echo json_encode(["action" => "remove"]);
    } else {
        // if not, append the line to the file
        file_put_contents('wishlist.txt', $line . "\n", FILE_APPEND);
        // return a response indicating that the game was added
        echo json_encode(["action" => "add"]);
    }
}
?>

<script>
document.getElementById('clear-wishlist-btn').addEventListener('click', function() {
    var username = <?php echo json_encode($_SESSION['username']); ?>;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var cardContainer = document.querySelector(".card-container");
            cardContainer.innerHTML = ""; // clear wishlist of given user
        }
    };
    xhttp.open("POST", "clear_wishlist.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("username=" + encodeURIComponent(username));
});

</script>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" >
</script>
<script src="games.js"></script>
<script src="wishlist.js"></script>
</body>
</html>