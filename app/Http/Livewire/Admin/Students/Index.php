<?php

namespace App\Http\Livewire\Admin\Students;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.students.index')->extends('layouts.admin')->section('content');
    }
}
