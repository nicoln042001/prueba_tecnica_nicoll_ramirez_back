<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    //listado de tickets
    public function index(Request $request){
        $tickets = Ticket::with('user');

        //filtros
        $request->user ? $tickets->where('user_id', $request->user) : $tickets;
        $request->create_date ? $tickets->where('created_at', $request->create_date) : $tickets;
        $request->update_date ? $tickets->where('updated_at', $request->update_date) : $tickets;

        $tickets = $tickets->paginate(5, $request->page);

        foreach( $tickets as $ticket ){
            $ticket->user = $ticket->user->name ?? '';
        }

        return response()->json(['tickets' => $tickets], 200);

    }

    /**
     * mostrar un ticket por id
     */
    public function show($id){
        return Ticket::find($id);
    }

    /**
     * crear tickets
     * 
     */
    public function store(Request $request){
       $ticket =  Ticket::create([
            'user_id' => $request->user_id,
            'status' => true
        ]);

        return response()->json(['msg' => 'Ticket creado con exito', 'ticket' => $ticket], 201);
    }

    /**
     * editar ticket
     */
    public function update($id, Request $request){
        $ticket = Ticket::find($id);
        $ticket->user_id = $request->user_id;
        $ticket->status = $request->status;
        $ticket->save();

        return response()->json(['msg' => 'Ticket editado con exito', 'ticket' => $ticket], 202);
    }

    /**
     * eliminar ticket  
     */
    public function destroy($id){
        $ticket = Ticket::find($id);
        
        $ticket->delete();

        return response()->json(['msg' => 'Ticket eliminado con exito'], 200);

    }
}
