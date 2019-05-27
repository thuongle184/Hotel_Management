@extends('_layouts.app')

@section('content')
  <div id="page-wrapper">
    <h1>WELCOME!</h1>
  </div>

  @auth
    <h3>{!! Auth::user()->first_name !!}</h3>
  @else
    <h3>TITI</h3>
  @endauth
@endsection
