<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Http\Requests\StoreSpeakerRequest;
use App\Http\Requests\UpdateSpeakerRequest;
use App\Entities\Speaker;
use App\Entities\SpeakerCategory;

class SpeakerController extends Controller
{
    /**
     * Related routes.
     */
    const SPEAKER_ROUTE = 'speaker/';

    /**
     * Related views.
     */
    const SPEAKERS_INDEX_VIEW  = 'speakers.index';
                
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $speakers = Speaker::all();

        return view(self::SPEAKERS_INDEX_VIEW)
            ->with('speakers', $speakers);
    }
}