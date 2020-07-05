@extends('partials.master')
@section('title', 'Artikel')
@section('desc', 'Menampilkan list artikel')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="container">
        @foreach ($data as $artikel)
            <h4> <a href="{{ route('artikel.show',$artikel->id) }}">{{ $artikel->name }}</a> </h4>
            <p> {{ $artikel->desc }} </p>
            <hr>
            <a class="btn btn-primary btn-sm" style="float: left" href="{{ route('artikel.edit',$artikel->id) }}">Edit</a>
            <div class="bullet"></div>
            <form action="{{ route('artikel.destroy', $artikel->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
            </form>
            <hr>

        @endforeach
    </div>
@endsection
