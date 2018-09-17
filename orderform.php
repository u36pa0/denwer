<?php
require('header');
?>
<html>
<head>
<title>Автозапчасти от Бога</title>
</head>
<body>

<h1>Лабораторная работа №1 по теме "Передача данных из формы в основную программу и их последующая обработка"</h1>

<h2>Автозапчасти от Бога</h2>
<h3>Форма заказа</h3>

<form action="processorder.php" method=post>
<table border=0>
<tr bgcolor=#cccccc>
	<td width=150>Товар</td>
	<td width=15>Количество</td>
</tr>
<tr>
	<td>Автопокрышки</td>
	<td align="center"><input type="text" name="tireqty" size="3" maxlength="3"></td>
</tr>
<tr>
	<td>Машинное масло</td>
	<td align="center"><input type="text" name="oilqty" size="3" maxlength="3"></td>
</tr>
<tr>
	<td>Свечи зажигания</td>
	<td align="center"><input type="text" name="sparkqty" size="3" maxlength="3"></td>
</tr>
<tr>
	<td>Православные свечи</td>
	<td align="center"><input type="text" name="JESUS" size="3" maxlength="3"></td>
</tr>
<tr>
	<td>Как вы нашли компанию "Автозапчасти от Бога"?</td>
	<td><select name="answer">
			<option value = "Regular client">Regular client
			<option value = "TV-commercial">TV-commercial
			<option value = "PhoneBook">PhoneBook
			<option value = "Advice">Advice
		</select>
	</td>
</tr>
<tr>
	<td colspan="2" align="center"><input type="submit" value="Отправить заказ"></td>
</tr>
</table>
</form>
</body>
</html>
<?php
require('footer');
?>
