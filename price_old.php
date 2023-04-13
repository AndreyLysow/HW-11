<?php session_start();
include_once('php/module_fun.php');
?>

<!DOCTYPE html>
<html class="no-js" lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>SPARO</title>
        <meta name="description" content="СПА КРАСНОЯРСК">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="assets/css/style_price.css">

    </head>
    <body>
    <table id="myTable">
  <caption>Прейскурант цен на услуги СПА салона</caption>
  <thead>
    <tr>
      <th>№ п/п</th>
      <th>Наименование услуги</th>
      <th>Цена, руб.</th>
      <th>Скидка, руб.</th>
      <th>Итого со скидкой, руб.</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td></td>
      <td>Массаж шеи и плеч</td>
      <td>1500</td>
      <td id="input"></td>
      <td></td>
    </tr>

    <tr>
      <td></td>
      <td>Ароматерапия</td>
      <td>2000</td>
      <td id="input"></td>
      <td></td>
    </tr>

    <tr>
      <td></td>
      <td>Гидромассаж</td>
      <td>2500</td>
      <td id="input"></td>
      <td></td>
    </tr>

    <tr>
      <td></td>
      <td>СПА-программа для релаксации</td>
      <td>5000</td>
      <td id="input"></td>
      <td></td>
    </tr>

    <tr>
      <td></td>
      <td>Тайский массаж</td>
      <td>4000</td>
      <td id="input"></td>
      <td></td>
    </tr>

    <tr>
      <td></td>
      <td>Боди-кератин</td>
      <td>1500</td>
      <td id="input"></td>
      <td></td>
    </tr>

    <tr>
      <td></td>
      <td>Парафинотерапия</td>
      <td>3000</td>
      <td id="input"></td>
      <td></td>
    </tr>
    
    <tr>
      <td></td>
      <td>Обертывание</td>
      <td>4000</td>
      <td id="input"></td>
      <td></td>
    </tr>

    <tr>
      <td></td>
      <td>Педикюр</td>
      <td>2500</td>
      <td id="input"></td>
      <td></td>
    </tr>
    
    <tr>
      <td></td>
      <td>Комплекс ухода за лицом</td>
      <td>4500</td>
      <td id="input"></td>
      <td></td>
    </tr>

    <tr>
      <td></td>
      <td>СПА-программа "Омоложение"</td>
      <td>6000</td>
      <td id="input"></td>
      <td></td>
    </tr>

    <tr>
      <td></td>
      <td>СПА-программа для мужчин</td>
      <td>5500</td>
      <td id="input"></td>
      <td></td>
    </tr>

    <tr>
      <td></td>
      <td>Маски для лица</td>
      <td>2500</td>
      <td id="input"></td>
      <td></td>
    </tr>

    <tr>
      <td></td>
      <td>СПА-программа "Расслабление"</td>
      <td>5000</td>
      <td id="input"></td>
      <td></td>
    </tr>

    <tr>
      <td></td>
      <td>Пиллинг тела</td>
      <td>3500</td>
      <td id="input"></td>
      <td></td>
    </tr>

    <tr>
      <td></td>
      <td>Релаксационная ванна</td>
      <td>3000</td>
      <td id="input"></td>
      <td></td>
    </tr>

    <tr>
      <td></td>
      <td>Фитнес-зал</td>
      <td>2000</td>
      <td id="input"></td>
      <td></td>
    </tr>

    <tr>
      <td></td>
      <td>Йога-занятия</td>
      <td>2500</td>
      <td id="input"></td>
      <td></td>
    </tr>

    <tr>
      <td></td>
      <td>Антицеллюлитный массаж</td>
      <td>3500</td>
      <td id="input"></td>
      <td></td>
    </tr>

    <tr>
      <td></td>
      <td>Гидромассажный бассейн</td>
      <td>3000</td>
      <td id="input"></td>
      <td></td>
    </tr>

    <tr>
      <td></td>
      <td>Аквааэробика</td>
      <td>2500</td>
      <td id="input"></td>
      <td></td>
    </tr>

    <tr>
      <td></td>
      <td>СПА-программа "Аква-релакс"</td>
      <td>5500</td>
      <td id="input"></td>
      <td></td>
    </tr>
    
    <tr>
      <td></td>
      <td>Сауна</td>
      <td>2500</td>
      <td id="input"></td>
      <td></td>
    </tr>

    <tr>
      <td></td>
      <td>Хамам</td>
      <td>3500</td>
      <td id="input"></td>
      <td></td>
    </tr>

  </tbody>
</table>
        <script src="assets/js/script.js"></script>
		<script src="assets/js/timer.js"></script>
    </body>
</html>
