@extends('web.layouts.app')

@section('pageTitle','- Learn')

@section('content')
  <section id="web" class="section-spacer">
    <header class="section-header text-center">
      <h2 class="section-title">Share experiences and free resources</h2>
    </header>
    <div class="container">
      <div class="row" vocab="https://schema.org/" typeof="BreadcrumbList">
        @foreach ($courses as $course)
          <div class="col-md-4 col-12" property="itemListElement" typeof="ListItem">
            <div class="card course-card" style="width: 22rem;">
              <img property="image" class="card-img-top" src="{{ asset($course->picture) }}" alt="{{ $course->name }}">
              <div class="card-body">
                @if ($course->level == 'Expert')
                  <p class="tagging expert float-right">Expert</p>
                @elseif($course->level == 'Intermediate')
                  <p class="tagging intermediate float-right">Intermediate</p>
                @elseif($course->level == 'Beginner')
                  <p class="tagging beginner float-right">Beginner</p>
                @endif
                <h5 property="name" class="card-title">{{ $course->name }}</h5>
                <p property="description" class="card-text">{{ $course->description }}</p>
                <meta property="position" content="{{ $course->id }}">
                <a property="item" typeof="WebPage" href="{{ $course->link }}" class="button float-right" target="_blank">View course</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection
