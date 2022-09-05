<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function edugames(){
        echo "Marbel Edu Games <a href='https://www.educastudio.com/category/marbel-edu-games'><button>KLIK!</button></a>";
    }
    public function friendskidsgames(){
        echo "Marbel and Friends Kids Games <a href='https://www.educastudio.com/category/marbel-and-friends-kids-games'><button>KLIK!</button></a>";
    }
    public function riristorybooks(){
        echo "Riri Story Books <a href='https://www.educastudio.com/category/riri-story-books'><button>KLIK!</button></a>";
    }
    public function kolakkidssongs(){
        echo "Kolak kids songs <a href='https://www.educastudio.com/category/kolak-kids-songs'><button>KLIK!</button></a>";
    }
}
