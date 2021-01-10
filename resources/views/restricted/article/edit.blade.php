@extends('layouts.admin')

@section('section')
  <div class="card-body">
    <form action="/restricted/article/{{ $article->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
          <label for="article-title" class="col-form-label card-title">Title </label>
          <input type="text" class="form-control" id="article-name" name="title"
                 value="{{ old('title') ? old('title') : $article->title }}">
          @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
            <label for="article-subtitle" class="col-form-label card-title">Sub Title </label>
            <input type="text" class="form-control" id="article-subtitle" name="subtitle"
                   value="{{ old('subtitle') ? old('subtitle') : $article->subtitle }}">
            @error('subtitle')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>    
        <div class="form-group">
          <label for="article-content" class="col-form-label card-title">Content</label>
          <textarea class="form-control" id="article-content" name="content">{{ old('content') ? old('content') : $article->content }}</textarea>
          @error('content')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <button class="btn btn-outline-primary">Publish</button>
        </div>
      </form>
  </div>    
@endsection
