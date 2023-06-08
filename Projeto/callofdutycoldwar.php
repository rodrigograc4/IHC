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
    <title>ZeroCostGaming - Call Of Duty</title>
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
             <a class="nav-link margemleft" href="wishlist.php">Wishlist</a>
           </li>
         </ul>
         <div class="search-box" style="margin-right: 20px;margin-left: 20px;">
            <input type="text"  id="search" class="input-search" placeholder="Search your game..." autocomplete="off">
            <div class="search-suggestions"></div>
            </div>
            </ul>
         <?php
            include 'login_info.php'; 
            ?>
       </div>
     </div>
   </nav>
  
   
 <!-- INTRO -->

<div class="text" style="display: flex;justify-content: center;margin-top: 50px;margin-bottom: 50px;margin-left: 50px;margin-right: 50px">
  <p style="font-size:500%;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Call Of Duty</p>
</div>


<!-- JOGO -->

<div class="container" style="background-color: #1b0a39; border-radius: 5px;"> 
  <div class="containerjogo" style="margin-right: 10%;">
    <div class="image" style="display: flex;justify-content: center;">
      <img src="imagens/jogos/callofdutycoldwar.png" width="80%" class="rounded-corners"style="margin-top: 10%;margin-bottom: 10%;max-width: 300px;"></img>
    </div>
    <div class="text" style="margin-top: 20px;margin-bottom: 20px;">
    <p style="font-size:80%;margin-bottom: 5%;"><i>Call of Duty: Black Ops Cold War is a 2020 first-person shooter video game developed by Treyarch and Raven Software and published by Activision.</i></p>
      <div>
      <?php if (isset($_SESSION['username'])): ?>
    <button id="wishlist-button-callofdutycoldwar" onclick="addToWishlist('<?php echo $_SESSION['username']; ?>', 'callofdutycoldwar')" class="btn btn-outline-success me-2" type="button"><i class="far fa-heart"></i> Add to Wishlist</button>
<?php else: ?>
    <p>Please <a href="index2.php">log in</a> to add this game to your wishlist.</p> 
    <!-- index2.php foi criado para ir para um login diferente que quando ele da sign in ele vai direto para a pagina do cs:go sem voltar pra homepage -->
<?php endif; ?>
      </div>
    </div>
  </div>
</div>


<!-- PLATAFORMAS COM PRECO -->

<div style="margin-bottom: 30px">
 <h1 class="title margem20" style="margin-top: 50px;;">Available on</h1>
  <div class="video-card-container3">  
    <div class="video-card3">
      <div class="video-card-price3">
        <img src="imagens/plataforma/steam.png" class="video-card-image3" alt="">
        <a href="https://store.steampowered.com/app/730/CounterStrike_Global_Offensive/"><img src="imagens/plataforma/steam 2.png" mute loop class="card-video3"></img>
        <span class="card__footer text">
          <p style="font-size:80%;margin-top: 15px;">Free</p>
        </span></a>
      </div>
    </div>
  </div>
</div>



   <!-- FOOTER -->

<nav class="navbar navbar-expand-lg" style="margin-top: 20px;">
  <div class="container-fluid" style="display:flex;justify-content: center;">
      <img src="imagens/logo/logonome.png" alt="" width="me-auto" height="35">
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="games.js"></script>
<script src="wishlist.js"></script>
<script>
document.addEventListener('DOMContentLoaded', (event) => {
    // Check wishlist on page load
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "check_wishlist.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    
    xhr.onreadystatechange = function() {
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
            var button = document.getElementById("wishlist-button-callofdutycoldwar");
            var response = JSON.parse(this.responseText);
            if (response.message === "Game is in the wishlist") {
                button.innerHTML = '<i class="far fa-trash"></i> Remove from Wishlist';
                button.className = 'btn btn-outline-danger me-2';
                button.onclick = function() { removeFromWishlist('<?php echo $_SESSION['username']; ?>', 'callofdutycoldwar'); };
            } else {
                button.innerHTML = '<i class="far fa-heart"></i> Add to Wishlist';
                button.className = 'btn btn-outline-success me-2';
                button.onclick = function() { addToWishlist('<?php echo $_SESSION['username']; ?>', 'callofdutycoldwar'); };
            }
        }
    }
    
    xhr.send("username=" + encodeURIComponent('<?php echo $_SESSION['username']; ?>') + "&game=callofdutycoldwar");
});

function addToWishlist(username, game) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "add_to_wishlist.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    var button = document.getElementById("wishlist-button-callofdutycoldwar");
    
    xhr.onreadystatechange = function() {
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
            var response = JSON.parse(this.responseText);
            if (response.status === 'success') {
                // alert("Game added to your wishlist!");
                button.innerHTML = '<i class="fa-regular fa-trash-can "></i> Remove from Wishlist';
                button.className = 'btn btn-outline-danger me-2';
                button.onclick = function() { removeFromWishlist(username, game); };
            } else if (response.status === 'error') {
                // alert(response.message);
            }
        }
    }
    
    xhr.send("username=" + encodeURIComponent(username) + "&game=" + encodeURIComponent(game));
}

function removeFromWishlist(username, game) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "remove_from_wishlist.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    var button = document.getElementById("wishlist-button-callofdutycoldwar");
    
    xhr.onreadystatechange = function() {
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
            var response = JSON.parse(this.responseText);
            if (response.status === 'success') {
                // alert("Game removed from your wishlist!");
                button.innerHTML = '<i class="far fa-heart"></i> Add to Wishlist';
                button.className = 'btn btn-outline-success me-2';
                button.onclick = function() { addToWishlist(username, game); };
            } else if (response.status === 'error') {
                // alert(response.message);
            }
        }
    }
    
    xhr.send("username=" + encodeURIComponent(username) + "&game=" + encodeURIComponent(game));
}
</script>
<script src="games.js"></script>
<script src="index.js"></script>

</body>
</html>