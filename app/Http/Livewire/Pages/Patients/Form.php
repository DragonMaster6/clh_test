<?php

namespace App\Http\Livewire\Pages\Patients;

use App\Models\Patient;

use Livewire\Component;

class Form extends Component {
    public Patient $patient;

    protected $rules = [
        'patient.first_name' => 'required|string',
        'patient.last_name' => 'required|string',
        'patient.birthdate' => 'required|date',
        'patient.gender' => 'required|in:M,Y',
        'patient.ssn' => 'required|integer|numeric',
        'patient.phone' => 'required',
        'patient.email' => 'required|email',
    ];

    public function mount() {
        if (!isset($this->patient))
            $this->patient = new Patient();
    }

    public function render() {
        return view('livewire.pages.patients.form')
            ->extends('main')
            ->section('page-content');
    }

    /**
     * Validates and saves existing/new patients
     */
    public function savePatient() {
        $this->validate();

        $this->patient->save();

        return redirect()->route('app.patients.index');
    }
}