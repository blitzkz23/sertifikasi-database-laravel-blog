<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;

    protected $fillable = [
        'info_title',
        'info_content',
        'status'
    ];

    public static $rules = [
        'info_title'      => 'required',
        'info_content'     => 'required',
        'status'        => 'required',
    ];
}
