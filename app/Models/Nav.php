<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nav extends Model
{
    use \Sushi\Sushi;
    protected $rows = [
//        [
//            'abbr' => 'intro',
//            'name' => 'Intro',
//            'color' => 'white',
//            'visibility' => 'hidden',
//        ],
        [
            'abbr' => 'work',
            'name' => 'Work',
            'color' => 'yellow',
        ],
        [
            'abbr' => 'about',
            'name' => 'About',
            'color' => 'blue',
        ],
        [
            'abbr' => 'skills',
            'name' => 'Skills',
            'color' => 'peach',
        ],
        [
            'abbr' => 'contact',
            'name' => 'Contact',
            'color' => 'green',
        ],
    ];
}
