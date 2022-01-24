@extends('layouts.app')

@section('content')
    <Index-Component :allusers="{{ $users }}" authuserid="{{ auth()->id() }}" authuser="{{ auth()->user()->name }}"
        agora_id="{{ env('AGORA_APP_ID') }}"></Index-Component>
@endsection