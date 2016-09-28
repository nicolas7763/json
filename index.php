<!DOCTYPE html>
<html>
<head>
	<title>Json</title>
</head>
<body>
<table border="1">
<?php
$frends =array('frend1' =>array(
'firstName' => 'Ivan',
'lastName' => 'Ivanov',
'address' => 'Moscow city',
'phoneNumber' => '812 123-1234'),
	'frend2' => array(
'firstName' => 'Sidor',
'lastName' => 'Sidorov',
'address' => 'Minsk',
'phoneNumber' => '812 154-1974'),
	'frend3' => array(
'firstName' => 'Chell',
'lastName' => 'Jonson',
'address' => 'Canada',
'phoneNumber' => '800 189-1952'),
	'frend4' => array(
'firstName' => 'Mell',
'lastName' => 'Gibson',
'address' => 'New York city',
'phoneNumber' => '801 200-1523'),
	'frend5' => array(
'firstName' => 'Gordon',
'lastName' => 'Freman',
'address' => 'Mexico',
'phoneNumber' => '600 152-2014')	
);
file_put_contents('file.json', json_encode($frends));//создаем файл json
$f = fopen('file.json', 'r');// открываем и читаем 
$data = stream_get_contents($f);//получаем содержимое

$array = json_decode($data, true);
?>
<?php foreach ($array as $key => $value) {?>
<?php foreach ($value as $key => $val) {?>
<tr>
<td><?php echo $key;?></td>
<td><?php echo $val;?></td>
</tr>
<?php } ?>	
<?php } ?>
</table>
</body>
</html>