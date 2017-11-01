<?php

namespace App\Composers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class UserComposer
{

    public function compose(View $view)
    {
        $view->with('user', Auth::user());
    }

}