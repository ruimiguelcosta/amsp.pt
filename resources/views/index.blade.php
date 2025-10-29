@extends('layouts.app')

@section('content')
<div class="min-h-screen">
    @include('components.navbar')
    @include('components.hero')
    @include('components.solutions')
    @include('components.benefits')
    @include('components.early-access')
    @include('components.contact')
    @include('components.footer')
</div>
@endsection
