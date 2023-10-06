<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;
use App\Models\User;


class MusicController extends Controller
{
    public function index(){

        $musics = Music::all();
        // $search =request('search');
        // if($search){
        // $events = Event::where([
        //     ['title', 'like', '%'.$search.'%']
        // ])->get();
        // }else{
        // $events = Event::all();
        
        //     }
        return view('welcome', ['musics'=>$musics]);
    }

    public function create(){
        return view('musics.create');
    }
    
    public function destroy($id){

        Music::findOrFail($id)->delete();

        return redirect('/dashboard');
    }

    public function dashboard(){

        $musics = Music::all();
        return view('musics.dashboard', ['musics'=>$musics]);
    }

    public function store( Request $request ){
        $music = new Music;

    $music->name = $request->name;
    $music->artist = $request->artist;
    // $music->date = $request->date;
    $music->album = $request->album;
    $music->isExplicit = $request->isExplicit;

    if ($request->hasFile('image') && $request->file('image')->isValid()) {
        $requestImage = $request->file('image'); // Corretamente obtém o arquivo de imagem da requisição

        $extension = $requestImage->getClientOriginalExtension(); // Usa getClientOriginalExtension() para obter a extensão do arquivo
        $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . '.' . $extension;
        $requestImage->move(public_path('img/covers'), $imageName);

        $music->image = $imageName;
    }

    if ($request->hasFile('song') && $request->file('song')->isValid()) {
        $requestSong = $request->file('song'); 

        $extension = $requestSong->getClientOriginalExtension();
        $songName = md5($requestSong->getClientOriginalName() . strtotime('now')) . '.' . $extension;
        $requestSong->move(public_path('media/songs'), $songName);

        $music->song = $songName;
    }

    $music->save();
    return redirect('/');
        

    }
}
