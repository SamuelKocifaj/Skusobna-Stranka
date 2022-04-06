<!DOCTYPE html>
<html>
<head>
    <title>Maximos recenzos</title>
    <link rel="stylesheet" type="text/css"href="style.css">
</head>
<body>
        <?php 
            session_start();
            if(isset($_GET['odhlasit'])){
                session_destroy();
            }
            ?>
<header>
    <a href="#" class="logo">Banger</a>
    <ul>
        <li><a href="#"class="active">Home</a></li>
        <li><a href="users.php">Users</a></li>
        <?php
        if(isset($_SESSION['uzivatel_meno']) ==''){
                   echo '<li><a href="login.php">Login/Register</a></li>';
               }else{
                    echo"<li><u>";               
                    echo ''.$_SESSION['uzivatel_meno'].''; 
                    echo"</u></li>";
                    echo"<li>";               
                    echo '<a href="index.php?odhlasit">Log OUT</a>'; 
                    echo"</li>";
                }
                ?>
    </ul>
</header>
<section> 
    <img src="stars.png"id="stars">
    <img src="moon.png"id="moon">
    <img src="mountains_behind.png"id="mountains_behind">
    <h2 id="text">Uletik</h2>
    <a href="#sec" id="btn">Explore</a>
    <img src="mountains_front.png"id="mountains_front">
</section>
    <div class="sec" id="sec">
        <h2>Parallax Scroll</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
         Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
         Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum<br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
         Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
         Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum<br><br></p>
    </div>
    <script>
        let stars= document.getElementById('stars');
        let moon= document.getElementById('moon');
        let mountains_behind= document.getElementById('mountains_behind');
        let text= document.getElementById('text');
        let btn= document.getElementById('btn');
        let mountains_front= document.getElementById('mountains_front');
        let header= document.querySelector('header');
        window.addEventListener('scroll', function(){
            let value=window.scrollY;
            stars.style.left = value *0.25 + 'px';
            moon.style.top = value *1.05 + 'px';
            mountains_behind.style.top = value *0.5 + 'px';
            mountains_front.style.top = value *0 + 'px';
            text.style. marginRight= value *4 + 'px';
            text.style. marginTop= value *1.5 + 'px';
            btn.style. marginTop= value *1.5 + 'px';
            header.style.top= value *0.5 + 'px';
        })
    </script>
            
            <div class="slideshow-container">

            
            <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="omen.jpg" style="width:100%">
            <div class="text">Omen</div>
            </div>

            <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="reyna.jpg" style="width:100%">
            <div class="text">Reyna</div>
            </div>

            <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="reyna2.jpg" style="width:100%">
            <div class="text">Reyna</div>
            </div>

            
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            
            <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
                </div>
<script>
    let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
</body>
</html>