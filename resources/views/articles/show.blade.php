@extends('partials.master')
@section('title', 'Show Artikel')
@section('desc', 'Melihat Detail Artikel')

@section('content')
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Judul:</strong>
        {{ $artikel->name }}
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Slug:</strong>
        {{ $artikel->slug }}
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Isi:</strong>
        {{ $artikel->desc }}
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Tag:</strong>
        <button class="btn btn-primary"> {{ $artikel->tag }}</button>
    </div>
</div>
@endsection
