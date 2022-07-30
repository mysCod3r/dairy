<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelSelected extends Model
{
    use HasFactory;
    protected $table = "feeds";
    protected $fillable = ["s_feed_name", "s_usage_code"];
}
