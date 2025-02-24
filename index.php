<?php
include "portfolio_db.php";
$main = getImages("main");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Главная</title>
  <link rel="stylesheet" href="styles.css">


  <!-- Заголовок  -->
  <div class="z">
    <section class="wrapper">
      <div class="top"> Андрей </div>
      <div class="bottom" aria-hidden="true"> Андрей </div>
    </section>
  </div>

</head>

<body>

  <!-- Боковые кнопки-->
  <div class="middle">
    <a href="index.php" class="btn btn1">Главная</a>
    <a href="city.php" class="btn btn2">Мой город</a>
    <a href="about_me.php" class="btn btn3">Информация обо мне</a>
    <a href="contacts.php" class="btn btn4">Связь со мной</a>
  </div>

  <section class="slider-count">

    <h1></h1>

    <div class="slider">

      <input type="radio" id="btn-1" name="toggle" checked>
      <input type="radio" id="btn-2" name="toggle">
      <input type="radio" id="btn-3" name="toggle">
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
          <img class="a" src="<?php echo $main[0]['src'] ?>">
          <img src="<?php echo $main[1]['src'] ?>">
          <img src="<?php echo $main[2]['src'] ?>">

        </div>
      </div>

    </div>

  </section>


</body>

</html>

</head>

</html>