<div class="row align-items-center justify-content-lg-between">
  <div class="col-xl-6">
    <div class="copyright text-center text-lg-left text-muted">
      {{ config('app.nick') }} &copy; 2019 - {{ now()->year }} <a href="{{ route('terms') }}" class="font-weight-bold ml-1">Terms & Condition</a> &amp; <a href="{{ route('privacy') }}" class="font-weight-bold ml-1">Privacy Policy</a>
    </div>
  </div>
  <div class="col-xl-6">
    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
      <li class="nav-item">
        <a href="https://www.youtube.com/channel/UCISZ6H0Zb-ndRLSgcR1sH_g" class="nav-link" target="_blank" rel="follow"><i class="fab fa-youtube"></i> YouTube</a>
      </li>
      <li class="nav-item">
        <a href="https://twitter.com/AeternityEkiti" class="nav-link" target="_blank" rel="follow"><i class="fab fa-twitter"></i> Twitter</a>
      </li>
      <li class="nav-item">
        <a href="https://telegram.me/aekiti" class="nav-link" target="_blank" rel="follow"><i class="fab fa-telegram"></i> Telegram</a>
      </li>
      <li class="nav-item">
        <a href="https://instagram.com/aekitiaembassy" class="nav-link" target="_blank" rel="follow"><i class="fab fa-instagram"></i> Instagram</a>
      </li>
      <li class="nav-item">
        <a href="https://facebook.com/aeternityekiti" class="nav-link" target="_blank" rel="follow"><i class="fab fa-facebook"></i> Facebook</a>
      </li>
      <li class="nav-item d-sm-none">
        <a href="javascript:;" class="nav-link" onclick="share('{{ config('app.name') }}', '{{ config('app.url') }}', 'Looking for a place you can learn blockchain development for free? If yes, check out {{ config('app.nick') }} now')">Share <i class="fa fa-share-alt"></i></a><div id="share-loader"><div class="spinner-grow"></div></div>
      </li>
    </ul>
  </div>
</div>
