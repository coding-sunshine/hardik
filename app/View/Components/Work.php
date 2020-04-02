<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Work as workModel;

class Work extends Component
{
    /**
     * The navLinks.
     *
     * @var array
     */
    public $works;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->works = workModel::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.work');
    }
}
