@extends('layouts.app')

@section('content')

    <div class = "appreciation-container">

        <div class = "appreciation-details">
            
            <p>Thank you for trusting us with your hair</p>
            <p>An email with all the appointment details will be sent</p>
            <button class = "btn-appreciate"> <a href = "{{url('/dashboard')}}">Home</a></button>
           
            <button class = "btn-appreciate">
                <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class = "btn-appreciate">
                Logout
                </a>
        
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </button>
           
        </div>

    </div>
    
@endsection