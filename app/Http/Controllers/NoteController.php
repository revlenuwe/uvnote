<?php

namespace App\Http\Controllers;

use App\Note;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class NoteController extends Controller
{
    public function index(){
        return view('guest.create');
    }

    public function create(Request $r){
        $note = Note::create([
            'sign' => Str::random(32),
            'text' => $r->text,
            'passphrase' => Hash::make($r->passphrase),
            'time_destroy' => Carbon::now()->addSeconds($r->time_destroy),
            'views_destroy' => $r->views_destroy
        ]);

        return response()->json([
            'link' => $r->getSchemeAndHttpHost().'/'.$note->id
        ]);
    }

    public function note(Note $note){

        return view('guest.note',compact('note'));
    }

    public function checkPassphrase(Note $note,Request $r){
        if(!Hash::check($r->passphrase,$note->passphrase)){
            return response()->json(['identical' => false]);
        }
        return response()->json(['identical' => true]);
    }


}
