<a href="/books/create">Create book</a>
@foreach ($allBooks as $book)
    <h1>This is book {{ $book->id }}</h1>
    <p>{{ $book -> title}}</p>
    <p>{{ $book -> author}}</p>
    <a href="/books/delete/{{$book -> id}}">adwawd</a>
    @endforeach 