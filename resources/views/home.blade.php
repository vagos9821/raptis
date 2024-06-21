{{-- Html start, head and body start --}}
@extends('layout')
{{-- Content of body --}}
@section('content')
    @include('components.navbar')
    @include('components.hero')
    @include('components.divider')
    @include('components.products')
    {{-- @include('components.categories') --}}
    {{-- @include('components.divider') --}}
    @include('components.about-us')
    @include('components.stripe')
    {{-- @include('components.clients') --}}
    @include('components.divider')
    @include('components.contact-us')
    @include('components.divider')
    @include('carousel.index')
    {{-- Body end, footer and html end --}}
@endsection
