<?php

namespace App\Livewire\Backend;

use App\Models\Item;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DashboardComponent extends Component
{
    public function render()
    {
        if (Auth::user()->user_type == "official_user") {
            $items = Item::all();
        }else{
            $items = Item::where('added_by', Auth::user()->id)->get();
        }

       


        return view('livewire.backend.dashboard-component', [
            'items' => $items
        ])->layout('layouts.dashboard');
    }
}
