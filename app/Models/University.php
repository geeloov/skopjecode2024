<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class University extends Model
{
    use HasFactory;

    protected $fillable = [
        "name"
    ];

    public function discipline(): HasMany
    {
        return $this->hasMany(Discipline::class);
    }

    public function answers(): BelongsToMany
    {
        return $this->belongsToMany(Answer::class, 'answer_university')
            ->withPivot('weight');
    }

    public function resultsAsUniversity1()
    {
        return $this->hasMany(Result::class, 'university1');
    }

    public function resultsAsUniversity2()
    {
        return $this->hasMany(Result::class, 'university2');
    }

    public function resultsAsUniversity3()
    {
        return $this->hasMany(Result::class, 'university3');
    }
}
