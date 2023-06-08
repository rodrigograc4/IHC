<?php
            session_start(); // Start the session

            // Check if the user is logged in
            if (isset($_SESSION['username'])) {
                echo '<div style="color: white">Hi, ' . $_SESSION['username'] . '!</div>';
                echo '<form action="logout.php" method="POST">';
                echo '<input type="submit" value="Logout" class="btn btn-outline-light margemleft">';
                echo '</form>';
            } else {
                echo '<ul class="navbar-nav">';
                echo '<li class="nav-item">';
                echo '<a class="nav-link margemleft" href="index.php">Login</a>';
                echo '</li>';
                echo '</ul>';
            }
            ?>