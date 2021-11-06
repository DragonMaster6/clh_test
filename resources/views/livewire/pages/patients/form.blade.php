<div>
    @if (!empty($patient->id))
    <h1> Modifying {{ $patient->fullname }} </h1>
    @else
    <h1> Creating New Patient </h1>
    @endif

    <form wire:submit.prevent="savePatient">
        <!-- First Name -->
        <div>
            <label for="first-name"> First Name </label>
            <input type="text"
                id="first-name"
                wire:model.defer="patient.first_name">
            @error('patient.first_name')
            <small class="text-red-900"> {{ $message }} </small>
            @enderror
        </div>

        <!-- Last Name -->
        <div>
            <label for="last-name"> Last Name </label>
            <input type="text"
                id="last-name"
                wire:model.defer="patient.last_name">
            @error('patient.last_name')
            <small class="text-red-900"> {{ $message }} </small>
            @enderror
        </div>

        <!-- Birthdate -->
        <div>
            <label for="birth-date"> Birthdate </label>
            <input type="date"
                id="birth-date"
                wire:model.defer="patient.birthdate">
            @error('patient.birthdate')
            <small class="text-red-900"> {{ $message }} </small>
            @enderror
        </div>

        <!-- Gender -->
        <div>
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
        <div>
            <label for="ssn"> SSN </label>
            <input type="text"
                id="ssn"
                wire:model.defer="patient.ssn">
            @error('patient.ssn')
            <small class="text-red-900"> {{ $message }} </small>
            @enderror
        </div>

        <!-- Phone Number -->
        <div>
            <label for="phone"> Phone Number </label>
            <input type="text"
                id="phone"
                wire:model.defer="patient.phone">
            @error('patient.phone')
            <small class="text-red-900"> {{ $message }} </small>
            @enderror
        </div>

        <!-- Email -->
        <div>
            <label for="email"> Email </label>
            <input type="email"
                id="email"
                wire:model.defer="patient.email">
            @error('patient.email')
            <small class="text-red-900"> {{ $message }} </small>
            @enderror
        </div>

        <!-- Actions -->
        <div>
            <a href="{{ route('app.patients.index') }}">
                Cancel
            </a>
            <button>
                Save
            </button>
        </div>
    </form>
</div>
