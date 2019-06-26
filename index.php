<?php
include 'controllers/Inheritance.php';

$parts = new Body(); # An Object of Employee
echo $parts->chest()."\n";
echo $parts->stomach()."\n";
echo $parts->eyes()."\n";
echo $parts->ears()."\n";
