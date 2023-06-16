<?php

namespace App\View\Components\WebSite;

use App\Models\Application;
use App\Models\Client;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
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
        $listClients=Client::all();
        $listApplications=Application::all();
        return view('components.web-site.footer',compact(['listClients','listApplications']));
    }
}
