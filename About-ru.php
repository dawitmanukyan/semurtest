<?php 
  require "./config/config.php";
  $gallery = $mysql -> query("SELECT * FROM `gallery`");
  $mysql -> close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/aboutStyle.css" />
    <link rel="stylesheet" href="./css/mainAll.css">
    <link rel="stylesheet" href="./css/aboutMedia768.css" />
    <link rel="stylesheet" href="./css/respmenufooter768.css">
    <link rel="stylesheet" href="./css/aboutMedia375.css" />
    <link rel="stylesheet" href="./css/respmenufooter375.css">
    <link rel="icon" href="./img/Logo.png">
     <title>О нас</title>
</head>
<body>
        <div class="header">

          <a href="index-ru.php" class="logo" id="logo"></a>
 <a href="" class="toggle-button" onclick="toggleNav(this)">
   <span class="bar1"></span>
   <span class="bar2"></span>
   <span class="bar3"></span>
 </a>
        <ul class="navbar">
            <li><a href="About-ru.html" class="active">О нас</a> </li>
            <li><a href="Masnachyux-ru.html">Филиалы</a> </li>
            <li><a href="Blog-ru.html">Блог</a> </li>
            <li><a href="Contact-ru.html">Связь</a></li>
            <li><a href="Hashvich-ru.html">Онлайн калькулятор</a></li>
        </ul>
        <div class="language resp-lang">
           <a href="About.php">Հայ</a>
            <a href="About-en.php">EN</a>
            <a href="About-ru.php" class="active">РУ</a>
        </div>
        <div class="icons">
            <img class="search_icon" src="./img/search.png" alt="">
            <img class="heart_icon" src="./img//heart.png" alt="">
        </div>
        <div class="line"></div>
        <div class="call">
            <a class="phone">+374 33 51 55 55</a></a>
            <a href="tel:+37433515555" class="order-call">Заказать звонок</a>
        </div>
    </div>
    <div class="second-menu">
        <div class="second-menu-navigation">
            <a href="Apranq.html" class="sub-menu-a">Плитка</a>
            <a href="Apranq.html" class="sub-menu-a">Пластина</a>
            <a href="Apranq.html" class="sub-menu-a">Профиль</a>
            <a href="Apranq.html" class="sub-menu-a">Профнастил</a>
            <a href="Apranq.html" class="sub-menu-a">Сетка</a>
            <a href="Apranq.html" class="sub-menu-a">Детали из метелла</a>
            <a href="Apranq.html" class="sub-menu-a">Комплектующие детали крыши</a>
            <a href="Apranq.html" class="sub-menu-a">другое</a>
        </div>
        <div class="language">
            <a href="About.php">Հայ</a>
            <a href="About-en.php">EN</a>
            <a href="About-ru.php"  class="active">РУ</a>
        </div>
    </div>
    <div class="menu_holder">
        <div class="text_center">
            <div class="border_div"></div>
            <p class="credit">О нас</p>
        </div>
    </div>
    <div class="container">
        <div class="texts">
            <p class="main">Главное
                <img src="./img/arrow.png" class="arrow">О нас
            </p>
        </div>
    
        <div class="container-text">
            <div>
                <div class="titleA-about">О нас</div>
                <div class="titleB-about">О нашей компании</div>
                <div class="titleC-about">Сегодня "Семур и Ко" - это стройматериалы Армении <span class="resp-about375">является одним из крупнейших предприятий обрабатывающей промышленности. Он был основан в 2003 году.</span>
                </div>
            </div>           
                <div class="content-about-text">
                    <div class="content-about-textA">
                        «Семур и Ко» на сегодняшний день является одним из крупнейших предприятий отрасли строительных материалов в Армении. Он был основан в 2003 году семьей Вирабян.
                        <div class="content-about-textA-br">Компания «Семур и Ко» предлагает потребителю оцинкованные, оцинкованные с полимерным (цветным) покрытием, металлочерепицу с широким выбором цветов и дополняющие их детали.</div>
                        Компания является лидером в РА по производству и продаже профилей для гипсокартона, оцинкованных профилей для дверей и окон ПВХ, направляющих, различных видов сеток, а также гвоздей, ведер
                    </div>
                    <div class="content-about-textB">
                        В то же время компания «Семур и Ко» занимается импортом и продажей строительной продукции.
                       <div class="content-about-textB-br">
                            Ассортимент продукции импортируется из разных стран мира, в частности из Южной Кореи, Китая, Ирана.
                       </div> 
                       <div class="content-about-textC-br">
                        <ul class="contact-about-item">
                            Основными целями нашей компании являются:
                           <li>• обеспечить местный рынок качественной и конкурентоспособной продукцией</li>  
                            <li>• Высококачественные строительные услуги</li>
                            <li>•  доступность центров продаж и обслуживания</li>
                            <li>• экономия времени и дополнительных ресурсов.</li>
                        </ul>
                       
                       </div>
                      
                    </div>
                </div>
            </div>


            <div class="items-about"> 
                <div class="items-aboutA">
                    <div class="item-aboutA">
                        400+
                    </div>
                    <div class="item-aboutB">
                        Партнеры
                    </div>
                    <div class="item-aboutC">
                        У нас много партнеров со всего мира
                    </div>
                </div>
                <div class="items-aboutB">
                    <div class="item-aboutA">
                        600+
                    </div>
                    <div class="item-aboutB">
                        Партнеры
                    </div>
                    <div class="item-aboutC">
                        У нас много партнеров со всего мира
                    </div>
                </div>
                <div class="items-aboutC">
                    <div class="item-aboutA">
                        10K
                    </div>
                    <div class="item-aboutB">
                        Партнеры
                    </div>
                    <div class="item-aboutC">
                       У нас много партнеров со всего мира
                    </div>
                </div>
            </div>

           
            <div class="about-items-img">
                <div class="about-item-img-title">Галерея</div>
                <div class="aboutSlide">
                <?php 
                  foreach($gallery as $value){
                    echo '<div class="slide-item"><img src="./img/'.$value['img'].'" alt="" class="about-item--img'.$value['id'].'"></div>';
                  }
                ?>
             </div>
             <div class="pagination">
 
                 <div class="page">0<span class="page-num"></span></div>
                 <div class="img-slide-arrow">
                     <img src="img/arrow-left.png" alt="arrow-left" class="img-slide-arrow1 prev">
                     <img src="img/arrow-right.png" alt="arrow-right" class="img-slide-arrow2 next">
                 </div>
               </div>
      
            </div>
    </div>
    
 
  
    <div class="headphones-hover">
      <div class="headphones">
        <img src="./img/naushnik.png" alt="" />
      </div>
      <div class="hover-icons">
        <div class="hover-icon-watsup button">
          <a href="watsup:+374 33 51 55 55" target="_blank"><img src="./img/wUp.png" alt="" /></a>
        </div>
        <div class="hover-icon-messanger button">
         <a href="https://www.facebook.com/messages/t/100000024311828" target="_blank"><img src="./img/messanger-icon.png" alt="" /></a>
        </div>
        <div class="hover-icon-call button">
        <a href="tel:+374 33 51 55 55" target="_blank"><img src="./img/icon-hover-call.png" alt="tel" /></a>
        </div>
        <div class="hover-icon-mail button">
          <a href="mailto:@semur.am" target="_blank"><img src="./img/icon-hover-mail.png" alt="" /></a>
        </div>
        <div class="hover-icon-headphone button">
          <img src="./img/headphone-hover.png" alt="headphone" target="_blank" />
        </div>
      </div>
    </div>
      
    <div class="footer">
        <div class="info">
          <img src="./img/logo_semur.png" class="logo-semur" alt="logo" />
          <a href="#">Завод. Котайкский район, Г. Егвард<br /> Ереванское шоссе 118
          </a>
          <a href="">033 51 55 55, 033 52 55 55</a>
          <a href="mailto: info@semur.am" target="blank">info@semur.am</a>
          <div class="resp-menu">
              <ul class="resp-menu-ul">
                <li><a href="Apranq-ru.html">Производства</a></li>
                <li><a href="About-ru.php">О нас</a></li>
                <li><a href="Masnachyux-ru.html">Филиалы</a></li>
                <li><a href="Contact-ru.html">Связь</a></li>
              </ul>
          </div>
          <div class="resp-hr"></div>


          <p class="copy">Семур энд Ко © 2022</p>
          <p class="copy1">Все права защищены.</p>
        </div>
        <div class="container-footer">
          <div class="footer-items">
            <a>Производства</a>
            <a href="Apranq.html">Плитка</a>
            <a href="Apranq.html">Пластина</a>
            <a href="Apranq.html">Профнастил</a>
            <a href="Apranq.html">Профиль</a>
            <a href="Apranq.html">Сетка</a>
            <a href="Apranq.html">Изделия из металла</a>
            <a href="Apranq.html">Комплектующие детали крыши</a>
            <a href="Apranq.html">другое</a>
          </div>
          <div class="footer-items footer-info">
            <a>Еще</a>
            <a href="About-ru.php" class="active">О нас</a>
            <a href="Masnachyux-ru.html">Филиалы</a>
            <a href="Blog-ru.html">Блог</a>
            <!-- <a href="">Գաղտնիության քաղաքականություն</a> -->
            <a href="Hashvetvutyun-ru.html">Отчет</a>
            <a href="Aparik-ru.html">Продажа в кредит</a>
            <a href="Contact-ru.html">Связь</a>
          </div>
          <div class="resp-footer-line"></div>

          <div class="footer-items footer-img">
            <div class="social">
              <p>Следите за нами</p>
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
    
    <script src="js/main.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>
