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
            'hash' => '#FFDE80',
        ],
        [
            'abbr' => 'about',
            'name' => 'About',
            'color' => 'blue',
            'hash' => '#80C1FF',
        ],
        [
            'abbr' => 'skills',
            'name' => 'Skills',
            'color' => 'peach',
            'hash' => '#FF9780',
        ],
        [
            'abbr' => 'contact',
            'name' => 'Contact',
            'color' => 'green',
            'hash' => '#80FF8E',
        ],
    ];
}
