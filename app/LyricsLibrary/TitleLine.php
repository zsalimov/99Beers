<?php

namespace App\LyricsLibrary;

class TitleLine
{
	public $line;
	public $numEol;
	
	function __construct($line, $numEol)
	{
		$this->line = $line;
		$this->numEol = $numEol;
	}
	
	function PrintOut()
	{
		echo ' <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white"> ' . $this->line . "</h2>";
		
		for ($i = 0; $i < $this->numEol; ++$i)
			echo "<br />";
	}
}

