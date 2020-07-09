<?php

namespace App\Http\Controllers;

use App\Note;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class NoteController extends Controller
{
    public function index(){
        return view('guest.create');
    }

    public function create(Request $r){
        $note = Note::create([
            'text' => $r->text,
            'passware' => Hash::make($r->passware),
            'time_destroy' => Carbon::now()->addSeconds($r->time_destroy),
            'views_destroy' => $r->views_destroy
        ]);

        return response()->json([
            'link' => $r->getSchemeAndHttpHost().'/'.$note->id
        ]);
    }

    public function note(){
        return view('guest.note');
    }


}
