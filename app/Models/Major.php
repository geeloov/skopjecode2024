<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Major extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description"
    ];

    protected $with = ["universities", "careers"];

    public function universities(): HasMany
    {
        return $this->hasMany(University::class);
    }

    public function answers(): BelongsToMany
    {
        return $this->belongsToMany(Answer::class, 'answer_major')
            ->withPivot('weight');
    }

    public function resultsAsUniversity1()
    {
        return $this->hasMany(Result::class, 'major1');
    }

    public function resultsAsUniversity2()
    {
        return $this->hasMany(Result::class, 'major2');
    }

    public function resultsAsUniversity3()
    {
        return $this->hasMany(Result::class, 'major3');
    }

    public function careers(): HasMany
    {
        return $this->hasMany(Career::class);
    }
}
