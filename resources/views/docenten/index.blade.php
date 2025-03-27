@extends('layouts.app')

@section('content')
    <h1>Docenten en hun vakken</h1>
    <ul>
        @foreach ($docenten as $docent)
            <li>
                <strong>{{ $docent->naam }}</strong> - Hobby: {{ $docent->hobby }}
                <ul>
                    @foreach ($docent->vakken as $vak)
                        <li>{{ $vak->naam }}: {{ $vak->beschrijving }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
@endsection
