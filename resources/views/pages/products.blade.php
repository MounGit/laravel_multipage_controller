@extends('template.main')


@section('title')

  @include('partials.partProducts.paProTitle')

@endsection


@section('content')

  @include('partials.partProducts.paProSection1')
  @include('partials.partProducts.paProSection2')
  @include('partials.partProducts.paProSection3')

@endsection
