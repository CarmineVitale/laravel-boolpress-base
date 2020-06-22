<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoUser extends Model
{
    protected $fillable = [
        'user_id',
        'phone',
        'address',
        'image'
    ];


    //mi permette di rimuover le operazioni di timestamp (che noi abbiamo eliminato dalla tabella infousers) che di solito laravel fa in automatico
    public $timestamps = false;

    //creo relazione con tabella user (one to many)
    public function user() {
        return $this->belongsTo('App\User');
    }
}
