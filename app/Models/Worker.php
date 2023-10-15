<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    protected $table = 'workers';
    protected $guarded = false;

    public function profile() {
        return $this->hasOne(Profile::class, 'worker_id', 'id');
    }

    public function position() {
        return $this->belongsTo(Position::class, 'position_id', 'id');
    }

    public function projects() {
        return $this->belongsToMany(Project::class, 'project_workers', 'worker_id', 'project_id');
    }

    public function avatar() {
        return $this->morphOne(Avatar::class, 'avatarable');
    }
    public function reviews() {
        return $this->morphMany(Review::class, 'reviewable');
    }

    public function tags() {
        return $this->morphToMany(Tag::class, 'taggable');
    }

}
