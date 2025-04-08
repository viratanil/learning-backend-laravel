<?php

namespace App\View\Components\internal;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class footer extends Component
{
    /**
     * Create a new component instance.
     */    
    public $tittle ;
    public function __construct( $tittle)
    {
        $this->tittle = $tittle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.internal.footer');
    }
}
