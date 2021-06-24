<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;


    public $table = 'users';
    protected $primaryKey='cli_id';
    public $timestamps=false;


    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'cli_telefono',
        'cli_correo',
        'cli_cedula',
        'cli_genero',
        'cli_direccion',
        'cli_tipo',
        'cli_estadocivil',
        'cli_usuario',
        'cli_fenac'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' =>'string',
        'email'=>'string',
        'password'=>'string',
        'cli_telefono'=>'string',
        'cli_correo'=>'string',
        'cli_cedula'=>'string',
        'cli_genero'=>'string',
        'cli_direccion'=>'string',
        'cli_tipo'=>'string',
        'cli_estadocivil'=>'string',
        'cli_usuario'=>'string',
        'cli_fenac'=>'date'
    ];
}
