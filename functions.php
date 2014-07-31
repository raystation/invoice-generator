<?php 

function get_date($var=NULL) {
	date_default_timezone_set("America/Los_Angeles");
	$gd=getdate();
	
	if ($var=="date") { echo "$gd[month] $gd[mday], $gd[year]" ;}
	if ($var=="time") { echo "$gd[hours]:$gd[minutes]:$gd[seconds]" ;}
	if ($var=="year") { echo "$gd[year]" ;}
	if ($var=="day") { echo "$gd[weekday]" ;}
}

function html($tag,$content) {
	echo "<$tag>$content</$tag>";
}

function downcase_space($string){
	$string = str_replace(" ", "-", $string);
	$string = strtolower($string);
	return $string;
}