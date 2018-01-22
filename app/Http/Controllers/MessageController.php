<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 09/01/2018
 * Time: 01:49
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MessageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){}

    public function addNewMessage(Request $request){
        $requestData = $request->all();
        $requestData['auteur'] =  'employe1';
        $requestData['destinataire'] =  'client1';
        Message::create ($requestData);
        return redirect()->route('homepage');
    }

    public function writeNewMessage($idTicket, $idDestinataire){
        return view('/site/writeMessage')->with('attributs', compact($idTicket, $idDestinataire));
    }

    //Date (envoi), auteur, destinataire, contenu, sujet, idTicket
    public function afficherMessagerie(){
        $collection  = DB::table('message')
            ->where('auteur', '=', 'employe1')
            ->orWhere('destinataire', '=', 'employe1')
            ->orderBy('idticket', 'desc')
            ->latest('date')
            ->get();
        $attributs = array();

        foreach ($collection as $message) {
            $attributs[] = [$message->id, $message->sujet, $message->contenu, $message->date, $message->auteur, $message->destinataire, $message->idticket];
        }
        return view('/site/messagerie')->with('attributs', $attributs);
    }
}