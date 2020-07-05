@extends('layouts.master')

@section('content')
<h1>Buat Artikel Baru</h1>
<div class="ml-3 mr-3">
    <form action="/artikel/{{$article->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="article">Judul</label>
            <input type="text" class="form-control" name="a_title" value="{{$article->a_title}}" placeholder="Buat judul artikel" id="a_title">
            <label for="article">Artikel</label>
            <textarea type="text" class="form-control" name="a_content" placeholder="Buat artikel" id="a_content">{{$article->a_content}}</textarea>
            <p><br></p>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="../../artikel/{{$article->id}}" class="btn btn-primary bg-danger">Cancel</a>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#a_content').summernote();
    });
</script>
@endpush