<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TicketTron</title>
    <link rel="icon" href="C:\Users\HP\Pictures\Screenshots\Screenshot (372).png">
    <link rel="stylesheet" href="movie.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    
</head>
<body style="background-color:rgb(59, 1, 59);">
    
    <header>
        <video src="Videos/JohnWick4trailer.mp4" autoplay muted></video>
        <nav>
            <div class="logo">
                <img src="thunder.webp" alt="">
            
                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Movies</a>
                        
                    </li>
                    
                </ul>
            </div>
            <div class="searchlogin">
                <input type="text" placeholder="Search" id="search_input">
                <!--<img src="Images/LoginIcon.png" alt="login">-->
                <a href="logout.php" class="btn btn-warning">Logout</a>
                <!--<div class="search">
                    <a href="#" class="card">
                        <img src="Images/johnwick4.webp" alt="">
                        <div class="cont">
                            <h3>John Wick: Chapter 4</h3>
                            <p>Action, Thriller, 2023, <span class="tronmeter">TronMeter </span><i class="bi bi-star-fill"></i> 9.5</p>
                        </div>
                    </a>
                    

                </div>-->
            </div>
        </nav>
        <div class="content">
            <h1 id="trending">Movie Buffs Trending Pick:</h1>
            <h1 id="title">John Wick : Chapter 4</h1>
            <p>With the price on his head ever increasing, legendary hit man John Wick takes his fight against the High Table global as he seeks out the most powerful players in the underworld, from New York to Paris to Japan to Berlin.</p>
            <div class="details">
                <h6>A Chad Stahelski Film</h6>
                <h5 id="gen">Action/Thriller</h5>
                <h4>2023</h4>
                <h3 id="rate"><span>TronMeter</span><i class="bi bi-star-fill"></i> 9.5</h3>

            </div>
            <div class="btns">
                <a href="https://www.youtube.com/watch?v=yjRHZEUamCc" id="play">Play Trailer  <i class="bi bi-play-circle-fill"></i></a>
                <a href="tickets.html" id="ticket">Book Tickets  <i class="bi bi-ticket-perforated-fill"></i></a>
            </div>
        </div>
        <!--<section>
            <h4>Trending Movies</h4>
            <div class="cards"></div>
        </section>-->
    </header>
    <section class="trendingmovies">
        <h4>Trending Movies</h4>
        <div class="trendcards">
            <a class="card" id="avatar">
                <img src="Images/avatar2.jpg" alt="avatar2" class="poster">
            </a>
            <a class="card" id="eternals">
                <img src="Images/eternals.jpg" alt="eternals" class="poster">
            </a>
            <a class="card" id="ggv3">
                <img src="Images/ggv3.webp" alt="ggv3" class="poster">
            </a>
            <a class="card" id="spidy">
                <img src="Images/spidyverse.jpg" alt="spidy" class="poster">
            </a>
            <a class="card" id="tiger">
                <img src="Images/tiger3.jpg" alt="tiger" class="poster">
            </a>
            <a class="card" id="openheimer">
                <img src="Images/oppenheimer.webp" alt="oppenheimer" class="poster">
            </a>
            <a class="card" id="dasara">
                <img src="Images/dasara.webp" alt="dasara" class="poster">
            </a>
            <a class="card" id="pope">
                <img src="Images/pope.webp" alt="pope" class="poster">
            </a>
            <a class="card" id="gumrah">
                <img src="Images/gumrah.jpg" alt="gumrah" class="poster">
            </a>
            <a class="card" id="fast10">
                <img src="Images/fast10.jpg" alt="fast10" class="poster">
            </a>
            <a class="card" id="adipurush">
                <img src="Images/adipurush.webp" alt="adipurush" class="poster">
            </a>
            <a class="card" id="shazam">
                <img src="Images/shazam.webp" alt="shazam" class="poster">
            </a>
            <a class="card" id="scream">
                <img src="Images/scream.webp" alt="scream" class="poster">
            </a>
            
        </div>
    </section>
    <section class="oldclassics">
        <h4>Old Classics back in the Theatres !</h4>
        <div class="oldclassiccards">
            <a  class="card" id="angry">
                <img src="Images/twelve.jpg" alt="twelve" class="poster">
            </a>
            <a  class="card" id="godfather">
                <img src="Images/godfather.jpg" alt="godfather" class="poster">
            </a>
            <a  class="card" id="list">
                <img src="Images/list.jpg" alt="list" class="poster">
            </a>
            <a  class="card" id="kane">
                <img src="Images/kane.jpg" alt="kane" class="poster">
            </a>
            <a  class="card" id="lagan">
                <img src="Images/lagaan.jpg" alt="lagaan" class="poster">
            </a>
            <a  class="card" id="shawshank">
                <img src="Images/shawshank.jpg" alt="shawshank" class="poster">
            </a>
            <a  class="card" id="darkknight">
                <img src="Images/DarkKnight.jpg" alt="DarkKnight" class="poster">
            </a>
            <a  class="card" id="sholay">
                <img src="Images/sholay.jpg" alt="sholay" class="poster">
            </a>
            <a  class="card" id="pokiri">
                <img src="Images/pokiri.jpg" alt="pokiri" class="poster">
            </a>
            <a  class="card" id="inception">
                <img src="Images/inception.jpg" alt="inception" class="poster">
            </a>
            <a  class="card" id="django">
                <img src="Images/django.jpg" alt="django" class="poster">
            </a>
            <a  class="card" id="madmax">
                <img src="Images/madmax.jpg" alt="bommarillu" class="poster">
            </a>
            <a  class="card" id="basterds">
                <img src="Images/basterds.jpg" alt="basterds" class="poster">
            </a>
        </div>
    </section>
    <!--<footer>
        <div class="bottomcont">
            <p>Contact us</p>
            <p>Email ID</p>
            <p>Instagram</p>
        </div>
    </footer>-->
    
<script src="movie.js"></script>  

</body>

</html>