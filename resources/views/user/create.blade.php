@extends('layouts.plantillabase')

@section('contenido')
<h2>CREAR USUARIOS</h2>
<form action="/blog/public/user" method="POST">
    @csrf
	<div class="form-group row">
                            <label for="name" class="col-md-1 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-12">
                                <input id="name"  autocomplete="off" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
	
                        <div class="form-group row">
                            <label for="email" class="col-md-1 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-12">
                                <input id="email" autocomplete="off" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-1 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" autocomplete="off" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
    <a href="/blog/public/user" class="btn btn-secondary" tabindex="5">Cancelar</a>
	<button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@endsection