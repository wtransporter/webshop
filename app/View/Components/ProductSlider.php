<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductSlider extends Component
{
    public $articles;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($articles)
    {
        $this->articles =  $articles;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.product-slider');
    }
}
