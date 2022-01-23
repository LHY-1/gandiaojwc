<?php
$link = new mysqli('http://8.140.163.128/','users','123456','users');
mysqli_set_charset($link, 'utf8');
if ($link->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$ranking = "kano_rank";//排行榜表名
