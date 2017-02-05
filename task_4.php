<?php
$nul = $_GET['nul'];
$uno = $_GET['uno'];
$null = $_GET['null'];
$one = $_GET['one'];
$two = $_GET['two'];
$nula = $_GET['nula'];
$edno = $_GET['edno'];
$dve = $_GET['dve'];


$numbers = array(
					 $nul => array(
					 	$null => 5, 
					 	$one => 3,
					 	$two => 2),
					 $uno => array(
					 	$nula =>1,
					 	$edno =>6,
					 	$dve => 9)
						  );
echo $numbers[$uno][$dve];