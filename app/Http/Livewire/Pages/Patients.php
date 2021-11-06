<?php

namespace App\Http\Livewire\Pages;

use App\Models\Patient;

use Livewire\Component;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class Patients extends Component {

    

    public function render() {
        return view('livewire.pages.patients')
            ->extends('main')
            ->section('page-content');
    }
}
