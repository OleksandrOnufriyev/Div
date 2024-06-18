<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Опис мотоцикла</title>
    <link rel="stylesheet" href="description.css">
</head>
<body>
<?php
// Підключення до бази даних
$HOST = 'localhost';
$USER = 'oleksandr34';
$PASS = 'S78345678sd';
$DB = 'oleksandr23';
$conn = mysqli_connect($HOST, $USER, $PASS, $DB);
mysqli_set_charset($conn, "utf8");

// Перевірка підключення
if ($conn->connect_error) {
    die("Помилка підключення до бази даних: " . $conn->connect_error);
}

// Запит до бази даних для отримання даних про мотоцикл (приклад)
$sql = "SELECT * FROM motorcycles WHERE id = 1"; 

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $description = $row['description'];
    $specifications = $row['specifications'];
    // Виведення інформації про мотоцикл
?>
<header>
    <img src='img/logo.jpg' >
    <p style='float: right'>
        <a href='https://www.instagram.com/_sasha_on_?igsh=d2Z3OGdvazc4cW9v&utm_source=qr'><img src='img/inst.jfif' width='50'></a>
        <a href='https://t.me/+iveBurhgW6o1NTgy'><img src='img/tg.jfif' width='50'></a>
    </p>
    <nav>
        <ul>
            <li><a style="color: red;" href='Moto.html'>Мотоцикли</a></li>
            <li><a href='dostavka.html'>Доставка та оплата</a></li>
            <li><a href='znyzka.html'>Знижка</a></li>
            <li><a href='aktsiyi.html'>Акціїї</a></li>
            <li><a href='https://mototek.com.ua/uk/catalog/equipment-accessories'>Запчастини</a></li>
            <li><a href='https://mototek.com.ua/uk/contacts'>Контакти</a></li>
            <li><a href='https://uk.wikipedia.org/wiki/%D0%A1%D0%BF%D0%B8%D1%81%D0%BE%D0%BA_%D0%B2%D0%B8%D1%80%D0%BE%D0%B1%D0%BD%D0%B8%D0%BA%D1%96%D0%B2_%D0%BC%D0%BE%D1%82%D0%BE%D1%86%D0%B8%D0%BA%D0%BB%D1%96%D0%B2'>Виробники</a></li>
            <li><a href='about.html'>Про нас</a></li>
        </ul>
    </nav>
</header>
<div id="description-page">
    <div class="product-info">
        <h1>Forte FT250GY-CBA</h1>
		<div class="product-image">
            <img src="https://images.prom.ua/4487469107_w640_h640_4487469107.jpg" alt="Фото мотоцикла">
        </div>
        <div class="product-description">
            <h1>Опис мотоцикла</h1>
            <p><?php echo $description; ?></p>
        </div>
        <!-- Характеристики продукту -->
        <div class="product-specs">
            <h2>Характеристики</h2>
            <p><?php echo $specifications; ?></p>
        </div>
		
    </div>
</div>
<?php
} else {
    echo "Дані про мотоцикл не знайдено";
}

$conn->close();
?>
</body>
</html>
