@extends('layouts.master')

@section('content')


@if (ucfirst(Auth()->user()) != "")
<div class="card-body text-center">
    Login as <h3 class="text-success">{{ ucfirst(Auth()->user()->name) }}</h3>
</div>

<div class="card-body text-center">
    <a href="../artikel/create" class="btn btn-primary bg-success">Buat Artikel</a>
</div>

<div class="card-body text-center">
    <a class="small" href="{{url('logout')}}"><h5 class="text-danger">Logout</h5></a>
</div>
@endif

<h1>Blog Artikel</h1>

@foreach($articles as $key => $article)
    <h2><a href="../artikel/{{$article->id}}">{{$article->a_title}}</a></h2>
    <p> {{Str::limit(strip_tags($article->a_content),300, '......')}}</p>
    <p><br></p>

@endforeach

@endsection
@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush 