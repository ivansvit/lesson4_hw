<?php

$product = [
	'id' => 5,
	'images' => [

		[ 
			'id' => 1,
			'url' => 'http://test.com/img/1.jpg',
			'sizes' => ['small' => '100x100', 'medium' => '200x200']

		],
		[
			'id' => 2,
			'url' => 'http://test.com/img/2.jpg',
			'sizes' => ['medium' => '200x300', 'large' => '500x600']

		]
	],
	
	'categories' => [
		[
			'id' => 1,
			'name' => 'Tablets',
		],
		[
			'id' => 2,
			'name' => 'Phones',

			]
		]
	];

var_export ($product ['images'][1]['sizes']['large']);


