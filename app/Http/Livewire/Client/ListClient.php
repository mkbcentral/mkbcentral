<?php

namespace App\Http\Livewire\Client;

use App\Models\Client;
use Livewire\Component;

class ListClient extends Component
{
    public function render()
    {
        $listClients=Client::all();
        return view('livewire.client.list-client',['listClients'=>$listClients]);
    }
}
