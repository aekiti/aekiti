<meta name="author" content="Emmanuel Joseph(JET)"/>
<meta name="title" content="{{ Request::is('/') ? config('app.name') : config('app.nick') }} @yield('title')">
<meta name="keywords" content="aekiti, aternity ekiti, {{ config('app.name') }}, {{ config('app.nick') }}, aeternity developers, aekiti developers, ækiti developers, devstudyjæm, devstudyjam, developer study jæm, developer study jam, ekiti state, ekiti, ondo, ondo state, techhub eksu, techhub, students, technology, nigeria, emmanueljet, emmanuel joseph, jet, emmanuel joseph(jet)"/>
<meta name="description" content="ækiti is a community of developers, writers, digital designers & entrepreneurs interested in learning about and developing solutions using æternity technologies">

<!-- Google -->
<meta name="google-site-verification" content="{{ config('services.google.site_id') }}" />
<link itemprop="url" rel="canonical" href="{{ url()->current() }}" />
<meta itemprop="name" content="{{ Request::is('/') ? config('app.name') : config('app.nick') }} @yield('title')">
<meta itemprop="description" content="ækiti is a community of developers, writers, digital designers & entrepreneurs interested in learning about and developing solutions using æternity technologies">
<meta itemprop="image" content="{{ config('app.url') }}/images/web/logo-white.png">

<!-- Facebook -->
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:title" content="{{ Request::is('/') ? config('app.name') : config('app.nick') }} @yield('title')" />
<meta property="og:description" content="ækiti is a community of developers, writers, digital designers & entrepreneurs interested in learning about and developing solutions using æternity technologies" />
<meta property="og:image" content="{{ config('app.url') }}/images/web/logo-white.png" />
<meta property="og:image:type" content="image/png" />
<meta property="og:image:alt" content="{{ config('app.nick') }}" />

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ url()->current() }}">
<meta name="twitter:site" content="@aeternityekiti">
<meta name="twitter:creator" content="@emmanuelJet_">
<meta name="twitter:title" content="{{ Request::is('/') ? config('app.name') : config('app.nick') }} @yield('title')">
<meta name="twitter:description" content="ækiti is a community of developers, writers, digital designers & entrepreneurs interested in learning about and developing solutions using æternity technologies">
<meta name="twitter:image:src" content="{{ config('app.url') }}/images/web/logo-white.png">
<meta name="twitter:image:alt" content="{{ config('app.nick') }}">
