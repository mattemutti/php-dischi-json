<?php

/*
1 Creare un file index e inserire in php un array contenente i dati dei dischi.
2 importare vuejs e axiom
3 stampare in pagina la lista dei dischi e le caratterisctiche dentro all'array
4 spostare i dati in un fikle json
5 riempire le copertine co i dati provenienti però dal file json e non più dall'array di index.php
6 fare dello stile delle copertine
*/


$dischi = [
	[
		'title' => 'New Jersey',
		'author' => 'Bon Jovi',
		'year' => 1988,
		'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
		'genre' => 'Rock'
	],
	[

		'title' => 'Live at Wembley 86',
		'author' => 'Queen',
		'year' => 1992,
		'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg',
		'genre' => 'Pop'
	],
	[
		'title' => 'Ten\'s Summoner\'s Tales',
		'author' => 'Sting',
		'year' => 1993,
		'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg',
		'genre' => 'Pop'
	],
	[
		'title' => 'Steve Gadd band',
		'author' => 'Steve Gadd Band',
		'year' => 2018,
		'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg',
		'genre' => 'Jazz'
	],
	[
		'title' => 'Brave new World',
		'author' => 'Iron Maiden',
		'year' => 2000,
		'poster' => 'https://upload.wikimedia.org/wikipedia/en/0/03/Iron_Maiden_-_Brave_New_World.jpg',
		'genre' => 'Metal'
	],
	[
		'title' => 'One more car, one more rider',
		'author' => 'Eric Clapton',
		'year' => 2002,
		'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg',
		'genre' => 'Rock'
	],
];

$json_string = json_encode($dischi);

/*
NB
*/
//se attivo header mi scarica il file json
//header('Content-type: applicatio/json');


//echo $json_string;


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dischi</title>
</head>

<body>

	<h1><?= $dischi[0]['title'] ?></h1>






</body>

</html>