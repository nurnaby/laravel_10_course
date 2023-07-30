<h1>Welcome laravel 10</h1>
@php
    $names = ['manik', 'Toron', 'ww'];
@endphp


<ul>
    @foreach ($names as $key => $item)
        <li>{{ ++$key }}-{{ $item }}</li>
    @endforeach


</ul>
