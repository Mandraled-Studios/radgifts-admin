<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class marqueebanner extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $bgcolor, public $textcolor, 
        public $text, public $ctalabel, 
        public $ctastyle, public $ctaurl
        ){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.marqueebanner');
    }
}
