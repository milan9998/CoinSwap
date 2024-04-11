<?php 
/*
$url = file_get_contents('https://nis.singidunum.ac.rs');

preg_match_all('#<a itemprop="url" href="(.*?)" class="news-item-title url"><h2><b>(.*?)</b></h2></a>#', $url, $m);
foreach($m[2] AS $key => $vrednost){
	$url_vesti = $m[1][$key];
	print "<a href=\"{$url_vesti}\">{$vrednost}</a><br>";
}

*/


$page_output = [
	'page_title' => 'News',
	'view' => 'module-home.php'
];

?>