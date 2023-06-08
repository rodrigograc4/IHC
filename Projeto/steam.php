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

 <div class="container" style="margin-top: 20px">
    <img src="imagens/plataforma/steamname.png" class="d-block w-100" alt="..." style="max-height: 80px;object-fit: contain;">
  </div>

 <!-- FREE  SALE  NEW -->
 <h1 class="title margem20">Filters</h1>
 <div class="video-card-container2" style="display: flex; justify-content: center;">
  <div class="video-card2" onclick="filterGames('free')" style="margin-right: 10px;">
    <img src="imagens/free sale new/free.png" class="video-card-image2" alt="">
    <img src="imagens/free sale new/free 2.png" mute loop class="card-video2"></img>
  </div>
  <div class="video-card2" onclick="filterGames('sale')" style="margin-right: 10px;">
    <img src="imagens/free sale new/sale.png" class="video-card-image2" alt="">
    <img src="imagens/free sale new/sale 2.png" mute loop class="card-video2"></img>
  </div>
  <div class="video-card2" onclick="filterGames('filter')" style="margin-right: 10px;">
    <img src="imagens/plataforma/steamprice1.jpeg" class="video-card-image2" alt="">
    <img src="imagens/plataforma/steamprice2.jpeg" mute loop class="card-video2"></img>
  </div>

  <div class="filter-price" style="display: flex; flex-direction: column; align-items: center; margin-left: 10px; margin-right: 10px;">
    <!-- <h1 class="title margem20">Filter by Price</h1> -->
    <div style="display: flex; width: 35%; justify-content: center; align-items: center;">
      <label for="min-price" style="color: white; margin-right: 0.5rem;">Minimum Price:</label>
      <input type="number" id="min-price" value="0" min="0" step="1">
    </div>
    <div style="display: flex; width: 35%; justify-content: center; margin-top: 1rem;">
      <label for="max-price" style="color: white; margin-right: 0.5rem;">Maximum Price:</label>
      <input type="number" id="max-price" value="70" min="0" step="1">
    </div>
    <div style="display: flex; justify-content: center; margin-top: 1rem;">
      <button style="margin-right: 10px;" class="btn btn-outline-danger" onclick="filterGames('filter')">Clear</button>
      <button class="btn btn-outline-success" onclick="filterGames('price')">Apply</button>
    </div>
  </div>
</div>






<!-- GAMES -->


<h1 class="title margem30">Available on Steam</h1>
<div class="movies-list">
  <button class="pre-btn"><img src="imagens/random/pre.png" alt=""></button>
  <button class="nxt-btn"><img src="imagens/random/nxt.png" alt=""></button>
  <div class="card-container" id="cardContainer"></div>
</div>

<!-- FOOTER -->

<nav class="navbar navbar-expand-lg " style="margin-top: 20px;">
  <div class="container-fluid" style="display:flex;justify-content: center;">
      <img src="imagens/logo/logonome.png" alt="" width="me-auto" height="35">
  </div>
</nav>

<script>
  var games = [
      { src: 'imagens/jogos/gta.png', price: '29.99€', sale: '29.99€' },
      { src: 'imagens/jogos/csgo.png',price: 'Free', sale: 'Free' },
      { src: 'imagens/jogos/nfs.jpg', price: '69.99€', sale: '29.99€' },
      { src: 'imagens/jogos/nba.png', price: '59.99€', sale: '59.99€' },
      { src: 'imagens/jogos/red dead redemption.jpg', price: '59.99€', sale: '59.99€' },
      { src: 'imagens/jogos/f1 22.png', price: '49.99€', sale: '49.99€' },
      { src: 'imagens/jogos/rocketleague.jpg', price: '19.99€', sale: '19.99€' },
      { src: 'imagens/jogos/callofdutycoldwar.png', price: '29.99€', sale: '29.99€' },
      { src: 'imagens/jogos/forza.png', price: '29.99€', sale: '19.99€' },
      { src: 'imagens/jogos/fifa23.jpg', price: '29.99€', sale: '29.99€' },

      // ... rest of your games
  ];

  function filterGames(filter) {
      var container = document.getElementById('cardContainer');
      container.innerHTML = '';
      
      var filteredGames = games;
      if (filter === 'free') {
          filteredGames = games.filter(game => game.price === 'Free');
      }  else if (filter === 'sale') {
          filteredGames = games.filter(game => game.sale !== game.price);

      }
      else if (filter === 'filter') {
          filteredGames.sort((a, b) => {
            var priceA = a.sale === 'Free' ? 0 : parseFloat(a.sale);
            var priceB = b.sale === 'Free' ? 0 : parseFloat(b.sale);
            return priceA - priceB;
        });
      } else if (filter === 'price') {
        var minPrice = document.getElementById('min-price').value;
        var maxPrice = document.getElementById('max-price').value;
        filteredGames = games.filter(game => {
            var price = game.sale === 'Free' ? 0 : parseFloat(game.sale);
            return price >= minPrice && price <= maxPrice;
        });
    }

      for (var i = 0; i < filteredGames.length; i++) {
          var game = filteredGames[i];
          var card = `
          <div class="card">
    <a href="http://localhost:8000/${game.src.split('/').pop().split('.').slice(0, -1).join('.')}.php">
        <img src="${game.src}" class="card-img" alt="">
    </a>
    <span class="card__footer2 text">
        <p style="font-size: 80%; margin-top: 15px;">
            ${game.sale !== game.price ? '<span style="text-decoration: line-through;">' + game.price + '</span> ' : ''}
            ${game.sale}
        </p>
    </span>
</div>



          `;
          container.innerHTML += card;
      }
  }

  filterGames();  // Call this function initially to display all games
</script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" >
</script>
<script src="games.js"></script>
<script src="index.js"></script>
</body>
</html>