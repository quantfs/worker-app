<?php

namespace App\Models\Traits;

use App\Http\Filters\Var1\AbstractFilter;
use App\Http\Filters\Var1\FilterInterface;
use Illuminate\Database\Eloquent\Builder;

trait HasFilter
{
    public function scopeFilter(Builder $builder, FilterInterface $filter) {
        $filter->apllyFilter($builder);

        return $builder;
    }
}
