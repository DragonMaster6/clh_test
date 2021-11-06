<?php

namespace App\Http\Livewire\Components\BpRecord;

use App\Models\Patient;
use App\Models\BpRecord;

use Livewire\Component;

class Form extends Component {
    public Patient $patient;
    public BpRecord $record;

    protected $rules = [
        'record.systolic' => 'required|numeric',
        'record.diastolic' => 'required|numeric',
        'record.bpm' => 'required|numeric',
    ];

    public function mount() {
        $this->record = new BpRecord();
    }

    public function resetRecord() {
        $this->record = new BpRecord();
    }

    public function render() {
        return view('livewire.components.bp-record.form');
    }

    public function saveRecord() {
        $this->validate();

        $this->patient->bp_records()->save($this->record);
        $this->resetRecord();

        session()->flash('message', 'Successfully added record');
    }
}
