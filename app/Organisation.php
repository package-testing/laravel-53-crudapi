<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    public $validation = [
        'name' => 'required',
        'abbreviation' => 'max:20'
    ];

    protected $fillable = [
        'name', 'abbreviation'
    ];

    /**
     * Override the output of var_dump.
     * @return array
     */
    public function __debugInfo()
    {
        return [
            'name' => $this->name,
            'abbreviation' => $this->abbreviation,
        ];
    }
}
