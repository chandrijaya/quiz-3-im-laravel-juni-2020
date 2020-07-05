@extends('layouts.master')

@section('content')
<h1>Buat Artikel Baru</h1>
<div class="ml-3 mr-3">
    <form action="/artikel" method="POST">
        @csrf
        <div class="form-group">
            <label for="article">Judul</label>
            <input type="text" class="form-control" name="a_title" placeholder="Buat judul artikel" id="a_title">
            <label for="article">Tag</label>
            <input type="text" class="form-control" name="a_tag" placeholder="Buat satu tag artikel" id="a_tag">
            <label for="article">Artikel</label>
            <textarea type="text" class="form-control" name="a_content" placeholder="Buat artikel" id="a_content"></textarea>
            
            <p><br></p>
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="../../artikel" class="btn btn-primary bg-danger">Cancel</a>
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