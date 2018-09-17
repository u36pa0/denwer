<?php
require('header');
?>
<html>
<head>
<title>Автозапчасти от Бога - Результаты заказа</title>
</head>
<body>

<h1>Лабораторная работа №1 по теме "Передача данных из формы в основную программу и их последующая обработка"</h1>

<h2>Автозапчасти от Бога</h2>
<h3>Результаты заказа</h3>
<?php
	echo '<p>Заказ обработан в ';
	echo date('H:i, jS F');
	echo '</p>';
	
	//создать короткие имена переменных
	$tireqty = $_POST['tireqty'];
	$oilqty = $_POST['oilqty'];
	$sparkqty = $_POST['sparkqty'];
	$JESUS = $_POST['JESUS'];
	$answer = $_POST['answer'];
	echo '<p> Список вашего заказа: </p>';
	echo $tireqty. ' автопокрышек</br>';
	echo $oilqty. ' бутылок с маслом</br>';
	echo $sparkqty. ' свечей зажигания</br>';
	echo $JESUS. ' православных свечей</br>';
	echo $answer; 
	$totalqty = 0;
	$totalqty = $tireqty + $oilqty + $sparkqty + $JESUS;
	echo 'Заказано товаров: ' .$totalqty.'</br>';
	
	$totalamount = 0.00;
	
	define('TIREPRICE', 100);
	define('OILPRICE', 10);
	define('SPARKPRICE', 4);
	define('JESUSPRICE', 1000);
	
	$totalamount = $tireqty * TIREPRICE
		+ $oilqty * OILPRICE
		+ $sparkqty * SPARKPRICE
		+ $JESUS * JESUSPRICE;
	echo 'Итого: $'.number_format($totalamount,3).'</br>';
	
	$taxrate = 0.10; //местный налог 10%
	$totalamount = $totalamount * (1+$taxrate);
	echo 'Всего, включая налог с продаж: $'. number_format($totalamount,2).'</br>';
?>

На вопрос как вы нашли нашу компанию был получен ответ: <?php echo $answer; ?>
</body>
</html>
<?php
require('footer');
?>
