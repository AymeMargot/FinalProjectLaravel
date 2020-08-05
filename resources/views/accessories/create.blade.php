@extends('layouts.templateFrm')
@section('title', 'Bookings')
@section('content')

<div class="container">
<form action="{{ url('/accessories') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('accessories.form',['mode'=>'adding'])
    
</form>
</div>
@endsection