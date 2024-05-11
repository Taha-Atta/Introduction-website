<?php

namespace App\View\Components;

use App\Models\Testimonial;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FrontTestimoailComponant extends Component
{
    public $testimonails;
    public function __construct()
    {
        $this->testimonails=Testimonial::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front-testimoail-componant');
    }
}
