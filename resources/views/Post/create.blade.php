@extends('layout.main')
@section('content')
<div class="containers">
    <div class="row mt-4">
        <div class="col-2"></div>
        <div class="col-8">
            <form action="{{route('post.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="title">
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Body</label>
                    <input type="text" name="body" class="form-control" id="body">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection()