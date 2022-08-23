<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trivia extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'choice_1',
        'choice_2',
        'choice_3',
        'choice_4',
        'choice_5',
        'start_time',
        'finish_time',
    ];
}
