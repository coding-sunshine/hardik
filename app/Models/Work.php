<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use \Sushi\Sushi;
    protected $rows = [
        [
            'company' => 'Kraff Software',
            'position' => 'Sr. Software Engineer',
            'year' => '2006',
        ],
        [
            'company' => 'Clubwebsite Ltd.',
            'position' => 'Web Developer',
            'year' => '2010',
        ],
        [
            'company' => 'Aecor Digital',
            'position' => 'CTO & Full-stack Developer',
            'year' => '2011',
        ],
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'year' => 'integer',
    ];
}
