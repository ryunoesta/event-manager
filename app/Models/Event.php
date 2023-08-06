<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Event extends Model
{
    protected $table = 'events';
    protected $guarded = array('id');
    public $timestamps = false;

    public function getData()
    {
        $events = DB::table($this->table)->get();
        return $events;
    }

    /**
     * fillable
     * 
     * var array
     */
    protected $fillable =[
        'date',
        'time',
        'category',
        'title',
        'content',
        'guest',
    ];

}
