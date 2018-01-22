<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 09/01/2018
 * Time: 18:55
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'ticket';
    public $timestamps = false;

    protected $fillable = ['intitule','idauteur', 'dateSoumission','dateFin', 'priorite', 'idemploye', 'statut', 'description'];

}
