<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\YTVideo;

class YoutubeSeeder extends Seeder {

    public function run() {

        YTVideo::create([
            "title" => "Full Guide to Jetpack Compose Animations",
            "description" => "In this video you'll get a full introduction into animations in Jetpack Compose. ",
            "author" => "Philipp Lackner",
            "linl" => "https://www.youtube.com/watch?v=6ZZDPILtYlA",
        ]);

        YTVideo::create([
            "title" => "Full Guide to Delegation in Kotlin",
            "description" => "Delegation is a concept in software that allows us to delegate some work from one object to another and is commonly seen as alternative to inheritance.",
            "author" => "Philipp Lackner",
            "linl" => "https://www.youtube.com/watch?v=MfJB-JhRAoQ",
        ]);

        YTVideo::create([
            "title" => "5 Common Android Anti-Patterns That Make Your Code a Mess",
            "description" => "In this video you're going to learn about 5 anti-patterns that will make your code bad. I see people use these all the time",
            "author" => "Philipp Lackner",
            "linl" => "https://www.youtube.com/watch?v=skW4wSuXCe0&t=899s",
        ]);

        YTVideo::create([
            "title" => "Let, Also, Apply, Run, With - Kotlin Scope Functions",
            "description" => "In this video I will summarize for what you should choose which Kotlin scope function.",
            "author" => "Philipp Lackner",
            "linl" => "https://www.youtube.com/watch?v=Vy-dS2SVoHk",
        ]);

        YTVideo::create([
            "title" => "StateFlow vs. Flow vs. SharedFlow vs. LiveData... When to Use What?! - Android Studio Tutorial",
            "description" => "In this video you'll learn the differences between the typical observable classes we have in Android.",
            "author" => "Philipp Lackner",
            "linl" => "https://www.youtube.com/watch?v=6Jc6-INantQ",
        ]);
    }
}
