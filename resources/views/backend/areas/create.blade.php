@extends('backend.layout.layout')
@section('content')


<div class="content-wrapper">
    <div class="container">
        <h2>{{ isset($area) ? 'Edit Area' : 'Create Area' }}</h2>

        <form action="{{ isset($area) ? route('area.update', $area->id) : route('area.store') }}" method="POST">
            @csrf
            @if(isset($area)) 
                @method('POST') 
            @endif

            <div class="mb-3">
                <label for="area_name" class="form-label">Area Name</label>
                <input type="text" class="form-control" id="area_name" name="area_name" value="{{ old('area_name', $area->area_name ?? '') }}" required>
                @error('area_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">
                {{ isset($area) ? 'Update' : 'Create' }}
            </button>
        </form>
    </div>
</div>



@endsection

