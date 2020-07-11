<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNoteReq;
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

    public function create(CreateNoteReq $r){
        $note = Note::create([
            'sign' => Str::random(32),
            'text' => Crypt::encryptString($r->text),
            'passphrase' => Hash::make($r->passphrase),
            'time_destroy' => Carbon::now()->addSeconds($r->time_destroy),
            'views_destroy' => $r->views_destroy
        ]);

        return response()->json([
            'link' => $r->getSchemeAndHttpHost().'/'.$note->sign
        ]);
    }

    public function note(Note $note){
        if(!$note->trashed()){
            if((Carbon::now() > $note->time_destroy) || ($note->views_destroy <= 0)){
                $note->delete();
                return view('errors.404');
            }

            $note->decrement('views_destroy');
            return view('guest.note',compact('note'));
        }
        return view('errors.404');
    }

    public function checkPassphrase(Note $note,Request $r){
        if(!$note->trashed()){
            if(!Hash::check($r->passphrase,$note->passphrase)){
                return response()->json(['passphrase' => [
                    'Invalid passphrase'
                ]], 422);
            }

            return response()->json([
                'identical' => true,
                'text' => Crypt::decryptString($note->text)
            ]);
        }
        return response()->json(['error' => 'Not found'],404);
    }


}
