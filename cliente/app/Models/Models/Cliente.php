<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\api\v1\ClienteController;

class Cliente extends Model
{
    //Informações do cliente.
    protected $table= 'clientes';
    protected $fillable = [
        'nome',
        'email',
        'telefone',
    ];
}
