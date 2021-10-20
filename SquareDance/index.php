<?php
include_once "GenderInterface.php";
include_once "Dance.php";
include_once "SquareDance.php";

$dance1 = new Dance("Hung", GenderInterface::MALE);
$dance2 = new Dance("Nam", GenderInterface::MALE);
$dance3 = new Dance("Hoang", GenderInterface::MALE);
$dance4 = new Dance("Linh", GenderInterface::FEMALE);
$dance5 = new Dance("My", GenderInterface::FEMALE);

$squareDance = new SquareDance();
$squareDance->addDance($dance1);
$squareDance->addDance($dance2);
$squareDance->addDance($dance3);
$squareDance->addDance($dance4);
$squareDance->addDance($dance5);

echo $squareDance->pairDance();