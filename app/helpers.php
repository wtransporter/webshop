<?php

function currentUser()
{
    return auth()->user();
}

function formatedDate($date)
{
	$formated =  \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date);
	return date_format($formated, 'd.m.Y');
}

function formatedPrice($price)
{
	return number_format($price, 2, ",", ".");
}

function mySqlPrice($price)
{
	return number_format((float) $price, 2, ".", "");
}

function noImage()
{
	return '/images/no-image.png';
}

function lPad($value, $count = 6, $character = '0')
{
	return str_pad($value, $count, $character, STR_PAD_LEFT);
}