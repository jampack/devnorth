@php
  $breadcrumb = [
  ["title" => "Home", "url" => route('landing'), "is_active" => false],
  ["title" => "Contact Us", "url" => route('contact_us'), "is_active" => true],
];
@endphp

@extends('layout.master')

@section('body')

  <x-breadcrumb title="Contact Us" :breadcrumbs="$breadcrumb"/>

  <x-contact-us />

@endsection
