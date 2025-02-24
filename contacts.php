<?php
include "portfolio_db.php";
$contacts = getContacts();
?>
<!DOCTYPE HTML>
<html>
<link rel="stylesheet" href="stylesCV.css">

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Связь</title>


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



    <div class="m">

      <a href="<?php echo $contacts[0]['vk'] ?>"> <img src="img/socials/vk.png" width=”50px”> </a></th>
      <a href="<?php echo $contacts[0]['inst'] ?>"> <img src="img/socials/inst.png" width=”50px”></a>
      <a href="<?php echo $contacts[0]['tg'] ?>"> <img src="img/socials/tele.png" width=”50px”> </a>
    </div>



  </nav>

  <footer>

  </footer>
</body>

</html>