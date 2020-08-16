@extends('layouts.app')

@section('content')



<div class="d-flex flex-row">
  <div class="bg-light" >
       @include ('_sidebar-links')
  </div>
  <div class="htwt bg-dark">
     <div class="border border-gray-300 rounded-lg">
        <div class="flex p-4">
          <a class="font-bold text-lg mb-4 block" href="#">Primary</a>
          <a class="font-bold text-lg mb-4 block" href="#">Social</a>
          <a class="font-bold text-lg mb-4 block" href="#">Promotions</a>
        </div>
          @include('_mail')
          @include('_mail')
          @include('_mail')
          @include('_mail')
          @include('_mail')
          @include('_mail')

     </div>
  </div>
</div>
@endsection
