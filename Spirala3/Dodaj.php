<?php
if(isset($_POST ['dodaj'])){
	
	
	$destinacije=simplexml_load_file('destinacije.xml');
	$destinacija=$destinacije->addChild('destinacija');
	$destinacija->addAttribute('name', $_POST['name']);
	$destinacija->addChild('tekst', $_POST['tekst']);
	$destinacija->addChild('slika', $_POST['slika']);
	file_put_contents('destinacije.xml', $destinacije->asXML());
	header('location: dodavanje.php');
	
	
}


?>

<form method="post" >
<table cellpadding="2" cellspacing="2">
<tr>
<td> Naziv lokacije </td>
<td> <input type="text" name="name"> </td>
</tr>
<tr>
<td> Dodatne informacije </td>
<td> <input type="text" name="tekst"> </td>
</tr>
<tr>
<td> Url slike</td>
<td> <input type="text" name="slika"> </td>
</tr>
<tr>
<td> &nbsp; </td>
<td> <input type="submit" name="dodaj" value="Dodaj"> </td>
</tr>
</table>
</form>

