{{-- Html start, head and body start --}}
@extends('layout')
{{-- Content of body --}}
@section('content')
    @include('components.navbar')
    @include('components.our-products.show-all-products')
    {{-- Body end, footer and html end --}}
@endsection
