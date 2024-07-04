@extends('layouts.layout')

@section('content')

@foreach 
($erreur as $er)
    <p>{{ $er->lang }} </p>
@endforeach

@section
