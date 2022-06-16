
@extends('layouts.app')
@section('content')

                <form action="{{route('login-user')}}" method="post">
                    
                {{@csrf_field()}}
                    <div class="form-group">
                    Email : <input type="text" class="form-control" value="{{old('email')}}" name="email"> </br>
                    @error('email')
                    <span class="text-danger">{{$message}}</span><br>
                    @enderror

                    Password: <input type="password" class="form-control" name="password"></br>
                    @error('password')
                    <span class="text-danger">{{$message}}</span><br>
                    @enderror
                    
                    <button class="btn btn-block btn-primary" type="submit">Log in</button>
                    </div>
                    <br><a href="registration">New user !! Register Here.</a>
</form>
@endsection