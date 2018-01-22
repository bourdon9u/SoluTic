<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 09/01/2018
 * Time: 01:48
 */

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{

    public function index(){
        $collection  = DB::table('ticket')
            ->where('idauteur', '=', '1')
            ->orderBy('id', 'desc')
            ->get();


        $attributs = array();
        foreach ($collection as $ticket) {
            $attributs[] = [$ticket->id, $ticket->intitule, $ticket->idauteur, $ticket->dateSoumission, $ticket->dateFin, $ticket->priorite, $ticket->idemploye,  $ticket->statut, $ticket->description];
        }

        return view('/site/ticket')->with('attributs', $attributs);
    }

    public function store(Request $request){
        $requestData = $request->all();
        $requestData['idauteur'] = 1;
        $requestData['statut'] = 'En attente de prise en charge';
        Ticket::create ($requestData);

        return redirect()->route('ticket');
    }


    public function afficherDetails($number){
        $collection  = DB::table('ticket')
            ->where('id', '=', $number)
            ->first();
            
        return view('/site/detailsticket')->with('attributs', $collection);
    }
}