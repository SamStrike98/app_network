<x-layout>
    <form action="{{ route('apps.store') }}" method="POST">
        @csrf
  <h2>Create a New App</h2>

  <!-- App Name -->
  <label for="name">App Name:</label>
  <input 
    type="text" 
    id="name" 
    name="name" 
    value="{{ old('name') }}" 
    required
  >

  <!-- App Rating -->
  <label for="rating">App Rating (0-5):</label>
  <input 
    type="number" 
    id="rating" 
    name="rating" 
    value="{{ old('rating') }}"
    required
  >

  <!-- App Description -->
  <label for="description">Description:</label>
  <textarea
    rows="5"
    id="description" 
    name="description" 
    required
  >{{ old('description') }}</textarea>

  <!-- select a Collection -->
  <label for="collection_id">Collection:</label>
  <select id="collection_id" name="collection_id" required>
    <option value="" disabled selected>Select a Collection</option>
    @foreach($collections as $collection)
        <option value="{{ $collection->id }}" {{ $collection->id == old('collection_id') ? 'selected' : '' }}>{{ $collection->name }} </option>
    @endforeach
  </select>

  <button type="submit" class="btn mt-4">Create Collection</button>

  <!-- validation errors -->
  @if ($errors->any())
    <ul class="px-4 py-2 bg-red-100">
        @foreach($errors->all() as $error)
            <li class="my-2 text-red-500">{{ $error }}</li>
        @endforeach
    </ul>
  @endif
      
  
</form>
</x-layout>