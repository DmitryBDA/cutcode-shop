<?php

namespace App\Services;
use Illuminate\Support\Facades\Cache;

trait MemoryCache
{
    /**
     * Gets the cached result by key,
     * or executes the closure if cache key does not exist
     * @param \Closure $closure
     * @return mixed
     */
    protected function cache(\Closure $closure)
    {
        $backtrace = debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT,2)[1];
        $class = $backtrace['class'];
        $method = $backtrace['function'];
        $args = $backtrace['args'];
        $key = $class . '::'. $method . '.' . md5(serialize($args));
        return Cache::remember($key, 600, $closure);
    }
}
