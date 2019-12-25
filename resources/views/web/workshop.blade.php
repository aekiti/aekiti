@extends('web.layouts.app')

@section('pageTitle')
- {{ $workshop->title }}
@endsection

@section('content')
  <section id="web" class="section-spacer">
    <header class="section-header text-center">
      <h2 class="section-title">{{ $workshop->title }}</h2>
      <p class="section-subtitle">Date: {{ $workshop->date }}</p>
      <p class="section-subtitle">Time: {{ $workshop->time }}</p>
      <p class="section-subtitle">Venue: {{ $workshop->venue }}</p>
    </header>
    <div class="container">
      @if ($workshop->link == null)
        <p class="text-center">Form Not Available Yet</p>
      @else
        <p class="text-center">The embedded form below may not show well on mobile device. If you are having trouble viewing the form, <a href="{{ $workshop->link }}" target="_blank">click here</a> to open th form in a new windows</p>
        <iframe data-urllink="{{ $workshop->link }}" width="100%" height="500" frameborder="0" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true">Loading....</iframe>
      @endif
    </div>
  </section>
@endsection
