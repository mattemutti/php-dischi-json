<?php

/*
1 Creare un file index e inserire in php un array contenente i dati dei dischi.
2 importare bootstrap, vuejs e axiom
3 stampare in pagina la lista dei dischi e le caratterisctiche dentro all'array presente in php
4 spostare i dati in un fikle json
5 riempire le copertine co i dati provenienti però dal file json e non più dall'array di index.php
6 fare dello stile delle copertine
*/

/*
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
header('Content-type: application/json');

echo $json_string;
*/
// SPOSTATO NEL FILE api.php ALTRIMENTI DEVO VEDERLE IN QUESTA PAGINA E NON VEDO IL SITO.



?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dischi</title>
	<!-- cdn bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

	<link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
	<div id="app">

		<div class="container">
			<div class="row">
				<div class="col-4">
					<h3>

					</h3>
				</div>
			</div>
		</div>



	</div>

	<!-- cdn axios -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js"
		integrity="sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- cdn bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
		crossorigin="anonymous"></script>
	<!-- cdn vuejs -->
	<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
	<script src="./assets/js/app.js"></script>
</body>

</html>