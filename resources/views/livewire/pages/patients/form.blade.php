<div>
    @if (!empty($patient->id))
    <h1 class="text-5xl mb-4"> Modifying {{ $patient->fullname }} </h1>
    <div x-data="{ showBpModal:false }">
        <button x-on:click="showBpModal = true"
            class="border py-2 px-4 bg-gray-100">
            Enter Blood Pressure
        </button>
        @if (session()->has('message'))
        <div>
            {{ session('message') }}
        </div>
        @endif
        <div x-show="showBpModal">
            <livewire:components.bp-record.form :patient="$patient"/>
        </div>
    </div>
    @else
    <h1 class="text-5xl mb-4"> Creating New Patient </h1>
    @endif

    <form wire:submit.prevent="savePatient">
        <!-- First Name -->
        <div class="my-2">
            <label for="first-name"> First Name </label>
            <input type="text"
                id="first-name"
                wire:model.defer="patient.first_name">
            @error('patient.first_name')
            <small class="text-red-900"> {{ $message }} </small>
            @enderror
        </div>

        <!-- Last Name -->
        <div class="my-2">
            <label for="last-name"> Last Name </label>
            <input type="text"
                id="last-name"
                wire:model.defer="patient.last_name">
            @error('patient.last_name')
            <small class="text-red-900"> {{ $message }} </small>
            @enderror
        </div>

        <!-- Birthdate -->
        <div class="my-2">
            <label for="birth-date"> Birthdate </label>
            <input type="date"
                id="birth-date"
                wire:model.defer="patient.birthdate">
            @error('patient.birthdate')
            <small class="text-red-900"> {{ $message }} </small>
            @enderror
        </div>

        <!-- Gender -->
        <div class="my-2">
            <label> Gender </label>
            <input type="radio" name="gender[]" id="gender-male" value="M"
                wire:model.defer="patient.gender">
            <label for="gender-male"> Male </label>

            <input type="radio" name="gender[]" id="gender-female" value="F"
                wire:model.defer="patient.gender">
            <label for="gender-female"> Female </label>

            @error('patient.gender')
            <small class="text-red-900"> {{ $message }} </small>
            @enderror
        </div>

        <!-- SSN -->
        <div class="my-2">
            <label for="ssn"> SSN </label>
            <input type="text"
                id="ssn"
                wire:model.defer="patient.ssn">
            @error('patient.ssn')
            <small class="text-red-900"> {{ $message }} </small>
            @enderror
        </div>

        <!-- Phone Number -->
        <div class="my-2">
            <label for="phone"> Phone Number </label>
            <input type="text"
                id="phone"
                wire:model.defer="patient.phone">
            @error('patient.phone')
            <small class="text-red-900"> {{ $message }} </small>
            @enderror
        </div>

        <!-- Email -->
        <div class="my-2">
            <label for="email"> Email </label>
            <input type="email"
                id="email"
                wire:model.defer="patient.email">
            @error('patient.email')
            <small class="text-red-900"> {{ $message }} </small>
            @enderror
        </div>

        <!-- Actions -->
        <div class="my-2">
            <a href="{{ route('app.patients.index') }}"
                class="border py-2 px-3 mr-3 bg-gray-300">
                Cancel
            </a>
            <button class="py-2 px-3 bg-green-300">
                Save
            </button>
        </div>
    </form>
</div>
