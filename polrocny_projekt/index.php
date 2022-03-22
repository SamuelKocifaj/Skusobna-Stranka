<!DOCTYPE html>
<html>
<head>
    <title>Maximos recenzos</title>
    <link rel="stylesheet" type="text/css"href="style.css">
</head>
<body>
<header>
    <a href="#" class="logo">Banger</a>
    <ul>
        <li><a href="#"class="active">Home</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="http://localhost/DAA/polrocny_projekt/login.php">Login/Register</a></li>
        
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
</body>
</html>