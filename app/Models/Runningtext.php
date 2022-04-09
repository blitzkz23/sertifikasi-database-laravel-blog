<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Runningtext extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'link',
        'status',
    ];

    public static $rules = [
        'title'      => 'required',
        'link'     => 'required',
        'status'        => 'required',
    ];
}
