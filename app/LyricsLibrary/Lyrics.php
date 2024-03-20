<?php

namespace App\LyricsLibrary;

class Lyrics
{
	public $lines;
	
	function __construct($lines)
	{
		$this->lines = $lines;
	}
	
	function PrintOut()
	{
		foreach ($this->lines as $line)
			$line->PrintOut();
	}
}

