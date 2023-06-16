<?php

namespace App\View\Components\WebSite;

use App\Models\SiteHeaderInfo;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
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
        $info=SiteHeaderInfo::find(1);
        return view('components.web-site.header',compact('info'));
    }
}
