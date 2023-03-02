<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoApplicant extends Model
{
    use HasFactory;
    protected $table = 'co_applicants';
    protected $fillable = [
        'name', 'email', 'phone','role'
    ];

    protected $attributes = [
        'status' => '0'
    ];
}
