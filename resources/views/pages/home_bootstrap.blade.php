@extends('layouts.bootstrap')

@section('content')
<div class="col-md-8">
    <div class="card">
        <div class="card-header">
            <h3>Introduction: Bootstrap Layout</h3>
        </div>
        <div class="card-body">

            @livewire('counter',['defaultLayout'=>'bootstrap'])
        </div>
    </div>
</div>
@endsection
