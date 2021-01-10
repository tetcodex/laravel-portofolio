@foreach ($data as $article)     
                <h3>{{ ucfirst($article->title) }}</h3>
                <h4>{{ ucfirst($article->subtitle) }}</h4>
                    <a href="/restricted/article/{{ $article->id }}/edit" class="btn btn-info btn-sm"> Edit </a>
                    <a href="/restricted/article/{{ $article->title }}" class="btn btn-info btn-sm"> Read Detail </a>
                <p>{{ ucfirst($article->content) }}</p>
                <form action="/restricted/article/{{ $article->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
@endforeach
