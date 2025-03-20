<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizQuestion extends Model
{
    use HasFactory;

    protected $table = 'quiz_questions';

    protected $fillable = [
        'quiz_id',
        'question_id',
        'result',
        'user_id'
    ];

    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id');
    }

    // Define relationship with Quiz
    public function quiz()
    {
        return $this->belongsTo(Quiz::class, 'quiz_id');
    }
}
