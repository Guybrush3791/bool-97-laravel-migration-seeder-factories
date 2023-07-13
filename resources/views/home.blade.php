@extends("layouts.main-layout")

@section("content")

    <h1>House</h1>
    <ul>
        @foreach ($houses as $house)
            <li>
                {{ $house -> code }}: {{ $house -> type }}
            </li>
        @endforeach
    </ul>

@endsection
