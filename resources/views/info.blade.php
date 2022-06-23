<a href="{{ route('test') }}">back</a>
<h1>USER:</h1>
<ul>
    @foreach ($users as $item)
        <li>Name: {{ $item['name'] }}</li>
        <li>Surname: {{ $item['surname'] }}</li>
    @endforeach
</ul>
