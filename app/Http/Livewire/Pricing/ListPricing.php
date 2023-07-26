<?php

namespace App\Http\Livewire\Pricing;

use App\Models\PlanTarif;
use App\Models\Tarif;
use Livewire\Component;

class ListPricing extends Component
{
    public $listPlan=[];
    public $selectedPlanId=0;
    public $planSelected;
    public $valueForCalculatePrice=0;

    public function selectPlan(PlanTarif $plan){
        $this->selectedPlanId=$plan->id;
        $this->planSelected=$plan;
        if($plan->name=='Annuel'){
            $this->valueForCalculatePrice=12;
        }else{
            $this->valueForCalculatePrice=1;
        }
    }

    public function mount(){
        $this->listPlan=PlanTarif::all();
        $this->planSelected=PlanTarif::first();
        $this->selectedPlanId=$this->planSelected->id;;
    }
    public function render()
    {
        $listTarif=Tarif::all();
        return view('livewire.pricing.list-pricing',['listTarif'=>$listTarif]);
    }
}
