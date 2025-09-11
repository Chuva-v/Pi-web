@extends('layout.app')
@section('content')
@livewire('show',['id'=>$produto->id])
@endsection