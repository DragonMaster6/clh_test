<form wire:submit.prevent="saveRecord">
    <!-- Systolic Reading -->
    <div>
        <label for="systolic"> Systolic </label>
        <input type="number" id="systolic" wire:model.defer="record.systolic">
        @error('record.systolic')
        <small class="text-red-900"> {{ $message }} </small>
        @enderror
    </div>

    <!-- Diastolic Reading -->
    <div>
        <label for="diastolic"> Diatolic </label>
        <input type="number" id="diastolic" wire:model.defer="record.diastolic">
        @error('record.diastolic')
        <small class="text-red-900"> {{ $message }} </small>
        @enderror
    </div>

    <!-- Beat per Minute Reading -->
    <div>
        <label for="bpm"> BPM </label>
        <input type="number" id="bpm" wire:model.defer="record.bpm">
        @error('record.bpm')
        <small class="text-red-900"> {{ $message }} </small>
        @enderror
    </div>

    <!-- Actions -->
    <div>
        <button>
            Submit
        </button>
    </div>
</form>
