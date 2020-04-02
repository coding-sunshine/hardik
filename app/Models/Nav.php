<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nav extends Model
{
    use \Sushi\Sushi;
    protected $rows = [
        [
            'id' => '1',
            'abbr' => 'intro',
            'name' => 'Intro',
            'color' => 'white',
            'visibility' => 'hidden',
        ],
        [
            'id' => '2',
            'abbr' => 'work',
            'name' => 'Work',
            'color' => 'yellow',
            'visibility' => 'visible',
        ],
        [
            'id' => '3',
            'abbr' => 'about',
            'name' => 'About',
            'color' => 'blue',
            'visibility' => 'visible',
        ],
        [
            'id' => '4',
            'abbr' => 'skills',
            'name' => 'Skills',
            'color' => 'peach',
            'visibility' => 'visible',
        ],
        [
            'id' => '5',
            'abbr' => 'contact',
            'name' => 'Contact',
            'color' => 'green',
            'visibility' => 'visible',
        ],
    ];
}
