<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Entities\Conference;
use App\Entities\Category;

class ConferenceController extends Controller
{
    /**
     * Related routes.
     */
    const CONFERENCE_ROUTE = 'conference/';

    /**
     * Related views.
     */
    const CONFERENCES_INDEX_VIEW  = 'conferences.index';
    
    /**
     * @var Conference[]
     */
    private $conferences = [];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conferences = Conference::all();

        return view(self::CONFERENCES_INDEX_VIEW)
            ->with('conferences', $conferences);
    }
}
