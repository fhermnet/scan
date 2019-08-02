<?php

namespace Scan;

use Illuminate\Database\Eloquent\Model;

class worker extends Model
{
    protected $table = 'workers';

     protected $fillable = [
        'last_name', 'firt_name', 'departament_id', 'title_id','photo_path', 

    ];

    public function departament()
    {
        return $this->belongsTo(Departament::class);
    }

    public function title()
    {
        return $this->belongsTo(Title::class);
    }

}
