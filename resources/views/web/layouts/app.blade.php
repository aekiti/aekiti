<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('modules.analytics')
  @laravelPWA

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="dns-prefetch" href="https://docs.google.com">
  <meta name="robots" content="index, follow">
  <meta name="googlebot" content="index, follow" />
  <meta name="google" content="translate" />

  <title>{{ Request::is('/') ? config('app.name') : config('app.nick') }} @yield('pageTitle')</title>

  @include('modules.seo')

  <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}">
  <link href='https://fonts.googleapis.com/css?family=Google+Sans:400,500,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="{{ asset('assets/dashboard/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins/pace-theme.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>
<body class="x-hidden has-sticky-header">
  <nav class="navbar navbar-expand-lg fixed-top custom-menu custom-menu__light">
    <div class="container">
      <a class="navbar-brand" href="{{ route('index') }}">
        <img src="{{ asset('assets/images/web/logo-text.png') }}" class="logo-sm" alt="{{ config('app.nick') }}">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="menu-icon__circle"></span>
        <span class="menu-icon">
          <span class="menu-icon__bar"></span>
          <span class="menu-icon__bar"></span>
          <span class="menu-icon__bar"></span>
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        @if (Request::is('offline'))
          <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item"><span class="nav-link">You are Offline</span></li>
          </ul>
        @else
          <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}"><a class="nav-link" href="{{ route('index') }}#overview">Overview</a></li>
            <li class="nav-item"><a href="{{ route('index') }}#technologies" class="nav-link">Technologies</a></li>
            <li class="nav-item {{ Request::is('projects') ? 'active' : '' }}"><a href="{{ route('projects') }}" class="nav-link">Projects</a></li>
            <li class="nav-item"><a href="{{ route('index') }}#workshops" class="nav-link">Workshops</a></li>
            <li class="nav-item"><a href="{{ route('index') }}#team" class="nav-link">Team</a></li>
            <li class="nav-item"><a class="nav-link" href="https://medium.com/@aekiti" target="_blank" rel="follow">Stories</a></li>
          </ul>
          @if (auth()->check())
            <div class="custom-menu__right dropdown">
              <a href="" class="event-btn" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> {{ auth()->user()->name }}</a>
              <div class="dropdown-menu">
                <a href="" class="dropdown-item">
                  <span>{{ __('My profile') }}</span>
                </a>
                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                    <span>{{ __('Logout') }}</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </div>
          @else
            <div class="custom-menu__right">
              <a href="{{ route('register') }}" class="event-btn"><i class="fa fa-users"></i> Become a member</a>
            </div>
          @endif
        @endif
      </div>
    </div>
  </nav>

  @yield('content')

  <footer class="section-spacer footer-section">
    <div class="container">
      <div class="row flex-column-reverse flex-sm-row flex-lg-row">
        <div class="col-md-4 col-12">
          <div class="footer-widget first-of-footer-widget">
            <img src="{{ asset('assets/images/web/footer-logo.png') }}" class="mb-10" alt="{{ config('app.name') }}" width="135">
            <p>{{ config('app.nick') }} &copy; {{ now()->year }} | All Rights Reserved.<br><a href="{{ route('terms') }}">Terms & Condition</a> | <a href="{{ route('privacy') }}">Privacy Policy</a></p>
          </div>
        </div>
        <div class="col-md-8 col-sm-10">
          <div class="row">
            <div class="col-md-4 col-6">
              <div class="footer-widget">
                <h4 class="footer-widget__title">Links</h4>
                <ul class="list-unstyled">
                  <li>
                    <a href="https://www.aeternity.com/" target="_blank" rel="noreferrer">æternity</a>
                  </li>
                  <li>
                    <a href="https://bit.ly/aekiti-dacade" target="_blank" rel="follow">dacade</a>
                  </li>
                  <li>
                    <a href="https://aepps.com" target="_blank" rel="noreferrer">æpps</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-4 col-6">
              <div class="footer-widget">
                <h4 class="footer-widget__title">Connect</h4>
                <ul>
                  <li class="list-unstyled">
                  <li>
                    <a href="https://twitter.com/aternityekiti" target="_blank" rel="follow"><i class="fab fa-twitter"></i> Twitter</a>
                  </li>
                  <li>
                    <a href="https://t.me/aeternityekiti" target="_blank" rel="follow"><i class="fab fa-telegram"></i> Telegram</a>
                  </li>
                  <li>
                    <a href="https://github.com/aekiti" target="_blank" rel="follow"><i class="fab fa-github"></i> GitHub</a>
                  </li>
                  <li>
                    <a href="https://www.youtube.com/channel/UCISZ6H0Zb-ndRLSgcR1sH_g" target="_blank" rel="follow"><i class="fab fa-youtube"></i> YouTube</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="footer-widget">
                <h4 class="footer-widget__title">Contribute</h4>
                <ul class="list-unstyled">
                  <li>
                    <a href="https://github.com/aekiti/aekiti/issues/new?template=documentation-bug.md" target="_blank" rel="noreferrer">File a bug</a>
                  </li>
                  <li>
                    <a href="https://github.com/aekiti/aekiti" target="_blank" rel="noreferrer">View source</a>
                  </li>
                  <li>
                    <a href="javascript:;" onclick="share('{{ config('app.name') }}', '{{ config('app.url') }}', 'Have you been looking for a place you can learn blockchain development for free? If yes, check out {{ config('app.nick') }} now')">Share <i class="fa fa-share-alt"></i></a> <div id="share-loader"><div class="spinner-grow"></div></div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a href="#" id="scroll" style="display: none;"><i class="fa fa-angle-up"></i></a>

  <script>
    function iframeObserverCallback(iframeEntries, observer) {
      iframeEntries.forEach(iframe => {
        if (iframe.isIntersecting && window.matchMedia('(min-width: 450px)').matches) {
          iframe.target.setAttribute('src', iframe.target.dataset.urllink);
          observer.unobserve(iframe.target);
        }
      })
    }
    const iframeObserver = new IntersectionObserver(iframeObserverCallback, { rootMargin: '30px 0px' });
    iframeObserver.POLL_INTERVAL = 200;
    iframeObserver.USE_MUTATION_OBSERVER = false;
    document.querySelectorAll('iframe[data-urllink]').forEach(img => {
      iframeObserver.observe(img);
    });

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

  <script src="{{ asset('assets/js/plugins/pace.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/swiper.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/hammer.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>
