@extends('layouts.app')


@section('content')

    <div id="app">
 

         @if (Auth::check())
             

        
        <example-component :user = "{{Auth::user()}}"></example-component>
       

         
       
        @endif
       
    </div>

@endsection
