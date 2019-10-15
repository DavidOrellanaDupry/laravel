<?php

namespace App\Http\Controllers;
use App\Event;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use Illuminate\Http\Request;

class EventController extends Controller
{
  public function index()
    {
        //
        $events = Event::all();
        $event = [];
        foreach($events as $row){
            $enddate = $row->end_date."24:00:00";

            $event[]=\Calendar::event( $row->title,
            false,
            new \DateTime($row->start_date),
            new \DateTime($row->end_date),
            $row->id,
            [
                'color' => $row->color,
            ]
            );
        }
        $calendar=\Calendar::addEvents($event);
        return view('event', compact('events','calendar'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function display(){
        return view('addevent');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request){
       //  $this->validate($request,
       // ['title' =>'required',
       // 'color'=>'required',
       //  'id_restaurant'=>'required',
       //  'start_date'=>'required',
       //  'end_date'=>'required']);
        $events= new Event;
        $events->Titulo = $request->input('title');
	      // $events->Titulo=$request->input('color');
        $events->Fecha_Inicio = $request->input('start_date');
        $events->Fecha_Termino = $request->input('end_date');
        $events-> save();
        return redirect('events')->with('success','Evento Agregado');
    }
    public function store(Request $request)
    {
        //
       // $this->validate($request,
       // ['title' =>'required',
       //  'id_restaurant'=>'required',
       //  'start_date'=>'required',
       //  'end_date'=>'required']);
        // $events= new Event;
        // $events->Titulo = $request->input('title');
	      //  // $events->Titulo=$request->input('color');
        // $events->Fecha_Inicio = $request->input('start_date');
        // $events->Fecha_Termino = $request->input('end_date');
        // dd($events);
        // $events-> save();
        // return redirect('events')->with('success','Evento Agregado');
    }


}
