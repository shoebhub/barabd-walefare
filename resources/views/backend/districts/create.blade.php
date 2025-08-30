@extends('backend.layout.layout')
@section('content')


<div class="content-wrapper">
    <div class="container">
        <h2>{{ isset($district) ? 'Edit District' : 'Create District' }}</h2>

        <form action="{{ isset($district) ? route('district.update', $district->id) : route('district.store') }}" method="POST">
            @csrf
            @if(isset($district)) 
                @method('POST') 
            @endif

            <div class="mb-3">
                <label for="name" class="form-label">District Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $district->name ?? '') }}" required>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">
                {{ isset($district) ? 'Update' : 'Create' }}
            </button>
        </form>
    </div>
</div>



@endsection

