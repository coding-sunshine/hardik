<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Skill as skillModel;

class Skills extends Component
{
    /**
     * The categories.
     *
     * @var array
     */
    public $categories;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->categories = skillModel::all()->groupBy('category');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.skills');
    }
}
