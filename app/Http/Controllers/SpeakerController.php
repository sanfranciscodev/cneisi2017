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
        $banchio = new Speaker('leandro-banchio', 'Leandro Banchio');
        $banchio->setPicture('https://avatars2.githubusercontent.com/u/3058217?v=3&s=466');
        
        $frutos = new Speaker('carlos-frutos', 'Carlos Frutos');
        $frutos->setPicture('https://avatars0.githubusercontent.com/u/6273450?v=3&s=466');
        
        $this->speakers[$banchio->getSlug()] = $banchio;
        $this->speakers[$frutos->getSlug()] = $frutos;
    }
    
    public function show(string $slug)
    {
        $speaker = $this->speakers[$slug];
        
        return view('speakers.show', ['speaker' => $speaker]);
    }
}