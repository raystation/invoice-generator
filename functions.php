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

function money($num,$decimal=2){
	return number_format($num,$decimal);
}

function get_total($breakdown=true,$flatrate=NULL){
	global $projectBreakdown;
	$total=0;

	if ( !is_null($flatrate) ) {
		echo "$".money($flatrate);	
		return;
	}	

	if ($breakdown)
	{
		echo "<table>";
		echo "<tr>";
		echo "<th>Description";
		echo "<th>Hours";
		echo "<th>Rate";
		echo "<th>Total";
		
		foreach ($projectBreakdown as $item) {
			$total=$total+$item["hours"]*$item["rate"];
			echo "<tr>";
			echo "<td>".$item["description"];
			echo "<td>".$item["hours"];
			echo "<td>$".$item["rate"]."/hr";
			echo "<td>$".money($item["hours"]*$item["rate"]);
			echo "</tr>";
		}

		echo "<tr><td><td><td><td class='add-top bold'>$".money($total);
		echo "</table>";
	} 
	else 
	{
		foreach ($projectBreakdown as $item_total) {
			$total = $total + ( $item_total["hours"] * $item_total["rate"] );
		}
		echo "$".money($total);
	}
}

