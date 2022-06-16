@extends('layouts.app')
@section('content')
                <form action="{{route('register-user')}}" method="post">
                {{@csrf_field()}}
                <div class="form-group">
                    Name : <input type="text" class="form-control" value="{{old('name')}}" name="name"> </br>
                    @error('name')
                    <span class="text-danger">{{$message}}</span><br>
                    @enderror

                    Email : <input type="text" class="form-control" value="{{old('email')}}" name="email"> </br>
                    @error('email')
                    <span class="text-danger">{{$message}}</span><br>
                    @enderror

                    Password: <input type="password" class="form-control" name="password"></br>
                    @error('password')
                    <span class="text-danger">{{$message}}</span><br>
                    @enderror

                    <button class="btn btn-block btn-primary" type="submit">Registration</button>
                </div>
                <br><a href="login">Already Registered !! Login Here.</a>
</form>
@endsection