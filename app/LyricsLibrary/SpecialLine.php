<?php

namespace App\LyricsLibrary;


class SpecialLine
{
	public $start;
	public $end;
	public $post;
	public $numEol;
	public $line;
	
	function __construct($line, $start, $end, $post, $numEol)
	{
		$this->line = $line;
		$this->start = $start;
		$this->end = $end;
		$this->post = $post;
		$this->numEol = $numEol;
	}
	
	function getPost($i)
	{
		if ($i == 0)
			return "no more " . $this->post . "s";
		else if ($i == 1)
			return $i . " " . $this->post;
		
		return $i . " " . $this->post . "s";
	}
	
	function PrintOut()
	{
		for ($i = $this->start; $i >= $this->end; --$i)
		{
			$starReplaced = str_replace("[0]", $this->getPost($i), $this->line);
			$slashReplaced = str_replace("[1]", $this->getPost($i - 1), $starReplaced);
			
			echo $slashReplaced;
			
			for ($j = 0; $j < $this->numEol; ++$j)
				echo "<br />";
		}
	}
}
