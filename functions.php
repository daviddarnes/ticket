<?php

// Super powers go in here.

// Pluralise words if the value equals more than 1
function pluralise($amount, $str, $alt = '') {
	return intval($amount) === 1 ? $str : $str . ($alt !== '' ? $alt : 's');
}

// Pluralise the word 'Category' to 'Categories' if there is more than 1
function pluralise_cat($amount, $str, $alt = '') {
	return intval($amount) === 1 ? $str . 'y' : $str . ($alt !== '' ? $alt : 'ies');
}

?>