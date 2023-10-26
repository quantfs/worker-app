<?php

namespace App\Http\Filters\Var2\Worker;

use Illuminate\Database\Eloquent\Builder;

class Name
{
    public function handle(Builder $builder, \Closure $next) {
        if (request()->has('name') && request('name')) { // 2-ое условие для игнорирования null
            $builder->where('name', request('name'));
        }

        return $next($builder);
    }
}
