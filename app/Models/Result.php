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
        'major1',
        'major2',
        'major3',
        'major1_prob',
        'major2_prob',
        'major3_prob',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function major1()
    {
        return $this->belongsTo(Major::class, 'major1');
    }

    public function major2()
    {
        return $this->belongsTo(Major::class, 'major2');
    }

    public function major3()
    {
        return $this->belongsTo(Major::class, 'major3');
    }
}
