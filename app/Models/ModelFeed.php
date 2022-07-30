<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelFeed extends Model
{
    use HasFactory;
    protected $table = "feeds";
    protected $fillable = ["feed_name", "usage_code", "f_category_id"];

}
