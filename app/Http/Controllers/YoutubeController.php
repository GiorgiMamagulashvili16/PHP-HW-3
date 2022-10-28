<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\YTVideo;

class YoutubeController extends Controller {

    public function index() {
        $videos = YTVideo::where("author","Philipp Lackner") -> get();
        return view("youtube.index",["items"=>$videos]);
    }

    public function youtube_item(YTVideo $video) {
        return view("youtube.item",["video"=>$video]);
    }
}
