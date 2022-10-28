<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YTVideo extends Model {

    use HasFactory;
    
    protected $table = 'youtube_model';

    protected $fillable = [
        "title",
        "description",
        "author",
        "link"
    ];
}