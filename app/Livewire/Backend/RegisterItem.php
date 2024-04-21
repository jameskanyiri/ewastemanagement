<?php

namespace App\Livewire\Backend;

use App\Models\Item;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RegisterItem extends Component
{

    public $item_name;
    public $serial_number;
    public $manufacturer_name;
    public $year_of_manufacture;
    public $item_size;

    public function createItem()
    {
        $this->validate([
            'item_name' => 'required',
            'serial_number' => 'required',
            'manufacturer_name' => 'required',
            'year_of_manufacture' => 'required',
            'item_size' => 'required',
        ]);

        $item = new Item();
        $item->item_name = $this->item_name;
        $item->serial_number = $this->serial_number;
        $item->manufacturer_name = $this->manufacturer_name;
        $item->year_of_manufacture = $this->year_of_manufacture;
        $item->item_size = $this->item_size;
        $item->added_by = Auth::user()->id;
        $item->save();

        $this->reset();
    }

    public function render()
    {
        return view('livewire.backend.register-item')->layout('layouts.dashboard');
    }
}
