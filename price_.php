<?php session_start();
include_once('php/module_fun.php');
?>

<!DOCTYPE html>
<html class="no-js" lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Прейскурант</title>
        <meta name="description" content="СПА КРАСНОЯРСК">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="assets/css/style_price.css">

    </head>
    <body>
   <table id="myTable">
  <caption>Прейскурант цен на услуги СПА салона</caption>
  <?php
  $namePrice = array(1 => "Уход за лицом", "Маникюр", "Педикюр", "Массаж", "Солярий", "Эпиляция", "Пилинг", "Спа-процедуры", "Комплексные программы", "Парикмахерские услуги", "Макияж", "Уход за волосами", "Парафинотерапия", "Ароматерапия", "Водные процедуры", "Маски", "Антицеллюлитные программы", "Фитнес", "Коррекция бровей", "Удаление родинок", "Татуаж", "Уход за руками и ногами", "Растяжки", "Моделирование фигуры", "SPA для двоих");
  $price = array(1 => 2000, 1000, 1500, 2500, 500, 3000, 3500, 4000, 6000, 3500, 3000, 4000, 1500, 5000, 2000, 2500, 4500, 5000, 2000, 2500, 4000, 3000, 5000, 5500, 12000);
  ?>
  <?php if(!getCurrentUser()) {?>
    <thead>
      <tr>
        <th>№ п/п</th>
        <th>Наименование услуги</th>
        <th>Цена, руб.</th>
      </tr>
    </thead>
    <tbody>
      <?php for ($i = 1; $i <= count($namePrice); $i++) {?>
        <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo $namePrice[$i]; ?></td>
          <td><?php echo $price[$i]; ?></td>
        </tr>
      <?php } ?>
    </tbody>
  <?php } else {?>
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
      <?php for ($i = 1; $i <= count($namePrice); $i++) {?>
        <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo $namePrice[$i]; ?></td>
          <td><?php echo $price[$i]; ?></td>
          <td><?php echo $price[$i]*0.03; ?></td>
          <td><?php echo $price[$i]*0.97; ?></td>
        </tr>
      <?php } ?>
    </tbody>
  <?php } ?>
</table>

        <script src="assets/js/script.js"></script>
		<script src="assets/js/timer.js"></script>
    </body>
</html>

