@extends('layout.master')

@section('body')
  <x-hero />

  <div class="container">
    <div class="border-dashed"></div>
  </div>

  <x-about-us />

  <x-our-solutions />

  <x-our-services />

  <x-our-latest-works grey />

  <x-our-customers />

  <x-news />

  <x-our-partners />

  <x-cookies-alert />
@endsection
