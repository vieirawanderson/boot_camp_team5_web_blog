<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


//class BlogPostTag extends Model { //REFERENCIA !!!!!!!!!!!!
class BlogPostTag extends BaseModel
{
    protected $fillable = array('post_id', 'tag_id');
}
