<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Result extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'university1',
        'university2',
        'university3',
        'university1_prob',
        'university2_prob',
        'university3_prob',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function university1()
    {
        return $this->belongsTo(University::class, 'university1');
    }

    public function university2()
    {
        return $this->belongsTo(University::class, 'university2');
    }

    public function university3()
    {
        return $this->belongsTo(University::class, 'university3');
    }
}
