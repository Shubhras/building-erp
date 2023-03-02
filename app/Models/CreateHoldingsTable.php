<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreateHoldingsTable extends Model
{
    use HasFactory;
    public $fillable = [
        'id',
        'holding_id',
        'user_id',
        'cost_basis',
        'price',
    ];
}