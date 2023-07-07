<?php

include "ArrayList.php";

$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);
$listInteger->add(4);
$listInteger->add(5);

var_dump($listInteger->getList());

var_dump($listInteger->get(-2));