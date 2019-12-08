@extends('modules.emails.layout.app')

@section('pageTitle','- Welcome - {{ $user->name }}')

@section('content')
<table class="spacer float-center">
  <tbody>
    <tr>
      <td height="16px" style="font-size:16px;line-height:16px;">&#xA0;</td>
    </tr>
  </tbody>
</table>
<table align="center" class="container header float-center">
  <tbody>
    <tr>
      <td>
        <table class="row">
          <tbody>
            <tr>
              <th class="small-12 large-12 columns first last">
                <table>
                  <tr>
                    <th>
                      <h1 class="text-center">Welcome to {{ config('app.name') }}({{ config('app.nick') }})</h1>
                      <center data-parsed="">
                        <table align="center" class="menu text-center float-center">
                          <tr>
                            <td>
                              <table>
                                <tr>
                                  <th class="menu-item float-center"><a href="https://twitter.com/aternityekiti"><i class="fab fa-twitter"></i> Twitter</a></th>
                                  <th class="menu-item float-center"><a href="https://t.me/aeternityekiti"><i class="fab fa-telegram"></i> Telegram</a></th>
                                  <th class="menu-item float-center"><a href="https://www.youtube.com/channel/UCISZ6H0Zb-ndRLSgcR1sH_g"><i class="fab fa-youtube"></i> YouTube</a></th>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </center>
                    </th>
                    <th class="expander"></th>
                  </tr>
                </table>
              </th>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>
<table align="center" class="container body-border float-center">
  <tbody>
    <tr>
      <td>
        <table class="row">
          <tbody>
            <tr>
              <th class="small-12 large-12 columns first last">
                <table>
                  <tr>
                    <th>
                      <table class="spacer">
                        <tbody>
                          <tr>
                            <td height="32px" style="font-size:32px;line-height:32px;">&#xA0;</td>
                          </tr>
                        </tbody>
                      </table>
                      <center data-parsed=""> <img src="{{ config('app.url') }}/images/web/footer-logo.png" align="center" alt="{{ config('app.nick') }}" class="float-center" width="135"> </center>
                      <table class="spacer">
                        <tbody>
                          <tr>
                            <td height="16px" style="font-size:16px;line-height:16px;">&#xA0;</td>
                          </tr>
                        </tbody>
                      </table>
                      <h4>Hello {{ $user->name }},</h4>
                      <p>Welcome to {{ config('app.name') }}. You have successfuly registered as a member of {{ config('app.nick') }} with {{ $user->email }} as your email address.</p>
                      <p>
                        <strong>What To Do Now</strong>
                        <ul>
                          <li>Verify Your Email Address through the verification email sent to {{ $user->email }}</li>
                          <li>Complete your profile</li>
                          <li>Connect with us</li>
                        </ul>
                      </p>
                      <p></p>
                      <center data-parsed="">
                        <table align="center" class="menu float-center">
                          <tr>
                            <td>Use the links below to contact {{ config('app.nick') }} æmbassador if need be. Once again welcome to {{ config('app.name') }}
                              <table>
                                <tr>
                                  <th class="menu-item float-center"><a href="https://emmanueljet.me"><i class="fa fa-globe"></i> emmanueljet.me</a></th>
                                  <th class="menu-item float-center"><a href="https://t.me/emmanueljet"><i class="fab fa-telegram"></i> Telegram</a></th>
                                  <th class="menu-item float-center"><a href="https://twitter.com/emmanueljet_"><i class="fab fa-twitter"></i> Twitter</a></th>
                                  <th class="menu-item float-center"><a href="https://wa.me/2348128411482"><i class="fab fa-whatsapp"></i> WhatsApp</a></th>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </center>
                    </th>
                    <th class="expander"></th>
                  </tr>
                </table>
              </th>
            </tr>
          </tbody>
        </table>
        <table class="spacer">
          <tbody>
            <tr>
              <td height="16px" style="font-size:16px;line-height:16px;">&#xA0;</td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>
@endsection
