<?php

namespace App\Models;

use App\Events\Worker\CreatedEvent;
use App\Http\Filters\Var1\AbstractFilter;
use App\Models\Traits\HasFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder;

class Worker extends Model
{
    use HasFactory;
    use HasFilter;

    protected $table = 'workers';
    protected $guarded = false;

    protected static function booted()
    {
//        static::created(function ($model){
//            event(new CreatedEvent($model));
//        });
//        static::updated(function ($model){
//            if($model->waschanged()) {
//                dd($model->getOriginal('age'), $model->getAttributes()['age']);
//            }
//        });
    }

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
