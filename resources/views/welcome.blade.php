@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Control Struture</h1>
            @if(true)
                <p>This is only display if if is true</p>
            @else
                <p>This is only display if if is false</p>
            @endif
            <hr>
            @for($i = 0; $i < 5; $i++)
                <p>{{$i + 1}} Iteration</p>
            @endfor
    </div>
</div>

@endsection