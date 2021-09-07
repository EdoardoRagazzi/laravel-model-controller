{{------EXTENDS----->Connect Home page with the extension of app.blade.php (structure pages) --}}
@extends('layouts.app')

{{-- Insert section / title / with an expression to app.php with the called variables --}}
@section('title', 'Comics-Laravel')

@section('main')
    <section>
        <div class="home">
            <img src="{{asset('img/main.png')}}" alt="">
        </div>
    </section>

@endsection