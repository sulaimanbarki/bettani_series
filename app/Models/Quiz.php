<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Quiz extends Model
{
    use HasFactory;

    protected $table = 'quizes';

    protected $fillable = [
        'title',
        'user_id',
        'marks',
        'startingtime',
        'endingtime',
        'type',
        'district',
        'result',
        'quiz_in_unit',
        'quiz_in_section'
    ];

    public function questions()
    {
        return $this->hasMany(QuizQuestion::class, 'quiz_id');
    }

 

    public function user()
    {
        return  $this->BelongsTo(User::class, 'user_id');
    }
}
