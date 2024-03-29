<div>
  <x-slot:title>{{ $client->full_name }} - Кастомные поля</x-slot:title>
  <x-slot:brand>{{ $client->full_name }} - Кастомные поля</x-slot:brand>
  
  <button wire:click="addInput" class="btn btn-success mt-3">Добавить</button>

  @foreach ($inputs as $key => $item)
  <div class="row g-3 mt-1">
    <div class="col">
      <input type="text" id="input_{{ $key }}_name" wire:model.defer="inputs.{{ $key }}.name" class="form-control @error('inputs.'.$key.'.name') is-invalid @enderror" placeholder="Название поля" autocomplete="off">      
      @error('inputs.'.$key.'.name') <span class="invalid-feedback">{{ $message }}</span> @enderror      
    </div>
    <div class="col">
      <input type="text" id="input_{{ $key }}_value" wire:model.defer="inputs.{{ $key }}.value" class="form-control @error('inputs.'.$key.'.value') is-invalid @enderror" placeholder="Значение поля" autocomplete="off">
      <span class="invalid-feedback"> @error('inputs.'.$key.'.value') {{ $message }} @enderror </span>
    </div>    
    <div class="col">
      <button wire:click="removeInput({{ $key }})" class="btn btn-danger">Удалить</button>
    </div>
  </div>  
  @endforeach  

  <button wire:click="confirm" class="btn btn-primary mt-3 d-block">Подтвердить</button>  
</div>
