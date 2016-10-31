<?php
namespace App\Http\Controllers;

use App\Entities\Speaker;

class SpeakerController extends Controller
{
    /**
     * @var Speaker[]
     */
    private $speakers = [];
    
    public function __construct()
    {       
       
    }
    
    public function show(string $slug)
    {
        $speaker = $this->speakers[$slug];
        
        return view('speakers.show', ['speaker' => $speaker]);
    }
}