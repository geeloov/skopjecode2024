<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class University extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "major_id"
    ];

    public function majors(): BelongsTo
    {
        return $this->BelongsTo(Major::class);
    }
}
