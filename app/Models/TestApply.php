<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TestApply extends Model
{
    use HasFactory;

    protected $fillable = [
        'test_id',
        'user_id',
        'date',
        'transaction_id',
        'payment_status',
        'test_code',
        'test_password',
    ];

    public function test_take(): HasOne
    {
        return $this->hasOne(TestTake::class, 'test_id', 'test_id');
    }
}
