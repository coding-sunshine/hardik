<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Nav as NavModel;

class Nav extends Component
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
        return view('components.nav');
    }
}
