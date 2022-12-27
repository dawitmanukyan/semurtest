<?php 
  require "./config/config.php";
  $info = $mysql -> query("SELECT * FROM `home_page_info` WHERE `lang`='ru'");
  $asr = $mysql -> query("SELECT * FROM `assortment` WHERE `lang`='ru'");
  $mysql -> close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/mainAll.css">
    <link rel="stylesheet" href="./css/glxavorMedia768.css">
    <link rel="stylesheet" href="./css/respmenufooter768.css">
    <link rel="stylesheet" href="./css/glxavorMedia375.css">
    <link rel="stylesheet" href="./css/respmenufooter375.css">
    <link rel="icon" href="./img/Logo.png">
        
    <title>Главная</title>
</head>

<body>
  <div class="header" id="header">
    <a href="index-ru.php" class="logo" id="logo"></a>
    <a
      href="#"
      class="toggle-button"
      id="toggle-button"
      onclick="toggleNav(this)"
    >
      <span class="bar1"></span>
      <span class="bar2"></span>
      <span class="bar3"></span>
    </a>      <ul class="navbar" id="navbar">
      <li><a href="Artadranq-ru.html" class="resp-neu-li">Ассортимент</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="About-ru.html" >О нас</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Masnachyux-ru.html">Ветви</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Blog-ru.php">Блог</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Contact-ru.html" >Контакт</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Hashvich-ru.html">Онлайн калькулятор</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>

      <div class="resp-menu-line"></div>
      <div class="resp-lang-menu">
        <a href="index.html">Հայ</a>
        <a href="index-en.html">EN</a>
        <a href="index-ru.html" class="active">РУ</a>
      </div>
    </ul>

    <div class="language resp-lang">
      <a href="index.html">Հայ</a>
      <a href="index-en.html">EN</a>
      <a href="index-ru.html" class="active">РУ</a>
    </div>
    <div class="icons">
      <img class="search_icon" src="./img/search.png" alt="" id="search" />
      <img class="heart_icon" id="heart_icon" src="./img//heart.png" alt="" />
    </div>
    <div class="line" id="line"></div>
    <div class="call" id="call">
      <a class="phone">+374 33 51 55 55</a>
      <a href="tel:+37433515555" class="order-call">Заказать звонок</a>
    </div>
  </div>
  <div class="search-box hidden" id="search-box">
      <div class="search-label">Поиск</div>
      <div class="search-input-wrapper">
        <input class="search-input" type="text" name="" id="search-input" />
        <img id="search_icon-active" src="./img/activ-search.png" alt="" />
     </div>
    <div class="search-icon-close" id="close-search"><img src="./img/search-icon-close.png" alt=""></div>
  </div>
      <div class="second-menu">
          <div class="second-menu-navigation">
              <a href="Apranq-ru.php" class="sub-menu-a">Плитка</a>
              <a href="Apranq-ru.php" class="sub-menu-a">Пластина</a>
              <a href="Apranq-ru.php" class="sub-menu-a">Профиль</a>
              <a href="Apranq-ru.php" class="sub-menu-a">Пронастил</a>
              <a href="Apranq-ru.php" class="sub-menu-a">Сетки</a>
              <a href="Apranq-ru.php" class="sub-menu-a">Изделия из металла</a>
              <a href="Apranq-ru.php" class="sub-menu-a">Детали, завершающие крышу</a>
              <a href="Apranq-ru.php" class="sub-menu-a">Другой</a>
          </div>
          <div class="language">
              <a href="index.php">Հայ</a>
              <a href="index-en.php">EN</a>
              <a href="index-ru.php" class="active">РУ</a>
          </div>
      </div>
    <div class="container-fluid slider">
        <div class="slider-row" style="left: 0">
                <?php 
                  foreach($info as $value) {
                    echo '
                    <div class="slider-item">
                      <div class="slider-title">
                        '.$value['title'].'
                      </div>
                      <div class="slider-text">
                        '.$value['info'].'
                      </div>
                      <a href="About.php"><button class="slider-button">Узнать больше</button></a>
                    </div>
                    ';
                  }
                ?>
        </div>
        <div class="arrow arrow-left"><img src="./img/tesakani/arrow-left.png" alt="arrow-left" class="arrowl"></div>
        <div class="arrow arrow-right"><img src="./img/tesakani/arrow-right.png" alt="arrow-right" class="arrowl"></div>
        <div class="slider-dots"></div>
    </div>

    <div class="title">
        Рекомендуемые товары
    </div>
 

        
    <div class="product-list">
    <?php 
        foreach($asr as $value){
          echo '<div class="product-'.$value['id'].'">
          <a href="Product.php?type='.$value['type'].'" style="text-decoration: none;"><div class="product-items-text">'.$value['type'].'</div></a>
      </div>';
        }
      ?>
    </div>


    <div class="glxavor-orderCall">
        <form action="/action_page.php" class="container-form-order">
          <h1 class="oder-call">Заказать звонок</h1>
            <div class="oder-call-text">Если вы не уверены в ассортименте продукции или у вас есть вопросы,
                заполните поля ниже<span class="resp375"> и наши сотрудники свяжутся с вами и помогут найти оптимальное решение.</span></div>
               <div class="inputBox-call">
                <div class="inputBox">
                    <span>Имя</span>
                    <input type="text" required>
                </div>
                <div class="inputBox A-order">
                    <span>Телефонный номер</span>
                    <input type="text" required>
                </div>
                <div class="inputBox B-order">
                    <button class="btn-callOrder">Отправить</button>
                </div>
               </div>
               
        </form>
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
          <a href="#"
            >Фабрика, Котайкский марз, г. Егвард,<br />
            Ереванян шоссе, ул. 118:
          </a>
          <a href="">033 51 55 55, 033 52 55 55</a>
          <a href="mailto: info@semur.am" target="blank">info@semur.am</a>
          <div class="resp-menu">
            <ul class="resp-menu-ul">
              <li><a href="Aparanq.html">Товар</a></li>
              <li><a href="About.html">О нас</a></li>
              <li><a href="Masnachyux.html">Ветви</a></li>
              <li><a href="Contact.html">Контакт</a></li>
            </ul>
          </div>
          <div class="resp-hr"></div>
  
          <p class="copy">Семур анд Ко © 2022</p>
          <p class="copy1">Все права защищены.</p>
        </div>
        <div class="container-footer">
          <div class="footer-items">
            <a>Товар</a>
            <a href="Apranq.html">Плитка</a>
            <a href="Apranq.html">Пластина</a>
            <a href="Apranq.html">Пронастил</a>
            <a href="Apranq.html">Профиль</a>
            <a href="Apranq.html">Сетки</a>
            <a href="Apranq.html">Изделия из металла</a>
            <a href="Apranq.html">Детали, завершающие крышу</a>
            <a href="Apranq.html">Другой</a>
          </div>
          <div class="footer-items footer-info">
            <a>Ավելին</a>
           <a href="About.html" class="about">О нас</a>          
            <a  href="Masnachyux.html" class="masnachyux">Ветви</a>
            <a href="Blog.html">Semur блог</a>
            <a href="#">Политика конфиденциальности</a>
            <a href="Hashvetvutyun.html">Отчет</a>
            <a href="Aparik.html"> Продажа в кредит</a>
            <a href="Contact.html">Контакт </a>
          </div>
          <div class="resp-footer-line"></div>
  
          <div class="footer-items footer-img">
            <div class="social">
              <p>Подписывайтесь на нас</p>
              <a target="_blank" href="https://www.instagram.com/semur.co/">
                <img src="./img/Instagram Icon.png" alt="Instagram" />
              </a>
              <a
                target="_blank"
                href="https://www.facebook.com/pages/category/Building-Materials/Semur-Co-118059506271527/"
              >
                <img src="./img/Facebook Icon.png" alt="Facebook" />
              </a>
              <a
                target="_blank"
                href="https://www.youtube.com/channel/UCRKkZQOBU7hrXgYhSgnRBNg"
              >
                <img src="./img/Youtube Icon.png" alt="Youtube" />
              </a>
            </div>
          </div>
        </div>
      </div>
   
    <script src="./js/main.js"></script>
    <script src="./js/style.js"></script>
</body>

</html>
