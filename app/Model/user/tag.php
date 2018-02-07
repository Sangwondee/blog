<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{

    // Many to many relation ship -> tag to post
    public function posts(){
      // return $this->belongsToMany(' ใส่ path/to/model','ช่ือตาราง');
      return $this->belongsToMany('App\Model\user\post','post_tags');
    }
}
