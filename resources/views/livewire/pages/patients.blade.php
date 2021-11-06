<div>
    <h1> Patient List </h1>
    
    <p>
        To enter a blood pressure reading for a patient, locate and modify the patient below, then click "Enter Blood Pressure"
    </p>

    <!-- Page Actions -->
    <div>
        <button type="button">
            Download CSV
        </button>
        <button type="button">
            Create New Patient
        </button>
        <a href="{{ route('app.patients.new') }}">
            Create New Patient
        </a>
    </div>

    <!-- Data table -->
    <livewire:components.patients.patient-table/>
</div>
