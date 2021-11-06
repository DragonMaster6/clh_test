<div>
    <h1 class="text-5xl"> Patient List </h1>
    
    <p class="my-4">
        To enter a blood pressure reading for a patient, locate and modify the patient below, then click "Enter Blood Pressure"
    </p>

    <!-- Page Actions -->
    <div class="my-4">
        <a href="{{ route('app.patients.new') }}" class="border py-2 px-4 bg-gray-100">
            Create New Patient
        </a>
    </div>

    <!-- Data table -->
    <livewire:components.patients.patient-table/>
</div>
