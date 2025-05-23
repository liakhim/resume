@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $title }}</h1>
        <p>{{ $content }}</p>
        <a href="{{ route('pdf.download') }}" class="btn btn-primary">Скачать PDF</a>
        <a href="{{ route('pdf.stream') }}" class="btn btn-secondary">Просмотреть в браузере</a>
    </div>
@endsection
