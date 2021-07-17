@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Create New User</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
</div>
</div>
</div>
@if (count($errors) > 0)
<div class="alert alert-danger">
<strong>Whoops!</strong> There were some problems with your input.<br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
{!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Firstname:</strong>
{!! Form::text('firstname', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
    <strong>Lastname:</strong>
{!! Form::text('lastname', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Email:</strong>
{!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
</div>
</div>
<div class="form-group row">
    <label for="pays" class="col-md-4 col-form-label text-md-right">{{ __('Pays') }}</label>

    <div class="col-md-6">
        <select class="form-control" name="pays" id="pays">
            <option value="Bénin">Bénin</option>
            <option value="Togo">Togo</option>
        
          </select>
        
        </div>
        @error('pays')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="numTel" class="col-md-4 col-form-label text-md-right">{{ __('Téléphone') }}</label>
 <div class="col-md-6">
   
    <input type="text" name="numTel" class="form-control" id="numTel" placeholder="Entrez votre numéro de téléphone">
    <span class="text-danger">{{ $errors->first('numTel') }}</span>
 </div>    
    
  </div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Password:</strong>
{!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Confirm Password:</strong>
{!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Role:</strong>
{!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
{!! Form::close() !!}
<p class="text-center text-primary"><small>Tutorial by tutsmake.com</small></p>
@endsection