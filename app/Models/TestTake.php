<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestTake extends Model
{
    use HasFactory;

    // fillable
    protected $fillable = [
        'test_id',
        'cnic',
        'marks',
        'startingtime',
        'endingtime',
        'type',
        'district',
        'result',
        'is_completed',
    ];
}
