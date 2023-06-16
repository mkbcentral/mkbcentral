<?php

namespace App\Http\Livewire\Section;

use App\Models\Application;
use Livewire\Component;

class ListApplication extends Component
{
    public function render()
    {
        $listApplications=Application::all();
        return view('livewire.section.list-application',['listApplications'=>$listApplications]);
    }
}
