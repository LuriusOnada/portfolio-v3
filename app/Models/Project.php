<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{
    protected $fillable = [
        'id',
        'title',
        'resume',
        'content'
    ];

    public $incrementing = false;

    protected $primaryKey = 'url';

    public function tags(): BelongsToMany 
    {
        return $this->BelongsToMany('App\Models\Tag');
    }
}
