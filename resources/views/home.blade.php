@extends('layouts.app')

<!-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <form action="{{route("logout")}}" method="POST">
                   @csrf
                   <button class="dropdown-item" style="cursor:pointer">Sign Out</button>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection -->
