<?php

namespace App\Http\Livewire\Admin\Titles;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.titles.index')->extends('layouts.admin')->section('content');
    }
}
