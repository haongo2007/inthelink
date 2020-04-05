<?php
namespace App\Http\ViewComposers;

use App\Models\Categories;
use Illuminate\View\View;

class CategoriesComposer
{
    public $categories_menu = [];
    /**
    * Create a movie composer.
    *
    * @return void
    */
    public function __construct()
    {
        $categories = Categories::With('Childs.Childs')->where('parent',0)->get();
        $this->categories_menu = $categories;
    }

    /**
    * Bind data to the view.
    *
    * @param  View  $view
    * @return void
    */
    public function compose(View $view)
    {
        $view->with('categories_menu', $this->categories_menu);
    }
}