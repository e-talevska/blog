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

    protected $dates=[
        'published_at'
    ];

    public function scopePublished($query){
        $query->where('published_at','<=',Carbon::now());
    }

    public function scopeNotPublished($query){
        $query->where('published_at','>',Carbon::now());
    }

    public function setPublishedAtAttribute($data){
        $this->attributes['published_at']=Carbon::createFromFormat('d/m/Y H:i A',$data);
    }
    public function author(){
        $this->belongsTo('Apps\User');
    }
}
