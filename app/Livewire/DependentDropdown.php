<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Country;
use App\Models\State;
use App\Models\City;

class DependentDropdown extends Component
{
    public $countries;
    public $states;
    public $cities;
    public $selectedCountry = null;
    public $selectedState = null;
    public $selectedCity = null;

    public function mount()
    {
        $this->countries = Country::all();
        $this->states = collect();
        $this->cities = collect();
    }

    public function updatedSelectedCountry($country_id)
    {
        $this->states = $country_id ? State::where('country_id', $country_id)->get() : collect();
        $this->selectedState = null;
        $this->cities = collect();
        $this->selectedCity = null;
    }

    public function updatedSelectedState($state_id)
    {
        $this->cities = $state_id ? City::where('state_id', $state_id)->get() : collect();
        $this->selectedCity = null;
    }

    public function render()
    {
        return view('livewire.dependent-dropdown');
    }
}
