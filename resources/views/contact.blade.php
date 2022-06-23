<a href="{{ route('test') }}">back</a>
<h1>CONTACT:</h1>
<ul>
    @foreach ($contact as $item)
        <li>Email: {{ $item['email'] }}</li>
        <li>Phone: {{ $item['phone'] }}</li>
    @endforeach
</ul>
