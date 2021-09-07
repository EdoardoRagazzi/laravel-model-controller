{{------EXTENDS----->Connect Home page with the extension of app.blade.php (structure pages) --}}
@extends('layouts.app')

{{-- Insert section / title / with an expression to app.php with the called variables --}}
@section('title', 'Comics-Laravel')

@section('main')
<section>
    <div class="jumbotron">
        
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="slot-container justify-content-center row">
            @foreach ($comics as $card)
                <div class="slot col-2 d-inline-block">
                    <div class="img">
                        <img src="{{$card['thumb']}}" alt="{{$card['title']}}">
                    </div>
                    <div class="text">
                        <h5>{{ $card['series']}} </h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
    

@endsection