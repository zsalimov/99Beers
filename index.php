<?php

require_once('lib/helper.php');

$data = array(
	new TitleLine("99 Bottles of Beer", 2),
	new SpecialLine("[0] of beer on the wall, [0] of beer.<br />
Take one down and pass it around, [1] of beer on the wall.", 99, 1, "bottle", 2),
	new Line("No more bottles of beer on the wall, no more bottles of beer.<br />
Go to the store and buy some more, 99 bottles of beer on the wall.", 1)
); 

$lyrics = new Lyrics($data);

include('view/index.php');
