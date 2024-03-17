<?php
$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = '';          // пароль
$name = 'salon';      // имя базы данных
$link = mysqli_connect($host, $user, $pass, $name);
if (!empty($_GET))
{
    $name = $_GET['name'];
	$phone = $_GET['phone'];
	$date = $_GET['date'];
	$time = $_GET['time'];
    $query = "INSERT INTO appointment SET name='$name', phone='$phone', date='$date', time='$time'";
    mysqli_query($link, $query) or die(mysqli_error($link));
    echo "<script>alert('Заявка успешно отправлена!')</script>";
    header("Refresh: 1; booking.php");
}
?>

<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Запись на приём - Салон красоты</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
	  <div class="header-top">
		<div class="container">
		  <h1 class="logo">
			<a href="index.html">Салон красоты</a>
		  </h1>
		  <nav class="main-nav">
			<ul>
				<li><a href="about.html">О нас</a></li>
				<li><a href="index.html">Услуги</a></li>
				<li><a href="index.html">Сотрудники</a></li>
				<li><a href="index.html">Отзывы</a></li>
				<li><a href="index.html">Контакты</a></li>
				<li><a href="#" class="BookAppointment">Записаться</a></li>
			</ul>
		  </nav>
		</div>
	  </div>
	</header>
    <main>
		<form id="book-appointment-form" method="GET">
		  <label for="name">ФИО:</label>
		  <input type="text" id="name" name="name" required><br>
		  <label for="phone">Телефон (+71111111111):</label>
		  <input type="phone" id="phone" name="phone" pattern="[+]{1}[0-9]{11}" required><br>
		  <label for="date">Дата:</label>
		  <input type="date" id="date" name="date" required><br>
		  <label for="time">Время:</label>
		  <input type="time" id="time" name="time" required><br>
		  <input type="submit" value="Оставить заявку">
		</form>
    </main>
    <footer>
		<div style="display: flex;">
			<div style="flex: 1;">
				<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2992.518473248208!2d37.61749031565217!3d55.7558259793528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b5499f4d1d7e1b%3A0x4f35f9d1b9e1a8!2z0YPQuy4g0JrQsNC90LDRgNCw0YHQutCwINCc0L7QstCw0L3QtdC90LDRgNC60L7QstGB0YHQutC-0LAsINCc0L7QsdCw0Y8g0KHQutCw0Y8sINCc0L7QsdCw0Y8g0KHQutCw0Y8!5e0!3m2!1sru!2sru!4v1677568455850!5m2!1sru!2sru" 
						allowfullscreen="" 	loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			<div>
				<p>г. Ярославль</p>
				<p>+7 999 111-11-11</p>
				<a href="#" class="BookAppointment">Записаться</a>
			</div>
		</div>
    </footer>
</body>
</html>