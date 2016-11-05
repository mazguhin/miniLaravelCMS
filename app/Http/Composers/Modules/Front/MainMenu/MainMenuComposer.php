<?php

namespace App\Http\Composers\Modules\Front\MainMenu;

use Illuminate\View\View;
use App\Models\Modules\Front\MainMenu\MainMenu;

class MainMenuComposer
{
    public function compose(View $view)
    {
        $view->with('mainMenu', MainMenu::where('activated', '1')->get());
    }
}
