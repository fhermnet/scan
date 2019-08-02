<?php

namespace Scan;

use Illuminate\Database\Eloquent\Model;

class departament extends Model
{
    protected $table = 'departaments';

    protected $fillable = [
        'name_dep',
        'description',

    ];

    public function worker()
    {
        return $this->hasMany(Worker::class);
    }
}
