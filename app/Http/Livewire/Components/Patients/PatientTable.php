<?php

namespace App\Http\Livewire\Components\Patients;

use App\Models\Patient;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class PatientTable extends DataTableComponent
{

    public function columns(): array {
        return [
            Column::make('First Name', 'first_name')
                ->searchable()
                ->sortable(),
            Column::make('Last Name', 'last_name')
                ->searchable()
                ->sortable(),
        ];
    }

    public function query(): Builder {
        return Patient::query();   
    }
}
