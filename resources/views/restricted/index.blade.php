@extends('layouts.admin')

@section('section')
    <div class="card-body">
        @foreach ($data as $article)     
                <h3>{{ ucfirst($article->title) }}</h3>
                <h4>{{ ucfirst($article->subtitle) }}</h4>
                <p>{{ ucfirst($article->content) }}</p>
                    <a href="/restricted/article/{{ $article->id }}/edit" class="btn btn-info btn-sm"> Edit </a>
                    <a href="/restricted/article/{{ $article->title }}" class="btn btn-info btn-sm"> Read Detail </a>
        @endforeach
    </div>
@endsection