<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Alfa6661\AutoNumber\AutoNumberTrait;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use AutoNumberTrait;

    public function getAutoNumberOptions()
    {
        return [
            'id_user'=>[
                    'format'=>'UXXX?',
                    'length'=>5
            ]
        ];
    }

    protected $table = 'tb_user';
    protected $primaryKey = 'id_user';

    protected $fillable = [
        'id_user',
        'name',
        'username',
        'password',
    ];
}
