@extends('web.layouts.app')

@section('content')
  <header id="hero" class="hero">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-sm-6">
          <div class="hero-content">
            <div class="hero-title__group">
              <div class="hero-title">
                <h2 class="zuri">{{ config('app.name') }}<br> {{ config('app.nick') }}.</h2>
              </div>
              <div class="Hero--Subtitle">
                <p class="lead">
                  ækiti is a community of developers, writers, digital designers & entrepreneurs interested in learning about and developing solutions using <span class="text-primary">æternity</span> technologies.
                </p>
              </div>
            </div>
            <a class="hero-button" href="{{ route('register') }}"><i class="fa fa-users"></i> Become a member</a>
          </div>
        </div>
        <div class="col-12 col-sm-5 ml-auto ml-pic">
          <div class="hero-figure">
            <img src="{{ asset('images/web/diversity.png') }}" class="img-fluid w-100" alt="Illustration of diversity in our community">
          </div>
        </div>
      </div>
    </div>
  </header>

  <section id="overview" class="section-spacer">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-12">
          <div class="feature-card">
            <div class="feature-card__body">
              <i class="fa fa-rocket ghost-blue"></i>
              <h4 class="feature-title">Concept of ækiti</h4>
              <p>The ækiti is a grassroots community through which æternity in partnaship with dacade provides blockchain development skills for all, towards employability.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="feature-card">
            <div class="feature-card__body">
              <i class="fa fa-lightbulb ghost-green"></i>
              <h4 class="feature-title">Why ækiti?</h4>
              <p>For all to learn æternity blockchain development skills, solve problems through technology and inspire them to be world class developers and changemakers.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="feature-card m-0">
            <div class="feature-card__body">
              <i class="fa fa-users ghost-red"></i>
              <h4 class="feature-title">Target audience</h4>
              <p>ækiti activities are targeted at any software developer who want to learn æternity blockchain development skills &amp; work to solve real-life problems.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="opportunities" class="section-spacer section-opp">
    <div class="container">
      <header class="section-header text-center">
        <h2 class="section-title-custom">Opportunities ækiti provide developers with</h2>
      </header>
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <ul>
                <li> ◾&nbsp; Grow their knowledge on æternity technologies and more through peer to peer workshops and events.</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <ul>
                <li> ◾&nbsp; Gain relevant industry experience by solving problems for local organizations with technology based solutions.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <ul>
                <li> ◾&nbsp;Showcase their prototypes and solutions to their local community and industry leaders.</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <ul>
                <li> ◾&nbsp; Getting inspiration to become world-class developers and changemakers from sharing others' success stories.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="technologies" class="section-spacer bg-very__gray">
    <div class="container">
      <header class="section-header text-center">
        <h2 class="section-title">Technologies we're excited about</h2>
        <p class="section-subtitle">Opportunities to learn & access deep technical content.</p>
        <br>
      </header>
      <div class="row align-items-center">
        <div class="col-sm-6">
          <div class="feature-list-image">
            <img src="{{ asset('images/web/technologies/smart-contracts.png') }}" class="img-fluid" alt="Smart Contracts">
          </div>
        </div>
        <div class="col-sm-5 ml-auto">
          <div class="feature-list-wrapper">
            <div class="content-header">
              <h2 class="content-title">Smart Contracts</h2>
              <p>æternity powers Turing-complete smart contracts that allow the execution of credible transactions without third parties and intermediaries.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-spacer">
    <div class="container">
      <div class="row flex-column-reverse flex-sm-row align-items-cengit ter">
        <div class="col-sm-5 mr-auto">
          <div class="feature-list-wrapper">
            <div class="content-header">
              <h2 class="content-title">State Channels</h2>
              <p>State channels make it possible to execute smart contracts off-chain. The blockchain enforces the smart contract code, only in the case of a disagreement between the contracting parties.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="feature-list-image">
            <img src="{{ asset('images/web/technologies/state-channels.png') }}" alt="State Channels" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="hip" class="section-spacer bg-very__gray">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-sm-6">
          <div class="feature-list-image">
            <img src="{{ asset('images/web/technologies/oracles.png') }}" class="img-fluid" alt="Oracles">
          </div>
        </div>
        <div class="col-sm-5 ml-auto">
          <div class="feature-list-wrapper">
            <div class="content-header">
              <h2 class="content-title">Oracles</h2>
              <p>An oracle connects real-world data with smart contracts. æternity's oracles are truly first-class objects on the blockchain.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-spacer">
    <div class="container">
      <div class="row flex-column-reverse flex-sm-row align-items-cengit ter">
        <div class="col-sm-5 mr-auto">
          <div class="feature-list-wrapper">
            <div class="content-header">
              <h2 class="content-title">Naming Systems</h2>
              <p>Naming System enables user-friendly identities for blockchain entities, such as user accounts, oracles, contracts, etc.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="feature-list-image">
            <img src="{{ asset('images/web/technologies/naming-system.png') }}" class="img-fluid" alt="Naming Systems">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="workshops" class="section-spacer workshops-section bg-very__gray">
    <div class="container">
      <header class="section-header text-center">
        <h2 class="section-title">Events & Workshops</h2>
        <p class="section-subtitle">Come learn, share and connect with us in person.</p>
      </header>
      <div class="workshops-type-switch">
        <ul class="nav nav-pills justify-content-center js-tabs">
          <li class="nav-item">
            <a class="nav-link active" href="#upcoming">Upcoming Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#past">Past Events</a>
          </li>
        </ul>
      </div>
      <div class="tab-content">
        <div class="tab-pane active" id="upcoming" role="tabpanel" aria-labelledby="upcoming">
          <div class="row">
            {{-- <div class="message-wrapper col-12">
              <h2 class="message-text">Loading...</h2>
            </div> --}}
            <div class="col-md-4 col-12">
              <div class="card event-card">
                <img class="card-img-top" src="{{ asset('images/web/logo-white.png') }}" width="10%" height="10%" alt="Study Jæm - Ekiti State">
                <div class="card-body">
                  <p class="tagging beginner float-right">Beginner</p>
                  <h5 class="card-title">Study Jæm - Ekiti State</h5>
                  <table>
                    <tr>
                      <td width="15%" class="text-blue"><i class="far fa-calendar-alt"></i></td>
                      <td>13<sup>th</sup> January - 27<sup>th</sup> March 2020</td>
                    </tr>
                    <tr>
                      <td class="text-red"><i class="fa fa-map-marker-alt"></i></td>
                      <td>TechHub EKSU</td>
                    </tr>
                    <tr>
                      <td class="text-green"><i class="far fa-clock"></i></td>
                      <td>09:00hrs - 12:00hrs(WAT)</td>
                    </tr>
                  </table>
                  <a href="" class="button float-right">Register</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-12">
              <div class="card event-card">
                <img class="card-img-top" src="{{ asset('images/web/logo-white.png') }}" width="10%" height="10%" alt="Study Jæm - Ondo State">
                <div class="card-body">
                  <p class="tagging beginner float-right">Beginner</p>
                  <h5 class="card-title">Study Jæm - Ondo State</h5>
                  <table>
                    <tr>
                      <td width="15%" class="text-blue"><i class="far fa-calendar-alt"></i></td>
                      <td>11<sup>th</sup> May - 31<sup>st</sup> July 2020</td>
                    </tr>
                    <tr>
                      <td class="text-red"><i class="fa fa-map-marker-alt"></i></td>
                      <td>Premier Hub</td>
                    </tr>
                    <tr>
                      <td class="text-green"><i class="far fa-clock"></i></td>
                      <td>09:00hrs - 12:00hrs(WAT)</td>
                    </tr>
                  </table>
                  <a href="" class="button float-right">Register</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-12">
              <div class="card event-card">
                <img class="card-img-top" src="{{ asset('images/web/logo-white.png') }}" width="10%" height="10%" alt="Study Jæm Hackæthon">
                <div class="card-body">
                  <p class="tagging expert float-right">jæmers</p>
                  <h5 class="card-title">Study Jæm Hackæthon</h5>
                  <table>
                    <tr>
                      <td width="15%" class="text-blue"><i class="far fa-calendar-alt"></i></td>
                      <td>10<sup>th</sup> - 15<sup>th</sup> August 2020</td>
                    </tr>
                    <tr>
                      <td class="text-red"><i class="fa fa-map-marker-alt"></i></td>
                      <td>Delight Hotel & Suite</td>
                    </tr>
                    <tr>
                      <td class="text-green"><i class="far fa-clock"></i></td>
                      <td>09:00hrs - 12:00hrs(WAT)</td>
                    </tr>
                  </table>
                  <a href="" class="button float-right">Register</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="past" role="tabpanel" aria-labelledby="past">
          <section id="hi" class="section-spacer bg-very__gray">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-sm-6">
                  <div class="feature-list-image">
                      <iframe width="500" height="274" data-urllink="https://www.youtube.com/embed/kvcyprm_fzU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
                </div>
                <div class="col-sm-5 ml-auto">
                  <div class="feature-list-wrapper">
                    <div class="content-header">
                      <h2 class="content-title">Blockchain Road Trip</h2>
                      <hr>
                      <h6>DATE : 20<sup>th</sup> - 27<sup>th</sup> September 2019</h6>
                      <h6>VENUE : West Region, Nigeria</h6>
                      <p>An outreach program, to promote awareness on the issue of digital asset technology and provide a platform for discussing the crypto asset space.</p>
                    </div>
                    <a href="#" class="past-event" target="_blank" rel="noopener">EVENT PHOTOS&nbsp;&nbsp;<i class="fa fa-camera"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="section-spacer">
            <div class="container">
              <div class="row flex-column-reverse flex-sm-row align-items-cengit ter">
                <div class="col-sm-5 mr-auto">
                  <div class="feature-list-wrapper">
                    <div class="content-header">
                      <h2 class="content-title">First Virtual Meetup</h2>
                      <hr>
                      <h6>DATE : 6<sup>th</sup> July 2019</h6>
                      <h6>WHERE : Ekiti, Nigeria.</h6>
                      <p>At this first virtual meetup, we went through Introduction to æternity, Introduction to Smart Contracts and Getting Started with State Channels</p>
                    </div>
                    <a href="https://speakerdeck.com/emmanueljet" class="past-event" target="_blank" rel="noopener">EVENT SLIDES&nbsp;&nbsp;<i class="fab fa-slideshare"></i></a>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="feature-list-image">
                    <iframe width="500" height="274" data-urllink="https://www.youtube.com/embed/fJQb97D3WFY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>

  <section id="team" class="section-spacer team-section">
    <div  class="container">
      <header class="text-center section-header">
        <h2 class="section-title">Meet ækiti Team</h2>
        <p class="section-subtitle">Passionate staff driving the success of the program.</p>
      </header>
      <div class="container-fluid">
        <div id="carouselExample" class="carouselPrograms carousel slide" data-ride="carousel" data-interval="false">
          <div class="carousel-inner row w-100 mx-auto" role="listbox">
            <div class="carousel-item col-md-4 col-15 active">
              <div class="card event-card">
                <div class="card hovercard">
                  <div class="cardheader"></div>
                  <div class="avatar">
                    <img src="{{ asset('images/web/team/moritz.png') }}" alt="mentor avatar">
                  </div>
                  <div class="info">
                    <div class="title">
                      <h5>Moritz Stellmacher</h5>
                      <p>Online Facilitator</p>
                    </div>
                    <div class="desc">Mobile and Web developer</div>
                    <div class="desc">Open source enthusiast</div>
                    <div class="desc">CEO, dacade</div>
                  </div>
                  <div class="bottom">
                    <ul class="social-list__inline mt-10">
                      <li>
                        <a href="https://twitter.com/Fransunisoft" target="_blank" rel="noopener">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="https://github.com/Fransunisoft" target="_blank" rel="noopener">
                          <i class="fab fa-github"></i>
                        </a>
                      </li>
                      <li>
                        <a href="https://www.linkedin.com/in/oluwaseyiayodele" target="_blank" rel="noopener">
                          <i class="fab fa-linkedin"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-4 col-15">
              <div class="card event-card">
                <div class="card hovercard">
                  <div class="cardheader"></div>
                  <div class="avatar">
                    <img src="{{ asset('images/web/team/emmanueljet.png') }}" alt="lead avatar">
                  </div>
                  <div class="info">
                    <div class="title">
                      <h5>Emmanuel Joseph (JET)</h5>
                      <p>ækiti æmbassador</p>
                    </div>
                    <div class="desc">Software, and Blockchain Developer</div>
                    <div class="desc">Open source enthusiast</div>
                    <div class="desc">A Software Developer who is in love with Community Building</div>
                  </div>
                  <div class="bottom">
                    <ul class="social-list__inline mt-10">
                      <li>
                        <a href="https://twitter.com/emmanuelJet_" target="_blank" rel="noopener">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="https://github.com/emmanuelJet" target="_blank" rel="noopener">
                          <i class="fab fa-github"></i>
                        </a>
                      </li>
                      <li>
                        <a href="https://www.linkedin.com/in/jet774" target="_blank" rel="noopener">
                          <i class="fab fa-linkedin"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-4 col-15">
              <div class="card event-card">
                <div class="card hovercard">
                  <div class="cardheader"></div>
                  <div class="avatar">
                    <img src="{{ asset('images/web/team/avatar.png') }}" alt="co-organizer avatar">
                  </div>
                  <div class="info">
                    <div class="title">
                      <h5>Jesulonimi Akingbesote</h5>
                      <p>Facilitator</p>
                    </div>
                    <div class="desc">Mobile and Web developer</div>
                    <div class="desc">Open source enthusiast</div>
                    <div class="desc">Community mentor</div>
                  </div>
                  <div class="bottom">
                    <ul class="social-list__inline mt-10">
                      <li>
                        <a href="https://twitter.com/ProfileName" target="_blank" rel="noopener">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="https://github.com/ProfileName" target="_blank" rel="noopener">
                          <i class="fab fa-github"></i>
                        </a>
                      </li>
                      <li>
                        <a href="https://www.linkedin.com/in/ProfileName" target="_blank" rel="noopener">
                          <i class="fab fa-linkedin"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev" style="cursor:default;">
            <span class="carousel-control-prev-i fa fa-angle-left" aria-hidden="true" style="cursor:pointer;"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next" style="cursor:default;">
            <span class="carousel-control-next-i fa fa-angle-right" aria-hidden="true" style="cursor:pointer;"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section id="faqs" class="section-spacer section-faq">
    <div class="container">
      <header class="section-header text-center">
        <h2 class="section-title">Frequently Asked Questions</h2>
      </header>
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Who can become a member?</h5>
              <p>The community is open to any writer, digital designer, entrepreneurs, and developer who want to further their skills.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">How frequently do events and workshops occur?</h5>
              <p>We hold workshops and showcases at TechHub EKSU & we would recommend you to join our community by becoming a <a href="{{ route('register') }}">member</a> to get updates.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">What should I carry when attending a workshop?</h5>
              <p>We recommend you carry with you a notebook, pen and a laptop because more often than not we make our hands dirty with code. Most importantly, carry along a healthy dose of curiosity and enthusiasm.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Who should I reach out to if I have any questions?</h5>
              <p>If you have any questions or comments, please don't hesitate to contact us by clicking the button below. We would be happy to stay engaged via email even after the event</p>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-40 text-center">
        <a href="mailto:dsceksu@gmail.com" target="_blank" class="hero-button">Send us an email</a>
      </div>
    </div>
  </section>
@endsection