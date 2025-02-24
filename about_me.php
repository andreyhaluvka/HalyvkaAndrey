<?php
include "portfolio_db.php";
$me = getImages("main")[0]['src'];
$languages = getLanguages();
?>

<!DOCTYPE HTML>
<html>
<link rel="stylesheet" href="stylesMI.css">

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">s
  <title> обо мне </title>



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
      <button> <a href="index.php" class="btn btn1">Главная</a> </button>
      <button> <a href="city.php" class="btn btn2">Мой город</a></button>
      <button> <a href="about_me.php" class="btn btn3">Информация обо мне</a> </button>
      <button> <a href="contacts.php" class="btn btn4">Связь со мной</a> </button>
    </div>



    <div>

      <table style="width:100%">
        <tr>
          <th><a href="https://vk.com"> <img src="<?php echo $me ?>" width=”50px” class="l"> </a></th>
          <th>
            <h1 class="c"> Халявка Андрей Григорьевич </h1>
          </th>
        </tr>
        <tr>
          <thcolspan="2">
            <p class="z"><?php echo $languages[0]['name'] ?></p>
            <div class="container">
              <div class="skills html"><?php echo $languages[0]['level'] ?></div>
            </div>

            <p class="z"><?php echo $languages[1]['name'] ?></p>
            <div class="container">
              <div class="skills css"><?php echo $languages[1]['level'] ?></div>
            </div>

            <p class="z"><?php echo $languages[2]['name'] ?></p>
            <div class="container">
              <div class="skills js"><?php echo $languages[2]['level'] ?></div>
            </div>

            <p class="z"><?php echo $languages[3]['name'] ?></p>
            <div class="container">
              <div class="skills php"><?php echo $languages[3]['level'] ?></div>
            </div>
            <th>
        </tr>

    </div>

  </nav>

  <footer>

  </footer>
</body>

</html>