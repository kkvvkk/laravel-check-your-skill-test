<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HelloWorld extends Component
{
    public $date;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->date = date('Y-m-d');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.hello-world');
    }
}
