@extends('template')

@section('title', 'Login')

@section('content')

    <div class="card mt-5 w-50 mx-auto">
        <h1 class="mx-auto">Login System</h1>
        <div class="card-body">
            <form action="{{ url('login') }}" method="POST">
                @csrf()
                <div class="mb-3 row">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Email :</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="exampleFormControlInput1" name="email"
                            value="{{ old('email') }}">
                    </div>
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('email') }}
                      </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password :</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" name="password" value="">
                    </div>
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('password') }}
                      </div>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="{{ url('/') }}" class="btn btn btn-danger" role="botton">Back</a>
            </form>
        </div>
    </div>

@endsection
