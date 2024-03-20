<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LyricsLibrary\line;
use App\LyricsLibrary\TitleLine;
use App\LyricsLibrary\SpecialLine;
use App\LyricsLibrary\Lyrics;

class LyricsController extends Controller
{
    //
    
    public function index() {
        $data = array(
            new TitleLine("99 Bottles of Beer", 1),
            new SpecialLine("[0] of beer on the wall, [0] of beer.<br />
        Take one down and pass it around, [1] of beer on the wall.", 99, 1, "bottle", 2),
            new Line("No more bottles of beer on the wall, no more bottles of beer.<br />
        Go to the store and buy some more, 99 bottles of beer on the wall.", 1)
        ); 
        
        $lyrics = new Lyrics($data);

       return view('welcome', ['lyrics' => $lyrics]);

    }
}

