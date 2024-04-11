<page-news>
<?php
	$url = file_get_contents('https://nis.singidunum.ac.rs');
	/*$url = file_get_contents('https://www.nbs.rs/sr_RS/indeks/');*/
	
	/*preg_match_all('#/<button\b[^>]*>(.*?)<\/button>/s#', $url, $m);
	foreach($m[1] AS $key => $vrednost){
	$url_vesti = $m[1][$key];
	print "<a href=\"{$url_vesti}\">{$vrednost}</a><br>";*/
	
	
	preg_match_all('#<a itemprop="url" href="(.*?)" class="news-item-title url"><h2><b>(.*?)</b></h2></a>#', $url, $m);
	foreach($m[2] AS $key => $vrednost){
	$url_vesti = $m[1][$key];
	print "<a href=\"{$url_vesti}\">{$vrednost}</a><br>";
}
?>
</page-news>




<!--
<form action="/sr_RS/scripts/showcontent/index.html?id=18773" style="margin-bottom:5px" method="post">
    	<input type="hidden" name="title" value="Рад IPS НБС система у фебруару">
		<button class="buttonlink">Рад IPS НБС система у фебруару</button>
		</form>
		
-->