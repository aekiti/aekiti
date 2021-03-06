@extends('dashboard.layouts.app', [
  'title' => __('Story Management'),
  'parentSection' => 'site',
  'elementName' => 'story'
])

@section('pageTitle','ækiti - Story Management')

@section('content')
  @component('dashboard.layouts.headers.auth')
    @component('dashboard.layouts.headers.breadcrumbs')
      <li class="breadcrumb-item"><a href="{{ route('lead.story.index') }}">{{ __('Story Management') }}</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{ __('List') }}</li>
    @endcomponent
  @endcomponent

  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <div class="row align-items-center">
              <div class="col-8">
                <h3 class="mb-0">{{ __('Stories') }}</h3>
                <p class="text-sm mb-0">
                  {{ __('This is an example of story management. This is a minimal setup in order to get started fast.') }}
                </p>
              </div>
              <div class="col-4 text-right">
                <a href="{{ route('lead.story.create') }}" class="btn btn-sm btn-primary">{{ __('Add story') }}</a>
              </div>
            </div>
          </div>

          <div class="col-12 mt-2">
            @include('alerts.success')
            @include('alerts.errors')
          </div>

          <div class="table-responsive py-4">
            <table class="table align-items-center table-flush"  id="datatable-basic">
              <thead class="thead-light">
                <tr>
                  <th scope="col">{{ __('Picture') }}</th>
                  <th scope="col">{{ __('Title') }}</th>
                  <th scope="col">{{ __('Status') }}</th>
                  <th scope="col">{{ __('Category') }}</th>
                  <th scope="col">{{ __('Tags') }}</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($stories as $story)
                  <tr>
                    <td>
                      @if ($story->path() !== "/storage/")
                        <img src="{{ config('app.url') . $story->path() }}" alt="{{ $story->title }}" style="max-width: 100px">
                      @else
                        No Picture
                      @endif
                    </td>
                    <td>{{ $story->title }}</td>
                    <td>
                      @foreach (config('aekiti.stories') as $value => $status)
                        @if ($story->status === $value)
                          {{ $status }}
                        @endif
                      @endforeach
                    </td>
                    <td>{{ $story->category->name }}</td>
                    <td>
                      @foreach ($story->tags as $tag)
                        <span class="badge badge-default" style="background-color:{{ $tag->color }}">{{ $tag->name }}</span>
                      @endforeach
                    </td>
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="{{ route('lead.story.show', $story) }}">{{ __('Show') }}</a>
                          <a class="dropdown-item" href="{{ route('lead.story.edit', $story) }}">{{ __('Edit') }}</a>
                          <form action="{{ route('lead.story.destroy', $story) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="button" class="dropdown-item" onclick="confirm('{{ __("Are you sure you want to delete this story?") }}') ? this.parentElement.submit() : ''">
                              {{ __('Delete') }}
                            </button>
                          </form>
                        </div>
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    @include('dashboard.layouts.footers.auth')
  </div>
@endsection

@push('css')
  <link rel="stylesheet" href="{{ asset('assets/dashboard') }}/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('assets/dashboard') }}/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('assets/dashboard') }}/plugins/datatables.net-select-bs4/css/select.bootstrap4.min.css">
@endpush

@push('js')
  <script src="{{ asset('assets/dashboard') }}/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="{{ asset('assets/dashboard') }}/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{ asset('assets/dashboard') }}/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="{{ asset('assets/dashboard') }}/plugins/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
  <script src="{{ asset('assets/dashboard') }}/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="{{ asset('assets/dashboard') }}/plugins/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="{{ asset('assets/dashboard') }}/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="{{ asset('assets/dashboard') }}/plugins/datatables.net-select/js/dataTables.select.min.js"></script>
@endpush
