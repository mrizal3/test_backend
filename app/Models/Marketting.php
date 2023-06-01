<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marketing extends Model
{

    protected $table = 'marketting';

    protected $fillable = [
        'name'
    ];

    public $timestamps = false;

}
