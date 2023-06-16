<?php

namespace App\View\Components\WebSite\Navs;

use App\Models\Application;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ApplicationDropDown extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $applicationsList=Application::all();
        return view('components.web-site.navs.application-drop-down',compact('applicationsList'));
    }
}
