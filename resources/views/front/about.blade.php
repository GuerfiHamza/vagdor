@extends('layouts.main')

@section('title', 'A propos')

@section('content')

<div class="container mx-auto px-36 py-20">{!! $about->apropos !!}</div>
@stop
