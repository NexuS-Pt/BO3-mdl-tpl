<?php

$mdl = bo3::c2r([
	
], bo3::mdl_load("templates/home.tpl"));

/*
	bellow you can see an example for breadcrumb.
	only add it just if you want update breadcrumb.
	we don't recommend to usi
*/
$breadcrumb = [
	["name" => "Add", "link" => "{c2r-path-bo}/{c2r-lg}/{c2r-module-folder}/add/"]
];

/*
	You need to put c2r for import works like: {c2r-plg-example}
	bo3::importPlg("example");
*/

include "pages/module-core.php";
