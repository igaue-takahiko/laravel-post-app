@extends('Layouts.app')

@section('content')
  <div class="flex justify-center">
    <div class="w-8/12 bg-white p-6 rounded-lg">
      <X-post :post="$post" />
  </div>
@endsection
