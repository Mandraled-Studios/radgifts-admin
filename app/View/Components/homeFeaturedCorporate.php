<?php

namespace App\View\Components;

use App\Models\Collection;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class homeFeaturedCorporate extends Component
{
    /**
     * Create a new component instance.
     */

    public function __construct(
        public $featuredCorporate,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home-featured-corporate');
    }
}
