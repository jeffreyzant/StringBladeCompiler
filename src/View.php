<?php

namespace Wpb\String_Blade_Compiler;

use Exception;
use Throwable;
use ArrayAccess;
use BadMethodCallException;
use Illuminate\Support\Str;
use Illuminate\Support\MessageBag;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\View\Engine;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\Support\MessageProvider;
use Illuminate\Contracts\View\View as ViewContract;

class View extends \Illuminate\View\View
{

    /**
     * Create a new view instance.
     *
     * @param  \Wpb\String_Blade_Compiler\Factory  $factory
     * @param  \Illuminate\Contracts\View\Engine  $engine
     * @param  string  $view
     * @param  string  $path
     * @param  array   $data
     *
     */
    public function __construct(Factory $factory, Engine $engine, $view, $path, $data = [])
    {
        $this->view = $view;
        $this->path = $path;
        $this->engine = $engine;
        $this->factory = $factory;

        $this->data = $data instanceof Arrayable ? $data->toArray() : (array) $data;
        
    }

}
