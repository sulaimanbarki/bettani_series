<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'test_id',
        'question_id',
        'result',
        'test_take_id'
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
