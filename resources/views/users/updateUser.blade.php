@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">User</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
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
                                    <form action="{{ route('users.updateProfile') }}" method="POST" role="form" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="firstname" class="col-md-4 col-form-label text-md-right">Firstname</label>
                                            <div class="col-md-6">
                                                <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname', auth()->user()->firstname) }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lastname" class="col-md-4 col-form-label text-md-right">Lastname</label>
                                            <div class="col-md-6">
                                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname', auth()->user()->lastname) }}">
                                            </div>
                                        </div>
             
                                        <div class="form-group row">
                                            <label for="pays" class="col-md-4 col-form-label text-md-right">Pays</label>
                                            <div class="col-md-6">
                                                <input id="pays" type="text" class="form-control" name="pays" value="{{ old('pays', auth()->user()->pays) }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="numTel" class="col-md-4 col-form-label text-md-right">Numero Tel</label>
                                            <div class="col-md-6">
                                                <input id="numTel" type="text" class="form-control" name="numTel" value="{{ old('numTel', auth()->user()->numTel) }}">
                                            </div>
                                        </div>
                    
                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                                            <div class="col-md-6">
                                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email', auth()->user()->email) }}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="profile_image" class="col-md-4 col-form-label text-md-right">Profile Image</label>
                                            <div class="col-md-6">
                                                <input id="profile_image" type="file" class="form-control" name="profile_image">
                                                @if (auth()->user()->image)
                                                    <code>{{ auth()->user()->image }}</code>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0 mt-5">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">Update User</button>
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