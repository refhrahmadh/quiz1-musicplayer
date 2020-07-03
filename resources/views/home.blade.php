@extends('layouts.app')
@section('content')

<style>
     body {
                background-color: #282828;
                color: #000200;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .card {

                font-family: 'Nunito', sans-serif;
                font-weight: 200;
            }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">DASHBOARD</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <img src="image/das.jpg" class="img">
                    <br>
                    <br>
                    You are logged in!
                    <br>
                    HAPPY LISTENING SONG HERE
                    <br>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
