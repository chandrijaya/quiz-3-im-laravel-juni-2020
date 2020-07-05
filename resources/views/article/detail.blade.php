@extends('layouts.master')

@section('content')
@if ($uid==$article->user_id)
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
    
@endif
<div>
    <h2> {{$article->a_title}}</h2>
    <p style="color:grey; top:0; font-size:12px"> 
        Date created: {{$article->created_at}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Date modified: {{$article->updated_at}}<br>
    </p>
    @foreach ($tags as $key => $tag)
        <a href="#" class="btn btn-primary bg-success">{{$tag->a_tag}}</a>
        
    @endforeach
    <div><?php echo $article->a_content; ?></div>
    <p style="font-size:1px"><br></p> 
    @if ($uid==$article->user_id)
        <a href="../artikel/{{$article->id}}/edit" class="btn btn-primary bg-warning">edit</a>
        <form action="../artikel/{{$article->id}}" method="POST" style="display: inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-primary bg-danger"><i class="fas fa-trash"></i></button>
        </form>
    @endif    
</div>
    


@endsection