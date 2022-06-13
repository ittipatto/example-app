@extends('template')

@section('title', 'Create Content')

@section('content')
    <h1>Create Topic</h1>
    <form action="{{ empty($content->id) ? url('/content') : url('/content/'.$content->id) }}" method="POST">
        @if (!empty($content->id))
            @method('put')
        @endif
        @csrf
        <div class="mb-3">
            <label for="topic" class="form-label">topic</label>
            <input type="text" class="form-control" id="topic" name="topic" value="{{ old('topic', $content->topic) }}">
            @error('topic')
                <div class="invalid-feedback d-block">
                {{ $errors->first('topic') }}
              </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="detail" class="form-label">detail</label>
            <textarea class="form-control" id="detail" rows="1" name="detail" >{{ old('detail', $content->detail) }}</textarea>
            @error('detail')
                <div class="invalid-feedback d-block">
                {{ $errors->first('detail') }}
              </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tag" class="form-label">tag</label>
            <input type="text" class="form-control" id="tag" name="tag" value="{{ old('tag', $content->tag) }}">
            <div class="invalid-feedback d-block">
                {{ $errors->first('tag') }}
              </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Save</button>
        <a href="{{ url('/content') }}" class="btn btn-sm btn-danger" role="botton">Back</a>
    </form>

@endsection
