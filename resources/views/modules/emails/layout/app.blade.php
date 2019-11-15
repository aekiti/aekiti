<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>{{ config('app.nick') }} @yield('title')</title>
  <link rel="stylesheet" href="{{ asset('dashboard/assets/@fortawesome/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/assets/foundation-emails.css') }}">
</head>

<body>
  <!-- <style> -->
  <table class="body" data-made-with-foundation>
    <tr>
      <td class="float-center" align="center" valign="top">
        <center data-parsed="">
          @yield('content')
        </center>
      </td>
    </tr>
  </table>
</body>
</html>
