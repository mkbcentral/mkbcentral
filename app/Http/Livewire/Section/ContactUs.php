<?php

namespace App\Http\Livewire\Section;

use App\Models\OurInfo;
use Livewire\Component;

class ContactUs extends Component
{
    public OurInfo $info;
    public function mount(){
       $this->info=OurInfo::find(1);
    }
    public function render()
    {
        return view('livewire.section.contact-us');
    }
}
