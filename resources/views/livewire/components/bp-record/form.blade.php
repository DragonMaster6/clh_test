<form wire:submit.prevent="saveRecord">
    <!-- Systolic Reading -->
    <div class="py-2">
        <label for="systolic"> Systolic </label>
        <input type="number" id="systolic" wire:model.defer="record.systolic">
        @error('record.systolic')
        <small class="text-red-900"> {{ $message }} </small>
        @enderror
    </div>

    <!-- Diastolic Reading -->
    <div class="py-2">
        <label for="diastolic"> Diatolic </label>
        <input type="number" id="diastolic" wire:model.defer="record.diastolic">
        @error('record.diastolic')
        <small class="text-red-900"> {{ $message }} </small>
        @enderror
    </div>

    <!-- Beat per Minute Reading -->
    <div class="py-2">
        <label for="bpm"> BPM </label>
        <input type="number" id="bpm" wire:model.defer="record.bpm">
        @error('record.bpm')
        <small class="text-red-900"> {{ $message }} </small>
        @enderror
    </div>

    <!-- Actions -->
    <div class="py-2">
        <button class="border py-2 px-4 bg-green-300">
            Submit
        </button>
    </div>
</form>
