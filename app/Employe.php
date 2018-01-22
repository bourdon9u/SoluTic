<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 09/01/2018
 * Time: 18:56
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    protected $table = 'employe';
//    public $timestamps = false;

    protected $fillable = ['login','password', 'nom','prenom', 'email', 'datedebut', 'nbticketfini', 'nbticketcours'];

}
