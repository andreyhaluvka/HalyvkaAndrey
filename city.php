<?php
include "portfolio_db.php";
$city = getImages("city");
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="stylesGO.css" />

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Мой Город</title>
</head>

<body>
  <!-- Шапка сайта-->
  <header>
    <section class="wrapper">
      <div class="top">Андрей</div>
      <div class="bottom" aria-hidden="true">Андрей</div>
    </section>
  </header>

  <!-- основная часть -->
  <nav>
    <div class="d">
      <button><a href="index.php" class="btn btn1">Главная</a></button>
      <button><a href="city.php" class="btn btn2">Мой город</a></button>
      <button>
        <a href="about_me.php" class="btn btn3">Информация обо мне</a>
      </button>
      <button><a href="contacts.php" class="btn btn4">Связь со мной</a></button>
    </div>

    <div>
      <input type="radio" id="btn-1" name="toggle" checked />
      <input type="radio" id="btn-2" name="toggle" />
      <input type="radio" id="btn-3" name="toggle" />
      <!--БЛОК УПРАВЛЕНИЯ-->
      <div class="slider-controls">
        <!--ЛЕЙБЛЫ-->
        <label for="btn-1"></label>
        <label for="btn-2"></label>
        <label for="btn-3"></label>
      </div>
      <!--КОНТЕЙНЕР ДЛЯ СЛАЙДОВ-->
      <div class="slider-inner">
        <!--КОНТЕЙНЕР ЛЕНТЫ СЛАЙДОВ-->
        <div class="slider-slides">
          <!--СЛАЙДЫ-->
          <img class="a" src="<?php echo $city[0]['src'] ?>" />
          <img class="a" src="<?php echo $city[1]['src'] ?>" />
          <img class="a" src="<?php echo $city[2]['src'] ?>" />
        </div>
      </div>
    </div>
  </nav>

  <footer></footer>
</body>

</html>