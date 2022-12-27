<?php 
    require "./config/config.php";
    $info = $mysql -> query("SELECT * FROM `site_info_en`");
    $mysql -> close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>

    <link rel="stylesheet" href="./css/blogStyle.css" />
        <link rel="stylesheet" href="./css/mainAll.css">

    <link rel="stylesheet" href="./css/blogMedia768.css">
        <link rel="stylesheet" href="./css/respmenufooter768.css">
    <link rel="stylesheet" href="./css/respmenufooter375.css">
    <link rel="stylesheet" href="./css/blogMedia375.css">
    <link rel="icon" href="./img/Logo.png">
</head>

<body>

<div class="header">
            <a href="index.php" class="logo" id="logo"></a>
            <a href="" class="toggle-button" onclick="toggleNav(this)">
              <span class="bar1"></span>
              <span class="bar2"></span>
              <span class="bar3"></span>
            </a> 

        <ul class="navbar">
            <li><a href="About-en.html">About us</a> </li>
            <li><a href="Masnachyux-en.html">Stores</a> </li>
            <li><a href="Blog-en.html" class="active">Blog</a> </li>
            <li><a href="Contact-en.html">Contact</a></li>
            <li><a href="Hashvich-en.html">Online calculator</a></li>
        </ul>
        <div class="language resp-lang">
            <a href="Contact.html" class="active">ARM</a>
            <a href="Contact-en.html">EN</a>
            <a href="Contact-ru.html">RU</a>
        </div>
        <div class="icons">
            <img class="search_icon" src="./img/search.png" alt="">
            <img class="heart_icon" src="./img//heart.png" alt="">
        </div>
        <div class="line"></div>
        <div class="call">
            <a class="phone">+374 33 51 55 55</a></a>
            <a href="tel:+37433515555" class="order-call">Order a call</a>
        </div>
    </div>
    <div class="second-menu">
        <div class="second-menu-navigation">
            <a href="Apranq.html" class="sub-menu-a">Metal tile</a>
            <a href="Apranq.html" class="sub-menu-a">Sheet</a>
            <a href="Apranq.html" class="sub-menu-a">Profile</a>
            <a href="Apranq.html" class="sub-menu-a">Corrugated sheet</a>
            <a href="Apranq.html" class="sub-menu-a">Meshes</a>
            <a href="Apranq.html" class="sub-menu-a">Metal products</a>
            <a href="Apranq.html" class="sub-menu-a">Roofing accessories</a>
            <a href="Apranq.html" class="sub-menu-a">Other</a>
        </div>
        <div class="language">
            <a href="Blog.php" class="active">ARM</a>
            <a href="Blog-en.php">EN</a>
            <a href="Blog-ru.php">RU</a>
        </div>
    </div>
    <div class="menu_holder">
        <div class="text_center">
            <div class="border_div"></div>
            <p class="credit">Blog</p>
        </div>
    </div>
    <div class="container">
        <div class="texts">
            <p class="main">Home
                <img src="./img/arrow.png" class="arrow"> Semur Blog
            </p>
        </div>
        <div class="blog-title">
            <div class="blog-title1">Blog</div>
            <div class="blog-title2">News and articles</div>
            <div class="blog-title3">Latest news on our website</div>
        </div>
        <div class="blog-container">
            <div class="blogs">
                <?php 
                    foreach ($info as $value) {
                        echo '<div class="blog-item">
                        <div class="item-img">
                            <img src="./img/blog/'.$value['img'].'" alt="1pic"/>
                        </div>
                        <div class="item-info">
                            <h3 class="item-title">'.$value['title'].'<img src="./img/arrow-up-right.png" /></h3>
                            <p class="item-text">'.$value['text'].'</p>
                            <div class="blog-button">
                            </div>
                        </div>
                    </div> ';
                    }
                
                ?>  
          </div>
       </div>
    
 
     <div class="pagination">
        <li><a class="page-link previous-page disable"><img src="img/prev.png"></a></li>
        <li class="page-item current-page  active"><a class="page-link">1</li>
        <li class="page-item dots"><a class="page-link" href="#">...</li>
        <li class="page-item current-page"><a class="page-link">5</li>
        <li class="page-item current-page"><a class="page-link" >6</li>
        <li class="page-item dots"><a class="page-link"  href="#">...</li>
        <li class="page-item current-page"><a class="page-link" >7</li>
        <li class="page-item current-page"><a class="page-link" >8</li>
        <li class="page-item dots"><a class="page-link"  href="#">...</li>
        <li class="page-item current-page"><a class="page-link" >20</li>
       <li><a class="page-link next-page"><!-- <img src="img/next.png"> --></a></li>
    </div>

   </div>
    <div class="headphones">
        <img src="./img/naushnik.png" alt="">
    </div>
    <div class="footer">
        <div class="info">
          <img src="./img/logo_semur.png" class="logo-semur" alt="logo" />
          <a href="#">Factory,Kotayq state,C.Eghvard<br /> Yerevanyan Highway, str. 118:
          </a>
          <a href="">033 51 55 55, 033 52 55 55</a>
          <a href="mailto: info@semur.am" target="blank">info@semur.am</a>
          <div class="resp-menu">
            <ul class="resp-menu-ul">
                <li><a href="Aparanq-en.html">Our products</a></li>
                <li><a href="About-en.html">About us</a></li>
                <li><a href="Masnachyux-en.html">Stores</a></li>
                <li><a href="Contact-en.html">Contacts</a></li>
              </ul>

              <hr class="resp-hr" />
          </div>

          <p class="copy">Semur & Co. © 2022</p>
          <p class="copy1">All rights reserved.</p>
        </div>
        <div class="container-footer">
          <div class="footer-items">
            <a>Our products</a>
            <a href="Apranq.html">Metal tile</a>
            <a href="Apranq.html">Sheet</a>
            <a href="Apranq.html">Corrugated sheet</a>
            <a href="Apranq.html">Profile</a>
            <a href="Apranq.html">Meshes</a>
            <a href="Apranq.html">Metal products</a>
            <a href="Apranq.html">Roofing accessories</a>
            <a href="Apranq.html">Other</a>
          </div>
          <div class="footer-items footer-info">
            <a>More</a>
            <a href="About-en.html">About us</a>
            <a href="Masnachyux-en.html">Stores</a>
            <a href="Blog-en.php">Blog</a>
            <a href="">Privacy Policy</a>
            <a href="Hashvetvutyun-en.html">Report</a>
            <a href="Aparik-en.html"> Credit sale</a>
            <a href="Contact-en.html">Contact </a>
          </div>
          <div class="footer-items footer-img">
            <div class="social">
              <p>Follow us</p>
              <a target="_blank" href="https://www.instagram.com/semur.co/">
                <img src="./img/Instagram Icon.png" alt="Instagram" />
              </a>
              <a target="_blank" href="https://www.facebook.com/pages/category/Building-Materials/Semur-Co-118059506271527/">
                <img src="./img/Facebook Icon.png" alt="Facebook" />
              </a>
              <a target="_blank" href="https://www.youtube.com/channel/UCRKkZQOBU7hrXgYhSgnRBNg">
                <img src="./img/Youtube Icon.png" alt="Youtube" />
              </a>
            </div>
          </div>
        </div>
      </div>
    <script src="./js/style.js"></script>
    <script src="js/Contact.js"></script>
    <script src="js/Blog.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/slide.js"></script>
    <script src="./js/style.js"></script>
</body>
</html>
