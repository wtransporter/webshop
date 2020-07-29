<?php

function currentUser()
{
    return auth()->user();
}

function formatedDate($date)
{
	return date_format($date, 'd.m.Y H:i:s');
}

function formatedPrice($price)
{
	return number_format($price,2,',','.');
}

function noImage()
{
	return '/images/no-image.png';
}