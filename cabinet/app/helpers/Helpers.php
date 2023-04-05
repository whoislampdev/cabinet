<?php 
namespace App\helpers\Helpers;
use Illuminate\Support\Facades\Auth;
use App\Models\{Ticket,User,TypeTicket};
use App\Models\Tickets;
class Helpers{
public static $Montant_total=0;
public function getMotantByAgent(Tickets $ticket){
    foreach($ticket as $vente){
           
        // $this->Montant_total += $vente->montant;    
        $montant=TypeTicket::where('user_id', Auth::user()->id)->get();
        foreach($montant as $type_ticket){
        if($type_ticket->nom === $vente->acte){
            // return $type_ticket->prix;
            $Montant_total+= $type_ticket->prix;
            // dd($Montant_total);
        }
        
        }
    }
}
}
?>
