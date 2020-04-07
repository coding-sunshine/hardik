<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use \Sushi\Sushi;
    protected $rows = [
        [
            'category' => 'Front-End',
            'skill' => 'HTML5/CSS3',
            'strenght' => true,
        ],
        [
            'category' => 'Front-End',
            'skill' => 'VueJs',
            'strenght' => true,
        ],
        [
            'category' => 'Front-End',
            'skill' => 'Boostrap',
            'strenght' => true,
        ],
        [
            'category' => 'Front-End',
            'skill' => 'TailwindCSS',
            'strenght' => true,
        ],
        [
            'category' => 'Back-End',
            'skill' => 'Serverless',
            'strenght' => true,
        ],
        [
            'category' => 'Back-End',
            'skill' => 'Laravel',
            'strenght' => true,
        ],
        [
            'category' => 'Back-End',
            'skill' => 'PHP',
            'strenght' => true,
        ],
        [
            'category' => 'Back-End',
            'skill' => 'NodeJs',
            'strenght' => false,
        ],
        [
            'category' => 'Back-End',
            'skill' => 'REST APIs',
            'strenght' => true,
        ],
        [
            'category' => 'Database',
            'skill' => 'MySQL',
            'strenght' => true,
        ],
        [
            'category' => 'Database',
            'skill' => 'MongoDB',
            'strenght' => true,
        ],
        [
            'category' => 'Database',
            'skill' => 'CouchDB',
            'strenght' => true,
        ],
        [
            'category' => 'Database',
            'skill' => 'Elastic Search',
            'strenght' => true,
        ],
        [
            'category' => 'Server Management',
            'skill' => 'AWS',
            'strenght' => true,
        ],
        [
            'category' => 'Server Management',
            'skill' => 'Azure',
            'strenght' => true,
        ],
        [
            'category' => 'Server Management',
            'skill' => 'Heroku',
            'strenght' => true,
        ],
        [
            'category' => 'Design',
            'skill' => 'Wireframing',
            'strenght' => true,
        ],
        [
            'category' => 'Design',
            'skill' => 'Photoshop',
            'strenght' => true,
        ],
        [
            'category' => 'Design',
            'skill' => 'Illustrator',
            'strenght' => true,
        ],
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
    ];
}
