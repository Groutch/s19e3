<?php
//$pdo = new PDO("mysql:host=localhost;dbname=reunion_island","root","toor",array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
//$pdo = new PDO("mysql:host=den1.mysql1.gear.host;dbname=reunionisle","reunionisle","Gm8O8eP9!Q4-",array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

require_once './vendor/j4mie/idiorm/idiorm.php';
ORM::configure('mysql:host=den1.mysql1.gear.host;dbname=reunionisle');
ORM::configure('username', 'reunionisle');
ORM::configure('password', 'Gm8O8eP9!Q4-');