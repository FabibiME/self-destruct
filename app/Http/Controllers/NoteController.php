<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;

Use Exception;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('notes.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'message' => 'required|string',
        ]);

        $encrypted_message['encrypted_message'] = Crypt::encrypt($validated['message']);
        $encrypted_message['id'] = Str::uuid()->toString();



        try{
            Note::create($encrypted_message);
        } catch(Exception $e)
        {
            return redirect('error');
        }
        
        return view('notes.link')->withTitle($encrypted_message['id']);

    }

    /**
     * Display the specified resource.
     */
    public function show($uuid)
    {
        return view('notes.show')->withUuid($uuid);
    }

    public function open($uuid)
    {

        $note = Note::find($uuid);

        if($note != null){
            $encrypted = $note->getAttributes();

            $text = Crypt::decrypt($encrypted['encrypted_message']);
        
            $note->delete();
    
            return view('notes.open')->withText($text);
        } else {
            return redirect('error');
        }

    }

    public function error(){

        return view('notes.error');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        //
    }
}
