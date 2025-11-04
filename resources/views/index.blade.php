@extends('layouts.app')

@section('content')
<div class="min-h-screen">
    @include('components.navbar')
    @include('components.hero')
    @include('components.vision')
    @include('components.comparison')
    @include('components.how-it-works')
    @include('components.solutions')
    @include('components.benefits')
    @include('components.privacy')
    @include('components.personalization')
    @include('components.multiple-homes')
    @include('components.sustainability')
    @include('components.early-access')
    @include('components.contact')
    @include('components.footer')
</div>
@endsection
