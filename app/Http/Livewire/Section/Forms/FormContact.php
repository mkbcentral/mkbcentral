<?php

namespace App\Http\Livewire\Section\Forms;

use App\Http\Requests\FormContactRequest;
use App\Mail\ContactInfoMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class FormContact extends Component
{
    public $name,$email,$message,$phone;

    public function sendEmaiContact(){
        $request=new FormContactRequest();
        $data=$this->validate($request->rules());
        Mail::send(new ContactInfoMail($data));
        session()->flash('message', 'Mail envoyé avec success !');
    }

    public function render()
    {
        return view('livewire.section.forms.form-contact');
    }
}
