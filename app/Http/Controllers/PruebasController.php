<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
Use App\Models\Category;

class PruebasController extends Controller
{
    public function testOrm () {
        // $posts = Post::all();
        // foreach($posts as $post){
        //     echo "<h1>".$post->Title."</h1>";
        //     echo "<p>".$post->Content."</p>";
        //     echo "<span style='color:gray;'>{$post->User->Name} - {$post->Category->Name}</span>";
        //     echo "<hr>";
        // }

        $Categories = Category::all();
        foreach ($Categories as $Category){
            echo "<h1>{$Category->Name}</h1>";

            foreach($Category->posts as $post){
                echo "<h3>".$post->Title."</h3>";
                echo "<p>".$post->Content."</p>";
                echo "<span style='color:gray;'>{$post->User->Name} - {$post->Category->Name}</span>";
                echo "<hr>";

        }


        // foreach($Category->posts as $post){
                // echo "kjshfjksdhfsu";
                // echo "<h3>.$Post->Title.</h3>";
                // echo "<h1>".$post->Title."</h1>";
                // echo "<span style='color:gray;'>{$post->User->Name} - {$post->Category->Name}</span>";
                // echo "<p>".$Post->Content."</p>";
            // }

        }
        // var_dump ($posts);
        die ();
    }
}
