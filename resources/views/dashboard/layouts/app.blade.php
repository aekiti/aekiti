<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('modules.analytics')
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.nick') }} @yield('title')</title>

  @include('modules.seo')

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{ asset('dashboard') }}/assets/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="{{ asset('dashboard') }}/assets/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

  @stack('css')

  <!-- Argon CSS -->
  <link type="text/css" href="{{ asset('dashboard') }}/css/argon.css" rel="stylesheet">
</head>
<body class="{{ $class ?? '' }}">
  @auth()
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
    @if (!in_array(request()->route()->getName(), ['welcome', 'page.pricing', 'page.lock']))
      @include('dashboard.layouts.navbars.sidebar')
    @endif
  @endauth

  <div class="main-content">
    @include('dashboard.layouts.navbars.navbar')
    @yield('content')
  </div>

  @if(!auth()->check() || in_array(request()->route()->getName(), ['welcome', 'page.pricing', 'page.lock']))
    @include('dashboard.layouts.footers.guest')
  @endif

  <script src="{{ asset('dashboard') }}/assets/jquery/dist/jquery.min.js"></script>
  <script src="{{ asset('dashboard') }}/assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('dashboard') }}/assets/js-cookie/js.cookie.js"></script>
  <script src="{{ asset('dashboard') }}/assets/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="{{ asset('dashboard') }}/assets/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <script src="{{ asset('dashboard') }}/assets/lavalamp/js/jquery.lavalamp.min.js"></script>
  <!-- Optional JS -->
  <script src="{{ asset('dashboard') }}/assets/chart.js/dist/Chart.min.js"></script>
  <script src="{{ asset('dashboard') }}/assets/chart.js/dist/Chart.extension.js"></script>

  @stack('js')

  <!-- dashboard JS -->
  <script src="{{ asset('dashboard') }}/js/argon.js"></script>
  <script src="{{ asset('dashboard') }}/js/demo.min.js"></script>

  <script>
    async function share(title, url, text) {
      $("#share-loader").show();
      if (window.Windows) {
        const DataTransferManager = window.Windows.ApplicationModel.DataTransfer.DataTransferManager;

        const dataTransferManager = DataTransferManager.getForCurrentView();
        dataTransferManager.addEventListener("datarequested", (ev) => {
          const data = ev.request.data;

          data.properties.title = title;
          data.properties.url = url;
          data.setText(text);
        });

        DataTransferManager.showShareUI();

        return true;
      } else if (navigator.share) {
        try {
          await navigator.share({
            title: title,
            url: url,
            text: text,
          });

          return true;
        } catch (err) {
          console.error('There was an error trying to share this content');
          return false;
        }
      }
      $("#share-loader").hide();
    }
  </script>
</body>
</html>
