<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 09/01/2018
 * Time: 18:53
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'message';
//    public $timestamps = false;

    protected $fillable = ['idticket','auteur', 'destinataire','date', 'contenu', 'sujet'];

}
