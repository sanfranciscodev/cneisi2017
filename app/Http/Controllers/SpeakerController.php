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
    const SPEAKERS_SHOW_VIEW   = 'speakers.show';
    const SPEAKERS_CREATE_VIEW = 'speakers.create';
    const SPEAKERS_EDIT_VIEW   = 'speakers.edit';
                
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(self::SPEAKERS_CREATE_VIEW);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSpeakerRequest $request)
    {
        try {
            $speaker = new Speaker();
            $speaker->setName($request->name);
            $speaker->setAuthor($request->slug);
            //faltan atributos
            $speaker->save();

            Session::flash('success', trans('speakers.stored_message'));
        } catch (Exception $e) {
            Session::flash('error', trans('speakers.not_stored_message'));
        }

        return redirect()->to(self::SPEAKER_ROUTE);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $speaker = Speaker::findOrFail($id);

        return view(self::SPEAKERS_SHOW_VIEW)
            ->with('speaker', $speaker);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $speaker = Speaker::find($id);

        return view(self::SPEAKERS_EDIT_VIEW)
            ->with('speaker', $speaker);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSpeakerRequest $request, $id)
    {
        try {
            $speaker = Speaker::findOrFail($id);
            $speaker->setName($request->name);
            $speaker->setAuthor($request->id);
            //Faltan atributos
            $speaker->save();

            Session::flash('success', trans('speakers.updated_message'));
        } catch (Exception $e) {
            Session::flash('error', trans('speakers.not_updated_message'));
        }

        return redirect()->to(self::SPEAKER_ROUTE);
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
            $speaker = Speaker::findOrFail($id);
            $speaker->delete();

            Session::flash('success', trans('speakers.removed_message'));
        } catch (Exception $e) {
            Session::flash('error', trans('speakers.not_removed_message'));
        }
        
        return redirect()->to(self::SPEAKER_ROUTE);
    }
}