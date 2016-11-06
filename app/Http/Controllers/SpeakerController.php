<?php
namespace App\Http\Controllers;

use App\Entities\Speaker;

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
    const SPEAKERS_CREATE_VIEW = 'speakers.create';
    const SPEAKERS_EDIT_VIEW   = 'speakers.edit';
    const SPEAKERS_SHOW_VIEW   = 'speakers.show';
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
     * @param  StoreSpeakerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSpeakerRequest $request)
    {
        try {
            $speaker = new Speaker();
            $speaker->setName($request->name);
            $speaker->setPhoto($request->photo);
            $speaker->setVideo($request->video);
            $speaker->setTagLine($request->tagLine);
            $speaker->setDescription($request->description);
            $speaker->setScore($request->score);
           
            Session::flash('success', trans('speakers.stored_message'));
        } catch (Exception $e) {
            Session::flash('error', trans('speakers.not_stored_message'));
        }
        
        return redirect()->to(self::SPEAKER_ROUTE);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $idSpeaker
     * @return \Illuminate\Http\Response
     */
    public function show($idSpeaker)
    {
        $speaker = Speaker::findOrFail($idSpeaker);
        return view(self::SPEAKERS_SHOW_VIEW)
            ->with('speaker', $speaker);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $idSpeaker
     * @return \Illuminate\Http\Response
     */
    public function edit($idSpeaker)
    {
        $speaker = Book::findOrFail($idSpeaker);
        return view(self::SPEAKERS_EDIT_VIEW)
            ->with('speaker', $speaker);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateSpeakerRequest  $request
     * @param  int  $idSpeaker
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSpeakerRequest $request, $idSpeaker)
    {
        try {
            $speaker = Book::findOrFail($idSpeaker);
            $speaker->setName($request->name);
            $speaker->setPhoto($request->photo);
            $speaker->setVideo($request->video);
            $speaker->setTagLine($request->tagLine);
            $speaker->setDescription($request->description);
            $speaker->setScore($request->score);
          
            Session::flash('success', trans('speakers.updated_message'));
        } catch (Exception $e) {
            Session::flash('error', trans('speakers.not_updated_message'));
        }
        return redirect()->to(self::SPEAKER_ROUTE);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $idSpeaker
     * @return \Illuminate\Http\Response
     */
    public function destroy($idSpeaker)
    {
        try {
            $speaker = Book::findOrFail($idSpeaker);
            $speaker->delete();
            Session::flash('success', trans('speakers.removed_message'));
        } catch (Exception $e) {
            Session::flash('error', trans('speakers.not_removed_message'));
        }
        
        return redirect()->to(self::SPEAKER_ROUTE);
    }
    
    
  
  
}