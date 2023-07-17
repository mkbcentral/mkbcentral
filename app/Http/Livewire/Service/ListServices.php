<?php

namespace App\Http\Livewire\Service;

use App\Models\Service;
use Livewire\Component;

class ListServices extends Component
{
    public function render()
    {
        $listServices=Service::all();
        return view('livewire.service.list-services',['listServices'=>$listServices]);
    }
}
