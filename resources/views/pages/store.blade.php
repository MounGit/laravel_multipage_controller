@extends('template.main')


@section('title')
  
  @include('partials.partStore.paStoTitle')

@endsection


@section('content')
  
  @include('partials.partStore.paStoSection1')
  @include('partials.partStore.paStoSection2')

@endsection
