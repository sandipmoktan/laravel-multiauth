@extends('layouts.app')

@section('content')
<a href="{{ url('/admin/settings') }}">
<button type="button" class="btn btn-default btn-md bg-secondary text-white text-md ">
    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
    settings
  </button></a>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card  p-2">
                <div class="card-header bg-danger text-white">{{ __('Dashboard') }}</div>
                    <h4 > Hi User: {{ Auth::user()->name }}</h4>

                      Admin  Dashboard<br>

                    <a href="{{ url('admin/profile') }}" class="my-4 bg-primary text-white text-center">Profile</a>
                     <div class="card-body text-white bg-info">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
