{{-- Html start, head and body start --}}
@extends('layout')
{{-- Content of body --}}
@section('content')
    @include('components.navbar2')
    @include('components.hero')
    @include('components.divider')
    @include('components.products')
    @include('components.divider')
    @include('components.categories')
    {{-- @include('components.about-us') --}}
    {{-- @include('components.stripe') --}}
    {{-- @include('components.clients') --}}
    @include('components.divider')
    @include('carousel.index')
    @include('components.divider')
    @include('components.contact-us')
    {{-- Body end, footer and html end --}}
@endsection
