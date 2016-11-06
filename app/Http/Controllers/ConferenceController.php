<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Http\Requests\StoreConferenceRequest;
use App\Http\Requests\UpdateConferenceRequests;
use App\Entities\Conference;
use App\Entities\CategoryConference;

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
    const CONFERENCES_SHOW_VIEW   = 'conferences.show';
    const CONFERENCES_CREATE_VIEW = 'conferences.create';
    const CONFERENCES_EDIT_VIEW   = 'conferences.edit';
    
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(self::CONFERENCES_CREATE_VIEW);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConferenceRequest $request)
    {
        try {
            $conference = new Conference();
            $conference->setName($request->name);
            $conference->setAuthor($request->slug);
            //faltan atributos
            $conference->save();

            Session::flash('success', trans('conferences.stored_message'));
        } catch (Exception $e) {
            Session::flash('error', trans('conferences.not_stored_message'));
        }

        return redirect()->to(self::conference_ROUTE);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $conference = Conference::findOrFail($id);

        return view(self::CONFERENCES_SHOW_VIEW)
            ->with('conference', $conference);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $conference = Conference::find($id);

        return view(self::CONFERENCES_EDIT_VIEW)
            ->with('conference', $conference);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConferenceRequests $request, $id)
    {
        try {
            $conference = Conference::findOrFail($id);
            $conference->setName($request->name);
            $conference->setAuthor($request->id);
            //Faltan atributos
            $conference->save();

            Session::flash('success', trans('conferences.updated_message'));
        } catch (Exception $e) {
            Session::flash('error', trans('conferences.not_updated_message'));
        }

        return redirect()->to(self::CONFERENCE_ROUTE);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $conference = Conference::findOrFail($id);
            $conference->delete();

            Session::flash('success', trans('conferences.removed_message'));
        } catch (Exception $e) {
            Session::flash('error', trans('conferences.not_removed_message'));
        }
        
        return redirect()->to(self::CONFERENCE_ROUTE);
    }
}
