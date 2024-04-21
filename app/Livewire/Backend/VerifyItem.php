<?php

namespace App\Livewire\Backend;

use App\Models\Item;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class VerifyItem extends Component
{

    public $serial_number;

    public $is_item_found;
    public $item;


    public function mount($serial_number = null)
    {

        if ($serial_number !== null) {
            $item = Item::where('serial_number', $this->serial_number)->first();
        
            if (!$item) {
                $this->is_item_found = 'not_found';
                return;
            }
    
            $this->is_item_found = 'found';
            $this->item = $item;
        }
      
    }

    public function findItem()
    {
        $this->validate([
            'serial_number' => 'required',
        ]);

        $item = Item::where('serial_number', $this->serial_number)->first();
        if (!$item) {
            $this->is_item_found = 'not_found';

            return;
        }
        $this->is_item_found = 'found';
        $this->item = $item;
    }

    public function verifyItem()
    {
        $item = Item::where('serial_number', $this->serial_number)->first();
        $item->verification_status = true;
        $item->verification_date = Carbon::now();
        $item->verified_by = Auth::user()->id;
        $item->save();
        $this->is_item_found = 'not_found';
        $this->item = null;
        $this->reset();
    }
    public function render()
    {
        return view('livewire.backend.verify-item')->layout('layouts.dashboard');
    }
}
