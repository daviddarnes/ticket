<?php

// Super powers go in here.

function pluralise($amount, $str, $alt = '') {
	return intval($amount) === 1 ? $str : $str . ($alt !== '' ? $alt : 's');
}

function pluralise_cat($amount, $str, $alt = '') {
	return intval($amount) === 1 ? $str . 'y' : $str . ($alt !== '' ? $alt : 'ies');
}

?>