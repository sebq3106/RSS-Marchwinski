<?php

$servername = 'mysql-660842.vipserv.org';
$dbUsername = 'sebq_rss';
$dbPassword = 'WSB111';
$dbName = 'sebq_rss';

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if(!$conn) {
	die("Błąd połączenia z bazą danych: ".mysqli_connect_error());
}