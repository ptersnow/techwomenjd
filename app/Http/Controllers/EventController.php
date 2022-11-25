<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/** model do form vagas */
use App\Models\Event;

/** model do form chat */
use App\Models\Coment;

/** model do form chat */
use App\Models\People;

class EventController extends Controller
{
    public function Home(){
        
        $peoples = People::all();

        return view ('events.Home', ['peoples'=> $peoples]);
    }

    public function Sobre(){
        return view('events.Sobre');
    }

    public function Pioneiras(){
        return view('events.Pioneiras');
    }

    /**pegando os eventos do bd e passando pra view */
    public function Network (){
        
        $events = Event::all();

        return view('events.Network', ['events' => $events]);
    }

    public function Midias(){
        return view('events.Midias');
    }

    /**pegando os eventos do bd e passando pra view */
    public function Chat(){
        $coments = Coment::all();

        return view('events.Chat', ['coments' => $coments]);
    
    }

    public function ada(){
        return view('events.ada');
    }

    public function formvaga(){
        return view('events.formvaga');
    }

    public function Aviso(){
        return view('events.Aviso');
    }
    
   
    /** traz todos os eventos do formulario de vagas e salva no bd*/
    public function store(Request $request){
        
        $event = new Event;
        
        $event->nome = $request->nome;
        $event->descriçãoE = $request->descriçãoE;
        $event->descriçãoV = $request->descriçãoV;
        $event->requisitos = $request->requisitos;
        $event->beneficios = $request->beneficios;
        $event->email = $request->email;
        $event->telefone = $request->telefone;

        $event->save();

        return redirect('/events/Network');
    }

    /** traz todos os eventos do formulario de vagas e salva no bd*/
    public function stor(Request $request){
        
        $coment = new Coment;
        
        $coment->Nome = $request->Nome;
        $coment->Email = $request->Email;
        $coment->Comentario = $request->Comentario;

        $coment->save();

        return redirect('/events/Chat');
    }

    
    public function storee(Request $request){

        $people = new People; 

        $people->email = $request->email;

        $people ->save();

        return redirect ('/events/Aviso');
}

}
