 <?php

 if(isset($_GET['action'])){
	$destinacije=simplexml_load_file('destinacije.xml');
	$name=$_GET['name'];
	$index=0;
	$i=0;
	foreach($destinacije->destinacija as $destinacija){
		if($destinacija['name']==$name){
			$index=$i;
			break;
		}
		$i++;
	}
	unset($destinacije->destinacija[$index]);
	file_put_contents('destinacije.xml', $destinacije->asXML());
	}

$destinacije = simplexml_load_file('destinacije.xml');
echo 'Broj proizvoda: '.count($destinacije);
echo '<br> Lista lokacija';
?>


<!DOCTYPE html>

<html>  
<head>
<title> TuristickeDestinacije- Destinacije </title>
<link rel="stylesheet" href="stil.css">
</head>
<body>

<div class="naslovna">
<div class=" slika" >

<img src="slike/Naslovna-1.jpg" alt = "Slika naslovnice">
</div>
</div>
<div class="meni">
  <button class="dropbtn">Dropdown meni</button>
  <div class="opcije">
  

<a href ="index.php" > Naslovna </a> 
<br>


<a href ="dodavanje.php"> Destinacije</a> 


<br>
<a href="Zanimljivosti.php"> Zanimljivosti </a>
<br>

<a href= "Onama.php" > O nama </a>
<br>

<a href="Kontakt.php"> Kontakt </a> 
</div>

</div>

<div class="redDestinacije1">
<div class="kolona1">

<h3> Bosna i Hercegovina </h3>
<p>Postoji mnogo fascinantnih destinacija u cijeloj Bosni i Hercegovini podesnih za sve vrste turista. Ovdje se dobije ono najbolje od svega. Najinteresantnija i najatraktivnija mjesta u Bosni i Hercegovini predstavljaju čudesan spoj kulturnog i prirodnog naslijeđa. Skoro je nemoguće razdvojiti ih, jer su kultura i tradicija ove zemlje procvjetale upravo iz predivne i netaknute prirode.</p>
</div>
</div>
<div class="redDestinacije2">
<div class="kolona1">
<table>


<tr>
<th> </th>

 <th> <a href= "csv.php"> Skini listu destinacija</a>
 </tr>

 <tr>

 <?php 

 
 foreach($destinacije->destinacija  as $destinacija){ ?>
 
 <tr>
 <th> <?php echo $destinacija['name']; ?></th>
 <td> <?php echo $destinacija->tekst; ?> </td>
 <th> <?php echo '<img style="width=50px" src="'.$destinacija->slika.'"alt=greska"/>';?> </th>



 </tr>
 
	 
	 
<?php 	 
	 
 }?>
 </tr>
 
</table>
</div>
</div>










<footer  class="footer" >
 <img src="slike/Naslovna-3.jpg" alt="greska">

<p> Upoznaj okolinu i putuj sa osmijehom!  </p>
<p> putuj@gmail.com </p>

</footer>

</body>


</html>