@extends('layouts.app')

@section('content')

    <style>
        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for all buttons */
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
            padding: 14px 20px;
            background-color: #f44336;
        }

        /* Float cancel and signup buttons and add an equal width */
        .cancelbtn, .signupbtn {
            float: left;
            width: 50%;
        }

        /* Add padding to container elements */
        .container {
            padding: 16px;
        }

        /* Clear floats */
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        /* Change styles for cancel button and signup button on extra small screens */
        @media screen and (max-width: 300px) {
            .cancelbtn, .signupbtn {
                width: 100%;
            }
        }
    </style>

    <form method="post" style="border:1px solid #ccc" action="{{ route('register') }}">
        {{ csrf_field() }}

        <div class="container">
            <label><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
            @endif
            <label><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
            @endif
            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            @if ($errors->has('password'))
                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
            @endif
            <label><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="password_confirmation" required>

            <div class="clearfix">
                <button type="submit" class="signupbtn">Register</button>
            </div>
            <a href="{{ route('login') }}">Login</a>
        </div>
    </form>

@endsection
