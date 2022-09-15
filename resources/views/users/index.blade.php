@extends('layouts.master')

@section('content')
    <form action="" autocomplete="off" method="POST">
        @csrf
        <div class="container">
            <div class="row m-4 p-4">
                <div class="col-12 p-4">
                    <div class="form-floating my-4">
                        <input type="text" class="form-control" id="first_name" placeholder="First Name">
                        <label for="first_name">First Name</label>
                        @error('first_name')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-floating my-4">
                        <input type="text" class="form-control" id="last_name" placeholder="Last Name">
                        <label for="last_name">Last Name</label>
                        @error('last_name')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-floating my-4">
                        <input type="email" class="form-control" id="email" placeholder="Email">
                        <label for="email">Email</label>
                        @error('email')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-floating my-4">
                        <input type="password" class="form-control" id="password" placeholder="Password">
                        <label for="password">Password</label>
                        @error('password')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="text-center">
                        <a href="{{ route('user.store') }}" class="btn btn-outline-success fs-5 col-1">register</a>
                    </div>
                </div>
            </div>
        </div>
    </form> 
@endsection
