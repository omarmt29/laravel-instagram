@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">


        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

         
            <h2>Admin</h2>
        </div>
    </div>
</div>
@endsection