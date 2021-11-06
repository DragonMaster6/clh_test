<?php

namespace App\Exports;

use App\Models\Patient;

// use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PatientsExport implements FromQuery, WithHeadings, withMapping {
    use Exportable;

    /**
    * @return \Illuminate\Support\Collection
    */
    public function query() {
        return Patient::query()->with(['bp_records']);
    }

    /**
     * Specify what headers should be displayed
     * @return array
     */
    public function headings(): array {
        return [
            'First Name',
            'Last Name',
            'Birth Date',
            'Gender',
            'Phone',
            'Email',
            'Last Blood Pressure Record'
        ];
    }

    /**
     * Customize what is displayed on the report
     * @return array
     */
    public function map($patient): array {
        $bp_record = $patient->bp_records()->orderBy('id', 'desc')->first();
        return [
            ucwords($patient->first_name),
            ucwords($patient->last_name),
            (new \DateTime($patient->birthdate))->format("Y-m-d"),
            $patient->gender,
            $patient->phone,
            $patient->email,
            $bp_record ? $bp_record->bp_render : '',
        ];
    }
}
