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
    <title>ZeroCostGaming - Home</title>
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

  


 <!-- CARROUSSEL -->

<div class="container" style="margin-top: 20px;">
  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner rounded-3">
      <div class="carousel-item active"><a href="csgo.php">
        <div class="d-flex">
          <img src="imagens/carroussel/csgo.png" class="d-block w-100" alt="...">
        </div></a>
      </div>
      <div class="carousel-item"><a href="rocketleague.php">
        <div class="d-flex">
          <img src="imagens/carroussel/rocketleague.jpg" class="d-block  w-100" alt="...">
        </div></a>
      </div>
      <div class="carousel-item"><a href="fifa23.php">
        <div class="d-flex">
          <img src="imagens/carroussel/fifa23.jpeg" class="d-block w-100" alt="...">
        </div></a>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

 <!-- FREE  SALE  NEW 
 <div class="video-card-container2 margem30">
  <div class="video-card2">
    <img src="imagens/free sale new/free.png" class="video-card-image2" alt="">
    <img src="imagens/free sale new/free 2.png" mute loop class="card-video2"></img>
  </div>
  <div class="video-card2">
    <img src="imagens/free sale new/sale.png" class="video-card-image2" alt="">
    <img src="imagens/free sale new/sale 2.png" mute loop class="card-video2"></img>
  </div>
  <div class="video-card2">
    <img src="imagens/free sale new/new.png" class="video-card-image2" alt="">
    <img src="imagens/free sale new/new 2.png" mute loop class="card-video2"></img>
  </div>
</div> -->

 <!-- LISTA DE PLATAFORMAS -->
 <h1 class="title margem20">Platforms</h1>
<div class="video-card-container">  
<div class="video-card" style="height:100px" >
    <img src="imagens/plataforma/steam.png" class="video-card-image" alt="">
    <a href="steam.php"><img src="imagens/plataforma/steam 2.png" mute loop class="card-video"></img></a>
  </div>
  <div class="video-card" style="height:100px" >
    <img src="imagens/plataforma/psn.png" class="video-card-image" alt="">
    <img src="imagens/plataforma/psn 2.png" mute loop class="card-video"></img>
  </div>
  <div class="video-card" style="height:100px" >
    <img src="imagens/plataforma/origin.png" class="video-card-image" alt="">
    <img src="imagens/plataforma/origin 2.png" mute loop class="card-video"></img>
  </div>
  <div class="video-card" style="height:100px" >
    <img src="imagens/plataforma/epicgames.png" class="video-card-image" alt="">
    <img src="imagens/plataforma/epicgames 2.png" mute loop class="card-video"></img>
  </div>
  <div class="video-card" style="height:100px" >
    <img src="imagens/plataforma/xbox.png" class="video-card-image" alt="">
    <img src="imagens/plataforma/xbox 2.jpg" mute loop class="card-video"></img>  
  </div>
</div> 

 <!-- RECOMENDADOS -->

<h1 class="title margem30" style="margin-top:0px">Recommended for You</h1>
    <div class="movies-list">
        <button class="pre-btn"><img src="imagens/random/pre.png" alt=""></button>
        <button class="nxt-btn"><img src="imagens/random/nxt.png" alt=""></button>
        <div class="card-container">
            <div class="card">
              <img src="imagens/jogos/minecraft.png" class="card-img" alt="">
              <div class="card-body">
                  <h2 class="name">Minecraft</h2>
              </div>
            </div> 
            <div class="card"><a href="callofdutycoldwar.php">
              <img src="imagens/jogos/callofdutycoldwar.png" class="card-img" alt="">
              <div class="card-body">
                  <h2 class="name">Call of Duty: Cold War</h2>
              </div></a>
            </div> 
            <div class="card">
              <img src="imagens/jogos/forza.png" class="card-img" alt="">
              <div class="card-body">
                  <h2 class="name">Forza Horizon 5</h2>
              </div>
            </div>
            <div class="card">
              <img src="imagens/jogos/spider man.jpg" class="card-img" alt="">
              <div class="card-body">
                  <h2 class="name">Spider-Man: Miles Morales</h2>
              </div>
            </div> 
            <div class="card">
              <img src="imagens/jogos/gta.png" class="card-img" alt="">
              <div class="card-body">
                  <h2 class="name">GTA V</h2>
              </div>
            </div>
            <div class="card">
              <img src="imagens/jogos/revil.jpg" class="card-img" alt="">
              <div class="card-body">
                  <h2 class="name">Resident Evil VII</h2>
              </div>
            </div> 
            <div class="card">
              <img src="imagens/jogos/overwatch.jpg" class="card-img" alt="">
              <div class="card-body">
                  <h2 class="name">Overwatch 2</h2>
              </div>
            </div>
            <div class="card">
              <img src="imagens/jogos/nfl.jpg" class="card-img" alt="">
              <div class="card-body">
                  <h2 class="name">Madden NFL 23</h2>
              </div>
            </div>
            <div class="card">
              <img src="imagens/jogos/rainbow.jpg" class="card-img" alt="">
              <div class="card-body">
                  <h2 class="name">Rainbow Six Siege</h2>
              </div>
            </div>
            <div class="card">
              <img src="imagens/jogos/ark.jpg" class="card-img" alt="">
              <div class="card-body">
                  <h2 class="name">ARK: Survival Evolved</h2>
              </div>
            </div>
            <div class="card">
              <img src="imagens/jogos/halo.png" class="card-img" alt="">
              <div class="card-body">
                  <h2 class="name">Halo Infinite</h2>
              </div>
            </div>
            <div class="card">
              <img src="imagens/jogos/csgo.png" class="card-img" alt="">
              <div class="card-body">
                  <h2 class="name">CS:GO</h2>
              </div>
            </div>  
            <div class="card">
              <img src="imagens/jogos/nfs.jpg" class="card-img" alt="">
              <div class="card-body">
                  <h2 class="name">Need For Speed: Unbound</h2>
              </div>
            </div>
            <div class="card">
              <img src="imagens/jogos/nba.png" class="card-img" alt="">
              <div class="card-body">
                  <h2 class="name">NBA 2K22</h2>
              </div>
            </div> 
            <div class="card">
              <img src="imagens/jogos/red dead redemption.jpg" class="card-img" alt="">
              <div class="card-body">
                  <h2 class="name">Red Dead Redemption II</h2>
              </div>
            </div> 
        </div>
   </div>
   
   <!-- WISHLIST -->

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

<h1 class="title margem30">In Your Wishlist</h1>
<div class="movies-list">
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
    <div class="card">
        <img src="<?php echo $imgPath; ?>" class="card-img" alt="">
        <div class="card-body">
            <h2 class="name"><?php echo $game; ?></h2>
        </div>
    </div> 
    <?php endforeach; ?>
</div>
</div>

   <!-- OTHER GAMES -->

   <h1 class="title margem30">Other Games</h1>
   <div class="movies-list">
       <button class="pre-btn"><img src="imagens/random/pre.png" alt=""></button>
       <button class="nxt-btn"><img src="imagens/random/nxt.png" alt=""></button>
       <div class="card-container">
            <div class="card">
             <img src="imagens/jogos/gta.png" class="card-img" alt="">
             <div class="card-body">
                 <h2 class="name">GTA V</h2>
             </div>
           </div>
           <div class="card">
             <img src="imagens/jogos/csgo.png" class="card-img" alt="">
             <div class="card-body">
                 <h2 class="name">CS:GO</h2>
             </div>
           </div>  
           <div class="card">
             <img src="imagens/jogos/nfs.jpg" class="card-img" alt="">
             <div class="card-body">
                 <h2 class="name">Need For Speed: Unbound</h2>
             </div>
           </div>
           <div class="card">
             <img src="imagens/jogos/nba.png" class="card-img" alt="">
             <div class="card-body">
                 <h2 class="name">NBA 2K22</h2>
             </div>
           </div> 
           <div class="card">
             <img src="imagens/jogos/red dead redemption.jpg" class="card-img" alt="">
             <div class="card-body">
                 <h2 class="name">Red Dead Redemption II</h2>
             </div>
           </div> 
           <div class="card">
               <img src="imagens/jogos/f1 22.png" class="card-img" alt="">
               <div class="card-body">
                   <h2 class="name">F1 22</h2>
               </div>
           </div>
           <div class="card"><a href="rocketleague.php">
             <img src="imagens/jogos/rocketleague.jpg" class="card-img" alt="">
             <div class="card-body">
                 <h2 class="name">Rocket League</h2>
             </div></a>
           </div>
           <div class="card">
             <img src="imagens/jogos/minecraft.png" class="card-img" alt="">
             <div class="card-body">
                 <h2 class="name">Minecraft</h2>
             </div>
           </div> 
           <div class="card">
             <img src="imagens/jogos/callofdutycoldwar.png" class="card-img" alt="">
             <div class="card-body">
                 <h2 class="name">Call of Duty: Cold War</h2>
             </div>
           </div> 
           <div class="card">
             <img src="imagens/jogos/forza.png" class="card-img" alt="">
             <div class="card-body">
                 <h2 class="name">Forza Horizon 5</h2>
             </div>
           </div>
           <a href="fifa23.php"><div class="card">
             <img src="imagens/jogos/fifa23.jpg" class="card-img" alt="">
             <div class="card-body">
                 <h2 class="name">FIFA 23</h2>
             </div>
           </div></a>
           <div class="card">
             <img src="imagens/jogos/spider man.jpg" class="card-img" alt="">
             <div class="card-body">
                 <h2 class="name">Spider-Man: Miles Morales</h2>
             </div>
           </div> 
           <div class="card">
             <img src="imagens/jogos/revil.jpg" class="card-img" alt="">
             <div class="card-body">
                 <h2 class="name">Resident Evil VII</h2>
             </div>
           </div> 
           <div class="card">
             <img src="imagens/jogos/overwatch.jpg" class="card-img" alt="">
             <div class="card-body">
                 <h2 class="name">Overwatch 2</h2>
             </div>
           </div> 
           <div class="card">
             <img src="imagens/jogos/mortal kombat 11.png" class="card-img" alt="">
             <div class="card-body">
                 <h2 class="name">Mortal Kombat 11</h2>
             </div>
           </div> 
           <div class="card">
             <img src="imagens/jogos/nfl.jpg" class="card-img" alt="">
             <div class="card-body">
                 <h2 class="name">Madden NFL 23</h2>
             </div>
           </div>
           <div class="card">
             <img src="imagens/jogos/rainbow.jpg" class="card-img" alt="">
             <div class="card-body">
                 <h2 class="name">Rainbow Six Siege</h2>
             </div>
           </div>
           <div class="card">
             <img src="imagens/jogos/ark.jpg" class="card-img" alt="">
             <div class="card-body">
                 <h2 class="name">ARK: Survival Evolved</h2>
             </div>
           </div>
           <div class="card">
             <img src="imagens/jogos/halo.png" class="card-img" alt="">
             <div class="card-body">
                 <h2 class="name">Halo Infinite</h2>
             </div>
           </div>
       </div>
   </div>
   


   <!-- FOOTER -->

   <nav class="navbar navbar-expand-lg ">
    <div class="container-fluid" style="display:flex;justify-content: center;">
        <img src="imagens/logo/logonome.png" alt="" width="me-auto" height="35">
    </div>  
  </nav>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" >
</script>
<script src="games.js"></script>
<script src="index.js"></script>
</body>
</html>
