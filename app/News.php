<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
   protected $table = 'news_table';
   public $primary_key = 'id';
   public $title = 'title';
   public $subtitle = 'sub_title';
   public $content = 'content';
   public $thumbnail = 'thumbnail';
   public $video = 'video';
   public $created_by = 'created_by';
   public $updated_by = 'updated_by';
   public $timestamps= true;
}
