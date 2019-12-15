@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add User</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="container">
                            <div class="row">
                                <div class="col-7">
                                    @if ($errors->any())
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>
                                                        {{ $error }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form action="{{ url('add_user') }}" method="POST" role="form" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="name" class="col-md-2 col-form-label text-md-right">Name</label>
                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="surname" class="col-md-2 col-form-label text-md-right">Surname</label>
                                            <div class="col-md-6">
                                                <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-md-2 col-form-label text-md-right">Email</label>
                                            <div class="col-md-6">
                                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label for="password" class="col-md-2 col-form-label text-md-right">Password</label>
                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="rating" class="col-md-2 col-form-label text-md-right">Rating</label>
                                            <div class="col-md-6">
                                                <input id="rating" type="text" class="form-control" name="rating" value="{{ old('rating') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="profile_image" class="col-md-2 col-form-label text-md-right">Image</label>
                                            <div class="col-md-6">
                                                <input id="picture" type="file" class="" name="picture">
                                                
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0 mt-5">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">Update Profile</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
