@extends('layouts.app')

@section('content')
    <h1> Home </h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, optio. Dolores soluta vitae deleniti deserunt! Blanditiis ut fuga aliquam omnis officiis sapiente, quas assumenda atque. Nulla mollitia dolor suscipit sed.</p>
    @endsection

@section('sidebar')
    @parent
    <p>This is appended on home</p>
@endsection
