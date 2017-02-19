@extends('layouts.app')

@section('content')
    <!-- Sidenav/menu -->
    @include('Nav')
    <div class="w3-main w3-white" style="margin-left:260px">
        <!-- Contact -->
        @include('Forms.AddForm')
        <hr>

        <div class="w3-container">
            <a href="#">
                <h4>
                    <strong>sdfsdfdsf</strong>
                </h4>
            </a>
            <p>165151616</p>
            <p>
                <a class="w3-btn w3-ripple w3-red" href="#">Delete </a>
                <a class="w3-btn w3-ripple w3-blue" href="#">Arhiv</a>
            </p>
        </div>
        <hr>
    </div>
@endsection