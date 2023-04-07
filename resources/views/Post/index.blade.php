@extends('layout.main')
@section('content')
<div class="containers">
    <div class="row mt-4">
        <div class="col-2"></div>
        <div class="col-8">

            <table class="table">
                <a class="btn btn-info" href="{{route('post.create')}}">Create</a>
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Body</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td><a class="btn btn-primary" href="{{ route('post.edit',$post->id)}}">Edit</a></td>
                    <td>

                        <form action="{{route('post.delete',$post->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection()
