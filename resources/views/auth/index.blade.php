@extends('layout.main')
@section('content')
    {{--    @if(session()->has('alert') ) --}}{{--2 chi usuli if ni ichiga yozishni $alert = session()->pull('alert'); keyin shuni alish chun {{session()->pull('aleart')}} demaymisda shunday $alert dessak bo'lgani--}}
    {{--    <div class="alert alert-primary" role="alert">--}}
    {{--        {{ session()->pull('alert') }}--}}
    {{--    </div>--}}
    {{--    @endif--}}
    @if($create = session()->pull('store'))
        <div class="alert alert-primary" role="alert">
            {{$create}}
        </div>
    @endif


    <div class="containers">
        <div class="row mt-4">
            <div class="col-2"></div>
            <div class="col-8">

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        {{--                        <th scope="col">Password</th>--}}
                        {{--                        <th scope="col">Edit</th>--}}
                        {{--                        <th scope="col">Delete</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email}}</td>
                            {{--                            <td>{{ $user->password}}</td>--}}

                            {{--                            <td><a class="btn btn-primary" href="{{ route('post.edit',$post->id)}}">Edit</a></td>--}}
                            {{--                            <td>--}}

                            {{--                                <form action="{{route('post.delete',$post->id)}}" method="POST">--}}
                            {{--                                    @csrf--}}
                            {{--                                    @method('DELETE')--}}
                            {{--                                    <button class="btn btn-danger" type="submit">Delete</button>--}}
                            {{--                                </form>--}}
                            {{--                            </td>--}}
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection()
