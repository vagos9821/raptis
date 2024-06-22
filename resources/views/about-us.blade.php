{{-- Html start, head and body start --}}
@extends('layout')
{{-- Content of body --}}
@section('content')
    @include('components.navbar')
    @include('components.about-us')
    {{-- Body end, footer and html end --}}
@endsection
