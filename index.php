<?php

$pdo = new PDO("mysql:host=mysql;dbname=docker_test;port=3306", 'root', 'secret');

var_dump($pdo);