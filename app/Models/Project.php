<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "image",
        "description",
        "github_url",
    ];

    public function technology()
    {
        return $this->belongsTo(Technology::class);
    }

    public function languages()
{
    return $this->belongsToMany(Language::class, 'project_language');
}
}
