<?php

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
		echo "<b>" . $this->line . "</b>";
		
		for ($i = 0; $i < $this->numEol; ++$i)
			echo "<br />";
	}
}

