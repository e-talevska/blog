<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $fillable=[
        'title',
        'body',
        'published_at',
        'slug'
    ];
    public function setPublishedAtAttribute($data){

        $this->attributes['published_at']=Carbon::createFromFormat('d/m/Y H:i A', $data);
    }
}
