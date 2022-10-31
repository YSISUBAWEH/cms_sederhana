<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Postingan extends Model
{
    use AutoNumberTrait;

    public function getAutoNumberOptions()
    {
        return [
            'id_post'=>[
                    'format'=>'POST?',
                    'length'=>10
            ]
        ];
    }

    use HasFactory;
    public $table = "post";
    protected $fillable = ['id_post','image','title','content',];
}
