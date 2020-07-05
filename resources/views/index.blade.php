@extends('partials.master')
@section('title', 'Home')
@section('desc', 'Menampilkan ER Diagram')

@section('content')
    <p>ER Diagram</p>
    <img src="kuis3_erd.png" alt="img">

@endsection
@push('src')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush
