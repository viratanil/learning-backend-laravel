<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Article;
use App\Models\PartFour;

class MenuController extends Controller
{
    public function index()
    {
        // Menus with SubMenus
        $menus = Menu::with('subMenus')->get();
        $partFours = PartFour::latest()->get(); 
        // Fetch all articles
        $articles = Article::all();

        // Data को Home Page (welcome.blade.php) पर भेजें
        return view('welcome', compact('menus', 'articles','partFours'));
    }
}
