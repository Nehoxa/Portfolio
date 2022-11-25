<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'project_url'
    ];

    protected $with = ['skills'];

    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class);
    }
}
