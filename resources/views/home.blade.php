@extends('layouts.app')

@section('content')
    <!-- Sidenav/menu -->
    @include('Nav')


        <!-- Top menu on small screens -->
        <header class="w3-container w3-top w3-hide-large w3-black w3-xlarge w3-padding-16">
            <span class="w3-left">Rental</span>
            <a href="javascript:void(0)" class="w3-right w3-opennav" onclick="w3_open()"><i class="fa fa-bars"></i></a>
        </header>

        <!-- Overlay effect when opening sidenav on small screens -->
        <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu"
             id="myOverlay"></div>
    <!-- !PAGE CONTENT! -->

    @include('ListContainer')


    <!-- Update Modal -->
    @include('UpdateContainer')



@endsection
