<?php

namespace App\View\Components\WebSite;

use App\Models\Application;
use App\Models\Client;
use App\Models\OurInfo;
use App\Models\SiteHeaderInfo;
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
        $info=OurInfo::find(1);
        $otherInfo=SiteHeaderInfo::find(1);
        return view('components.web-site.footer',compact(['listClients','listApplications','info','otherInfo']));
    }
}
