<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Select2 extends Component
{
    public $products, $productSelectedId, $productSelectedName;

    public function mount()
    {
        $this->products = [];
    }

    public function render()
    {
    $this->products = Product::orderBy('name', 'asc')->get();

    return view('livewire.utils.select2')
        ->extends('layouts.theme.app')
        ->section('content');
    }
}
