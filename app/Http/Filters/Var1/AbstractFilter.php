<?php

namespace App\Http\Filters\Var1;

use Illuminate\Database\Eloquent\Builder;

abstract class AbstractFilter implements FilterInterface
{
    private array $params = [];

    /**
     * @param array $params
     */
    public function __construct(array $params)
    {
        $this->params = $params;
    }

    public function apllyFilter(Builder $builder)
    {
        foreach ($this->getCallbacks() as $key => $callback) {
            if(isset($this->params[$key])) {
                $this->$callback($builder, $this->params[$key]);
            }
        }
    }

    abstract public function getCallbacks(): array;
}
