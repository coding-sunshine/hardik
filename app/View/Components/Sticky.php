<?php

namespace App\View\Components;

use App\Models\Nav as NavModel;
use Illuminate\View\Component;

class Sticky extends Component
{
    /**
     * The navLinks.
     *
     * @var array
     */
    public $navLinks;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->navLinks = NavModel::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.sticky');
    }
}
