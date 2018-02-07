<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    // Many to many relation ship -> post to tag
    public function tags(){
      // return $this->belongsToMany(' ใส่ path/to/model','ช่ือตาราง');
      return $this->belongsToMany('App\Model\user\tag','post_tags');
    }

    // Many to many relation ship -> post to category
    public function categoies(){
      return $this->belongsToMany('App\Model\user\category','category_posts');
    }
}
