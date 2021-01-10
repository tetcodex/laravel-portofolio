@extends('layouts.admin')

@section('section')
<a href="/restricted/article/create" class="btn btn-outline-secondary">Add Article</a>
        <div class="card-body">
            @foreach ($data as $article)     
                <h3>{{ ucfirst($article->title) }}</h3>
                <h4>{{ ucfirst($article->subtitle) }}</h4>
                 <p>{{ ucfirst($article->content) }}</p>
                <ul>
                    <li><a href="/restricted/article/{{ $article->id }}/edit" class="btn btn-info btn-sm"> Edit </a></li>
                    <li><a href="/restricted/article/{{ $article->title }}" class="btn btn-info btn-sm"> Read Detail </a></li>
                    <li>
                        <form action="/restricted/article/{{ $article->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </li>
                </ul>
            @endforeach
        </div>
@endsection