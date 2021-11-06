<?php

namespace App\Http\Livewire\Components\Patients;

use App\Exports\PatientsExport;
use App\Models\Patient;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class PatientTable extends DataTableComponent
{
    public array $bulkActions = [
        'exportSelected' => 'Export',
    ];

    public function columns(): array {
        return [
            Column::make('First Name', 'first_name')
                ->searchable()
                ->sortable(),
            Column::make('Last Name', 'last_name')
                ->searchable()
                ->sortable(),
            Column::make('Phone')
                ->searchable(),
            Column::make('Email')
                ->searchable(),
        ];
    }

    public function getTableRowUrl($row): string {
        return route('app.patients.edit', $row);
    }

    public function query(): Builder {
        return Patient::query();   
    }

    public function exportSelected()
    {
        if ($this->selectedRowsQuery->count() > 0) {
            return (new PatientsExport($this->selectedRowsQuery))->download('Patients_list.csv');
        }
    }
}
