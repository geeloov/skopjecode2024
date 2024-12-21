<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        "answer",
        "question_id"
    ];
    protected $with = ['majors'];

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'answer_user');
    }

    public function majors(): BelongsToMany
    {
        return $this->belongsToMany(Major::class, 'answer_major')
            ->withPivot('weight');
    }
}
