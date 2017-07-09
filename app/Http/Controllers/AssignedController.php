<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Employee;
use App\Ticket;
use App\Assigned;
use Session;
class AssignedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // realizamos la consulta  de los empleados  y ticket  almacenamos a un array
       $empleados= Employee::pluck('name_employee','id')->toArray();
       $ticket = Ticket::pluck('ticket_number','id')->toArray();
       // llamamos un metodo  en modelo assigned  que nos consulta
       $asigandos =  Assigned::Assigneds();
     return View('ticket.asignar',['empleados'=>$empleados,'ticket'=>$ticket,'asigandos'=>$asigandos]);

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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  // validamos  el envio de datos
      $v =  $validator = Validator::make($request->all(), [
            'ticket_id' => 'unique:assigneds',

        ]);
           //hacemos condicion para verificar que los datos enviados cumplan con las reglas
           //en caso que no cumplan  se retorna a la misma panatalla con los mensajes usar dd($v) para ver los erroes
        if ($v->fails())
    {

        return redirect()->back()->withErrors($v->errors());
    }else{

        Assigned::create($request->all());
        Session::flash('save','ticket asignado');
       return Redirect ('asignar');
    }












             /*
         if($request->ticket_id == 5){
           return "esta";
         }else{
           "no esta";
         }
      //   dd($request->ticket_id);

        */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
