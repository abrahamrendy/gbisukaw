@include('header')

<style>
    @import url("https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Montserrat:wght@700&display=swap");

    :root {
      /* Colors */
      /*--brand-color: hsl(46, 100%, 50%);*/
      --brand-color: hsl(0, 0%, 100%);
      --black: hsl(0, 0%, 0%);
      --white: hsl(0, 0%, 100%);
      /* Fonts */
      --font-title: "Montserrat", sans-serif;
      --font-text: "Lato", sans-serif;
    }

    /* RESET */

    /* Box sizing rules */
    *,
    *::before,
    *::after {
      box-sizing: border-box;
    }

    /* Remove default margin */
    body,
    h2,
    p {
      margin: 0;
    }

    hr {
      margin-top: 10px;
      margin-bottom: 10px;
    }

    h2 {
      font-size: 2.5rem;
      font-family: var(--font-title);
      color: var(--white);
      line-height: 1.1;
    }

    p {
      font-family: var(--font-text);
      font-size: 1.5rem;
      line-height: 1.5;
      color: var(--white);
    }

    article {
        margin-top: 50px;
    }

    .flow > * + * {
      margin-top: var(--flow-space, 1em);
    }

    .p-0 {
      padding: 0px;
    }

    .pr-0 {
      padding-right: 0px;
    }

    .pl-0 {
      padding-left: 0px;
    }

    .nav>li {
      display: inline-block;
      margin-top: 15px;
    }

    .nav>li>a {
      color: #fff;
    }

    .nav .active, .nav .active>a{
      background-color: #bbb !important;
      color: #121212 !important;
    }

    .nav-button {
      background-color: #404040;
      padding: 5px 10px;
      color: #fff;
      font-size: 15px;
      font-weight: 500;
      text-transform: uppercase;
      text-decoration: none;
      border-radius: 50px;
      transition: all 0.5s;
    }

    .nav-button:hover, .nav>li>a:hover {
      background-color: #bbb !important;
      color: #121212 !important;
    }

    .nav>li>a:hover, .nav>li>a:focus {
      background-color: transparent !important;
    }

    .tab-content .branch {
      display: none !important;
    }

    .tab-content .active {
      display: block !important;
    }

    /* CARD COMPONENT */

    .card {
      display: grid;
      place-items: center;
      /*width: 80vw;
      max-width: 21.875rem;
      height: 28.125rem;*/
      overflow: hidden;
      border-radius: 0.625rem;
      box-shadow: 0.25rem 0.25rem 0.5rem rgba(0, 0, 0, 0.25);
    }

    .card > * {
      grid-column: 1 / 2;
      grid-row: 1 / 2;
    }

    .card__background {
      object-fit: cover;
      max-width: 100%;
      height: 100%;
    }

    .card__content {
      --flow-space: 0.9375rem;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      align-self: flex-end;
      height: 80%;
      width: 100%;
      padding: 12% 1.25rem 1.875rem;
      background: linear-gradient(
        180deg,
        hsla(0, 0%, 0%, 0) 0%,
        hsla(0, 0%, 0%, 0.3) 10%,
        hsl(0, 0%, 0%) 100%
      );
    }

    .card__content--container {
      --flow-space: 1.25rem;
    }

    .card__title {
      position: relative;
      width: fit-content;
      width: -moz-fit-content; /* Prefijo necesario para Firefox  */
    }

    .card__title::after {
      content: "";
      position: absolute;
      height: 0.3125rem;
      width: calc(100% + 1.25rem);
      bottom: calc((1.25rem - 0.5rem) * -1);
      left: -1.25rem;
      background-color: var(--brand-color);
    }

    .card__button {
      padding: 0.75em 1.6em;
      width: fit-content;
      width: -moz-fit-content; /* Prefijo necesario para Firefox  */
      font-variant: small-caps;
      font-weight: bold;
      border-radius: 0.45em;
      border: none;
      background-color: var(--brand-color);
      font-family: var(--font-title);
      font-size: 1.125rem;
      color: var(--black);
    }

    .card__button:focus {
      outline: 2px solid black;
      outline-offset: -5px;
    }

    .white-button {
      padding: 3px 6px !important;
      font-size: 10px !important;
    }

    .card__desc__top{
      font-size: 12px !important;
    }

    @media (any-hover: hover) and (any-pointer: fine) {
      .card__content {
        transform: translateY(62%);
        transition: transform 500ms ease-out;
        transition-delay: 500ms;
      }

      .card__title::after {
        opacity: 0;
        transform: scaleX(0);
        transition: opacity 1000ms ease-in, transform 500ms ease-out;
        transition-delay: 500ms;
        transform-origin: right;
      }

      .card__background {
        transition: transform 500ms ease-in;
      }

      .card__content--container > :not(.card__title),
      .card__button {
        opacity: 0;
        transition: transform 500ms ease-out, opacity 500ms ease-out;
      }

      .card:hover,
      .card:focus-within {
        transform: scale(1.05);
        transition: transform 500ms ease-in;
      }

      .card:hover .card__content,
      .card:focus-within .card__content {
        transform: translateY(0);
        transition: transform 500ms ease-in;
      }

      .card:focus-within .card__content {
        transition-duration: 0ms;
      }

      .card:hover .card__background,
      .card:focus-within .card__background {
        transform: scale(1.3);
        webkit-filter: blur(4px); /* Chrome, Safari, Opera */
        filter: blur(4px);
      }

      .card:hover .card__content--container > :not(.card__title),
      .card:hover .card__button,
      .card:focus-within .card__content--container > :not(.card__title),
      .card:focus-within .card__button {
        opacity: 1;
        transition: opacity 500ms ease-in;
        transition-delay: 1000ms;
      }

      .card:hover .card__title::after,
      .card:focus-within .card__title::after {
        opacity: 1;
        transform: scaleX(1);
        transform-origin: left;
        transition: opacity 500ms ease-in, transform 500ms ease-in;
        transition-delay: 500ms;
      }
    }
</style>

<div id="what-we-do">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-text">
                    <h2>LOCATION</h2>
                </div>
            </div>
            <!-- <div class="col-md-6">
                <div class="right-image">
                    <img src="img/what-we-do-right-image.png" alt="">
                </div>
            </div> -->
        </div>
    </div>
</div>

<div id="our-pastor" class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <ul class="nav" role="tablist">
            <li class="nav-item nav-button active">
                <a class="nav-link" data-toggle="tab" href="#tab_1" role="tab">
                    Bandung
                </a>
            </li>

            <li class="nav-item nav-button">
              <!-- <div class="black-button"> -->
                <a class="nav-link" data-toggle="tab" href="#tab_2" role="tab">
                  Jawa Barat (Luar Bandung)
                </a>
              <!-- </div> -->
            </li>

            <li class="nav-item nav-button">
              <!-- <div class="black-button"> -->
                <a class="nav-link" data-toggle="tab" href="#tab_3" role="tab">
                  Jawa Tengah & Yogyakarta
                </a>
              <!-- </div> -->
            </li>

            <li class="nav-item nav-button">
              <!-- <div class="black-button"> -->
                <a class="nav-link" data-toggle="tab" href="#tab_4" role="tab">
                  Jawa Timur
                </a>
              <!-- </div> -->
            </li>

            <li class="nav-item nav-button">
              <!-- <div class="black-button"> -->
                <a class="nav-link" data-toggle="tab" href="#tab_5" role="tab">
                  Luar Pulau Jawa
                </a>
              <!-- </div> -->
            </li>
          </ul>
        </div>
      </div>
      <div class="tab-content">
        <div class="branch row active in fade" id="tab_1">
            <!-- ARUNA -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/Aruna copy.jpg"
                    alt="Aruna Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Aruna</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. Aruna No.19, Bandung</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">08.00 | 10.15 | 12.34 | 15.00 | 17.00 </span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-6 col-sm-6 col-xs-6 pr-0">
                              <div class="white-button" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.aruna1</span>
                              </div>
                              <div class="white-button" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">08993228226</span>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 pr-0">
                              <div class="white-button" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">gbiaruna2</span>
                              </div>
                              <div class="white-button" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">08993228226</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-6 col-sm-6 col-xs-6 pr-0">
                              <div class="white-button" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">gbiaruna3pm </span>
                              </div>
                              <div class="white-button" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">089606033888</span>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 pr-0">
                              <div class="white-button" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.aruna5</span>
                              </div>
                              <div class="white-button" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">085795200925</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- BARSI -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/Baranangsiang copy.jpg"
                    alt="Baranangsiang Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Baranangsiang</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Ruko ITC Kosambi, Jl. Baranang Siang No.8, Bandung</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">07.30 | 10.00 | 13.00 | 15.00 | 17.00 </span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-6 col-sm-6 col-xs-6 pr-0">
                              <div class="white-button" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.gbi.baranangsiang</span>
                              </div>
                              <div class="white-button" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">087819717181</span>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 pr-0">
                              <div class="white-button" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">nextgen.baranangsiang</span>
                              </div>
                              <div class="white-button" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">087819717181</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-6 col-sm-6 col-xs-6 pr-0">
                              <div class="white-button" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.barsi3pm</span>
                              </div>
                              <div class="white-button" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">082115252533</span>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 pr-0">
                              <div class="white-button" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.bec</span>
                              </div>
                              <div class="white-button" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">087823420950</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- DAGO -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/Dago copy.jpg"
                    alt="Dago Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Dago</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Hotel Patra, Jl. Ir. H. Juanda No.132, Bandung</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">09.00 | 11.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-6 pr-0">
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.dago</span>
                              </div>
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">082240034001</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- GEDEBAGE -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/Gedebage copy.jpg"
                    alt="Gedebage Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Gedebage</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Ruang Serbaguna Eloah Function Hall,Metro Indah Mall, Jl. Soekarno Hatta No.590, Bandung</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">09.00 | 10.45 | 12.30 | 17.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-6 pr-0">
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">gbigedebage</span>
                              </div>
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">081386826787</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- HARRIS POP -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/Harris Pop copy.jpg"
                    alt="Harris Pop Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Festival City Link</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Festival City Link Mall, Jl. Peta No.241, Bandung</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">08.00 | 09.30 | 11.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-6 pr-0">
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.harrisyello</span>
                              </div>
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">08566204451</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- ISTANA REGENSI -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/Istana Regensi copy.jpg"
                    alt="Istana Regensi Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Istana Regensi</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. Sukawarna, Komp. Istana Regency 1 Kav. C3 No. 1, Bandung</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">08.00 | 10.00 | 12.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.regency.pagi</span>
                              </div>
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">085798617774</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- PVJ -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/Paris van Java copy.jpg"
                    alt="Paris van Java Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Paris van Java</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Mall Paris van Java, Jl. Sukajadi No.137-139, Bandung</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">08.30 | 10.30 | 13.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">everyone_connected</span>
                              </div>
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">08991889900</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- PISET -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/Piset copy.jpg"
                    alt="Piset Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Piset</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. Pelajar Pejuang 45 No.119, Bandung</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">08.30 | 10.30 | 13.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">gbipiset</span>
                              </div>
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">0818629293</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">gbipiset.community</span>
                              </div>
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">081313132681</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- PULLMAN -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/Pullman copy.jpg"
                    alt="Pullman Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Pullman</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Pullman Hotel Level 3 - Gastro, Jl. Diponegoro No.27, Bandung</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">09.30 | 16.30</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">gbi.lightofgod</span>
                              </div>
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">082116610650</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- YELLO -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/Yello copy.jpg"
                    alt="Yello Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Yello</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Hotel Yello Lantai 4. Paskal Hyper Square 23, Jl. Pasir Kaliki No.25, Bandung</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">08.00 | 10.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div>
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">08566204451</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>
            
        </div>

        <!-- JAWA BARAT -->
        <div class="branch row fade" id="tab_2">
            <!-- CHAMPION - CIKAMPEK -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/CHAMPION CIKAMPEK.jpg"
                    alt="CHAMPION CIKAMPEK Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Champion - Cikampek</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. Ir. H. Juanda Gg. Beringin No. 39, Desa Sarimulya, Kec. Kota Baru, Karawang, Jawa Barat</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">08.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">081398836433</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- CIBUBUR - HARVEST CITY -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/CIBUBUR HARVEST CITY.jpg"
                    alt="CIBUBUR HARVEST CITY Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Cibubur - Harvest City</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Ruko Madison Square Blok SHC 2 No.6-9, Kota Wisata Cibubur, Cileungsi, Bogor - Jawa Barat</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">07.30</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">021-22997799, 22997988, 22997999</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- CIBUBUR - LEGENDA WISATA -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/CIBUBUR LEGENDA WISATA.jpg"
                    alt="CIBUBUR LEGENDA WISATA Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Cibubur - Legenda Wisata</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Ruko Little China JA 3 Legenda Wisata, Cibubur, Jawa Barat</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">08.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">021-22997799, 22997988, 22997999</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- CIBUBUR - MADISON SQUARE -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/CIBUBUR MADISON SQUARE.jpg"
                    alt="CIBUBUR MADISON SQUARE Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Cibubur - Madison Square</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Ruko Madison Square, Blok SHC 2 No. 6-9 Kota Wisata, Cibubur - Jakarta Timur</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">07.30 | 09.30 | 17.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">021-22997799, 22997988, 22997999</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- CIBUBUR - GRAND NUSA INDAH -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/CIBUBUR GRAND NUSA INDAH.jpg"
                    alt="CIBUBUR GRAND NUSA INDAH Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Cibubur - Grand Nusa Indah</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Ruko Grand Nusa Indah Blok A No.7, Perumahan Grand Nusa Indah, Cileungsi, Bogor - Jawa Barat</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">06.30 | 08.30 | 10.30</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">021-22997799, 22997988, 22997999</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- CIBUBUR - RAFFLES HILLS 1 -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/CIBUBUR RAFLES HILS 1.jpg"
                    alt="CIBUBUR RAFFLES HILLS 1 Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Cibubur - Raffles Hills 1</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Ruko Raffles Hills Blok AA No.1, Jl. Alternatif Depok - Jawa Barat</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">07.00 | 09.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">021-22997799, 22997988, 22997999</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- CIBUBUR - RAFFLES HILLS 2 -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/CIBUBUR RAFLES HILS 2.jpg"
                    alt="CIBUBUR RAFFLES HILLS 2 Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Cibubur - Raffles Hills 2</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Ruko Raffles Hills Blok AA No.1, Jl. Alternatif Depok - Jawa Barat</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">11.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">021-22997799, 22997988, 22997999</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Cibubur - Restorasi Pondok Daud -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/CIBUBUR RESTORASI PONDOK DAUD.jpg"
                    alt="CIBUBUR RESTORASI PONDOK DAUD Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Cibubur - Restorasi Pondok Daud</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Ruko Concordia Travalgar SRB 7-8, Kab Bogor - Jawa Barat</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">10.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">081310075417</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- CIMAHI -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/CIMAHI.jpg"
                    alt="CIMAHI Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Cimahi</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Pusdikpal Jl. Pasir Kumeli Cimahi, Bandung, Jawa Barat</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">07.30 | 09.15</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">08122345991</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- CIPARAY -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/CIPARAY.jpg"
                    alt="CIPARAY Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Ciparay</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Kompleks Baranangsiang Indah (KBSI) Blok E2 No.18 Ciparay - Jawa Barat</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">10.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">08122345991</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Cirebon Pekiringan -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/CIREBON PEKIRINGAN.jpg"
                    alt="CIREBON PEKIRINGAN Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Cirebon Pekiringan</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Gedung Graha Cirebon Lt.5, Jl. Pembangunan Raya, Cirebon - Jawa Barat</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">09.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">087740595552</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Dayeuh Kolot -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/DAYEUH KOLOT.jpg"
                    alt="DAYEUH KOLOT Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Dayeuh Kolot</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. Raya Dayeuh Kolot No. 293, Bandung - Jawa Barat 40375</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">10.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">08122262570</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Garut -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/GARUT.jpg"
                    alt="GARUT Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Garut</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. Ciledug No. 158, Garut - Jawa Barat 44115</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">08.00 | 10.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">0262-241173</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Haurgeulis -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/HAURGEULIS.jpg"
                    alt="HAURGEULIS Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Haurgeulis</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. A. Yani No. 22, Haurgeulis, Bandung - Jawa Barat</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">16.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">0234-272935</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Indramayu -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/INDRAMAYU.jpg"
                    alt="INDRAMAYU Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Indramayu</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Gereja Oikumene Bumi Patra , Komp. Pertamina Jl. Raya Arun, Indramayu - Jawa Barat 45216</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">09.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">0234-272935</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Kadipaten -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/KADIPATEN.jpg"
                    alt="KADIPATEN Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Kadipaten</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Blok Mawar Sari II, RT 002 RW 004 Desa Gandasari Kec. Kasokandel, Belakang TK Simpay Asih, Majalengka, Jawa Barat</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">08.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">081320567529</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Kalijati -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/KALIJATI.jpg"
                    alt="KALIJATI Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Kalijati</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. Baru Kalijati Babakan Jakarta, Kalijati Subang - Jawa Barat</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">09.30</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">087830663607</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Kota Baru Karawang -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/KOTA BARU KARAWANG.jpg"
                    alt="KOTA BARU KARAWANG Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Kota Baru Karawang</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl Juanda Gg. Beringin No.39, Kota Baru - Karawang, Jawa Barat</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">09.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">081219910105</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Lembang -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/LEMBANG.jpg"
                    alt="LEMBANG Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Lembang</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Wisma GBI Lembang, Jl. Raya Lembang No. 194 - Lembang, Bandung - Jawa Barat 40391</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">07.30</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">08112290904</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Majalaya -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/MAJALAYA.jpg"
                    alt="MAJALAYA Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Majalaya</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Pabrik P.T. JASATEX, Jl. Laswi No. 43, Majalaya - Jawa Barat 40382</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">10.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">081230579601</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Mekarwaru -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/MEKARWARU.jpg"
                    alt="MEKARWARU Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Mekarwaru</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Kp. Sukatani II Cicadas, Kec. Gantar, Kab. Indramayu, Jawa Barat</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">18.30</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">082286700614</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Padalarang -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/PADALARANG.jpg"
                    alt="PADALARANG Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Padalarang</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Akademi Bahasa Asing Internasional Bandung (ABAI) Jl. Raya Kota Baru Parahyangan - Padalarang, Bandung - Jawa Barat 40355</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">09.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">022-86813031</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Pagaden -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/PEGADEN.jpg"
                    alt="PEGADEN Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Pagaden</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. Bakan Asem Rancabogo Pagaden, Subang, Jawa Barat</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">10.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">081221987832</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- GBI Karisma - Pamanukan -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/KARISMA PAMANUKAN.jpg"
                    alt="KARISMA PAMANUKAN Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">GBI Karisma - Pamanukan</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Aula RS Karisma, Jl. Gardujati Mariuk Pamanukan - Subang</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">17.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">082128026455</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Subang -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/SUBANG.jpg"
                    alt="SUBANG Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Subang</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. Otista No. 137, Subang - Jawa Barat</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">07.00 | 10.00 | 16.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">08170260888</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Sumedang -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/SUMEDANG.jpg"
                    alt="SUMEDANG Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Sumedang</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Lingkungan Barak Kel. Situ Kec. Sumedang Utara, RT 01 RW 07, Belakang Gas LPG Sumedang - Jawa Barat</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">08.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">085320364424</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Tanjungsari -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/TANJUNGSARI.jpg"
                    alt="TANJUNGSARI Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Tanjungsari</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl.Pasar Selatan Belakang No.4 Tanjungsari, Sumedang - Jawa Barat</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">17.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">085320364424</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Tasikmalaya -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/TASIKMALAYA.jpg"
                    alt="TASIKMALAYA Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Tasikmalaya</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. Empang Sari No. 52, Tasikmalaya - Jawa Barat</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">07.00 | 09.00 | 17.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">081563265009</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>
            
        </div>

        <!-- JAWA TENGAH -->
        <div class="branch row fade" id="tab_3">
            <!-- Adipalaga / Gombolharjo -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/ADIPALAGA_ GOMBOLHARJO.jpg"
                    alt="ADIPALAGA GOMBOLHARJO Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Adipalaga / Gombolharjo</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. Mawar No. 1000 (Depan lapangan Gombolhardjo), Desa Gombolharjo Rt.05/Rw.01, Cilacap - Jawa Tengah 53271</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">08.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">085867826326</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Banjarnegara -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/BANJARNEGARA.jpg"
                    alt="BANJARNEGARA Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Banjarnegara</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Hotel Nyaman, Jl. Raya No.1 Pucang, Banjarnegara - Jawa Tengah</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">17.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">08112616060</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Banyumas / Karangrau -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/BANYUMAS_ KARANGRAU.jpg"
                    alt="BANYUMAS KARANGRAU Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Banyumas / Karangrau</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Desa Sudagaran, Jl. Mruyung II / 41, Banyumas - Jawa Tengah 53192</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">07.30</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">081914903100</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Brebes -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/BREBES.jpg"
                    alt="BREBES Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Brebes</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. A.Yani No.136 Brebes, Jawa Tengah</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">08.00 | 11.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">081914909028</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- House of Grace Semarang -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/HOUSE OF GRACE SEMARANG.jpg"
                    alt="HOUSE OF GRACE SEMARANG Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">House of Grace Semarang</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. Piere Tandean No.9 - Semarang, Jawa Tengah</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">09.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">082144000410</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Jatilawang -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/JATILAWANG.jpg"
                    alt="JATILAWANG Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Jatilawang</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. Tambangan No.2, Kel. Tunjung, Kec. Jatilawang, Banyumas - Jawa Tengah</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">08.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">081318976972</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Kebumen -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/KEBUMEN.jpg"
                    alt="KEBUMEN Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Kebumen</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. Arung Binang No. 19 A , Kebumen - Jawa Tengah</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">08.00 | 18.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">081229119907</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Kroya -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/KROYA.jpg"
                    alt="KROYA Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Kroya</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Sena Café, Jl. Yos Sudarso Kroya, Cilacap, Jawa Tengah</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">08.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">08157607771</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Larangan -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/LARANGAN.jpg"
                    alt="LARANGAN Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Larangan</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. Pramuka No. 20 Larangan - Jawa Tengah</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">17.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">08156538315</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Majenang -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/MAJENANG.jpg"
                    alt="MAJENANG Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Majenang</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. Pramuka No. 40, Cilacap - Jawa Tengah 53257</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">17.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">0280-621226</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Purbalingga -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/PURBALINGGA.jpg"
                    alt="PURBALINGGA Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Purbalingga</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Hotel Utama Lantai 2, Jl. Jend. Sudirman No.144, Purbalingga - Jawa Tengah</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">09.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">081804882229</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Purbalingga II -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/PURBALINGGA II.jpg"
                    alt="PURBALINGGA II Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Purbalingga II</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. Gunung Padang No.2, Purbalingga - Jawa Tengah</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">08.00 | 17.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">0811281424</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Purwokerto -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/PURWOKERTO.jpg"
                    alt="PURWOKERTO Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Purwokerto</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. Stadion Mini I, Purwokerto - Jawa Tengah 53141</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">07.00 | 09.00 | 11.00 (Youth) | 17.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">0281-625135, 087837077004</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Purwokerto City Walk -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/PURWOKERTO CITY WALK.jpg"
                    alt="PURWOKERTO CITY WALK Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Purwokerto City Walk</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Purwokerto City Walk Blok E No.4-5, Jl. HR Bunyamin - Purwokerto, Jawa Tengah</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">09.00 | 11.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">0281-651287, 08888999682</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Purworejo -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/PURWOREJO.jpg"
                    alt="PURWOREJO Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Purworejo</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. K.H. A. Dahlan no. 62 A, Purworejo - Jawa Tengah</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">09.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">081328366700</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Sadabumi -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/SADABUMI.jpg"
                    alt="SADABUMI Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Sadabumi</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. Grumbul Ciledug , Cilacap - Jawa Tengah 53257</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">16.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">0818243145</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Slawi -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/SLAWI.jpg"
                    alt="SLAWI Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Slawi</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. Jend. Sudirman No. 16 Slawi, Jawa Tengah 52411</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">07.00 | 10.00 | 17.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">08156538315</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Tanjung -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/TANJUNG.jpg"
                    alt="TANJUNG Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Tanjung</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. R.A. Kartini No. 153, Tanjung - Jawa Tengah</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">07.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">081911640407</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Tegal -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/TEGAL.jpg"
                    alt="TEGAL Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Tegal</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Rita Super Mall, Jl Kolonel Sugiono No. 155 Tegal</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">10.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">085385568664</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Wanareja -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/WANAREJA.jpg"
                    alt="WANAREJA Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Wanareja</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. Jambu No. 21 Cihandiwung Kidul, Kel. Adimulya, Kec. Wanareja, RT/RW 01/04, Cilacap - Jawa Tengah</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">07.00 | 17.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">087837447071</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Wangon -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/WANGON.jpg"
                    alt="WANGON Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Wangon</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Markas Batalion 405 Surya Kusuma, Banyumas - Jawa Tengah</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">07.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">08881897777</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- House of Glory Wonosobo -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/HOUSE OF GLORY WONOSOBO.jpg"
                    alt="HOUSE OF GLORY WONOSOBO Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">House of Glory Wonosobo</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. Jogonegoro KM 1, Wonosobo 56313 (Samping Gedung Golkar),  Jawa Tengah</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">08.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">085227071118</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Yogyakarta - Jendral Sudirman -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/YOGYAKARTA- JENDRAL SUDIRMAN.jpg"
                    alt="YOGYAKARTA- JENDRAL SUDIRMAN Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow" style="padding-top: 1%">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Yogyakarta - Jendral Sudirman</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Ruko Jl. Parangtritis Km 12 (depan makam pahlawan Bantul), Yogyakarta</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">07.15</span>
                        </div>
                        <hr>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Integrity Hall Pakuwon Mall (d/h Hartono Mall) Lt. 3, Jl. Ringroad Utara Sleman, Yogyakarta</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">10.30 | 17.00</span>
                        </div>
                        <hr>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Gd. Wisma Hartono Lt. Basement, Jl. Jendral Sudirman, Yogyakarta</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">07.30</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">0274-511990, 081210104045</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

        </div>

        <!-- JAWA TIMUR -->
        <div class="branch row fade" id="tab_4">
            <!-- Suropati Malang Armed -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/SURAPATI MALANG ARMED.jpg"
                    alt="SURAPATI MALANG ARMED Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Suropati Malang Armed</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Men Armed 2, Jl. Panglima Sudirman No. 14 Rampal (Depan Stasiun Malang Baru) Malang - Jawa Timur</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">08.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">0341-327000, 081382268000</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Suropati Malang Trans -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/SURAPATI MALANG TRANS.jpg"
                    alt="SURAPATI MALANG TRANS Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Suropati Malang Trans</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. Veteran No. 8A, Mall Transmart Lt.2 (Ex Royal ATK) Malang, Jawa Timur</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">10.00 | 12.00 | 16.30 | 18.30</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">0341-327000, 081382268000</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Gosyen Blessing Church Kenjeran -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/Gosyen Blessing Church Kenjeran.jpeg"
                    alt="Gosyen Blessing Church Kenjeran Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Gosyen Blessing Church Kenjeran</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Ruko Babatan Pantai, Jl. Kenjeran 612 C-D, Surabaya</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">07.00 | 09.00 | 11.00 | 16.00 | 17.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">031-3823178</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Gosyen Blessing Church Spazio -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/GOSYEN BLESSING CHURCH SPAZIO.jpg"
                    alt="GOSYEN BLESSING CHURCH SPAZIO Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Gosyen Blessing Church Spazio</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Spazio Tower Parc West Lt.6, Jl. Mayjen Yono Soewoyo Kav 3 Surabaya, Jawa Timur</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">07.30 | 10.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">031-3823178</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Rehobot Surabaya -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/REHOBOT SURABAYA.jpg"
                    alt="REHOBOT SURABAYA Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Rehobot Surabaya</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Ruko Darma Galeria D20-22, Jl. Mayor Jendral Sungkono No.142, Surabaya - Jawa Timur</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">07.00 | 09.00 | 17.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">031-99540048, 0812-4611-1181</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Tanggul -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/TANGGUL.jpg"
                    alt="TANGGUL Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Tanggul</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. PB. Sudirman No.123 Tanggul, Jawa Timur</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">06.00 | 17.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">0336-443056</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Jember -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/JEMBER.jpg"
                    alt="JEMBER Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Jember</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. Diponegoro Ruko Mutiara No.25 Jember, Jawa Timur</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">09.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">0336-443056</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>
            
        </div>

        <!-- LUAR PULAU JAWA -->
        <div class="branch row fade" id="tab_5">
            <!-- Kupang Baru -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/KUPANG BARU.jpg"
                    alt="KUPANG BARU Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Kupang Baru</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Graha Kupang Baru, Jl. Perintis Kemerdekaan, Kayu Putih Kupang, Nusa Tenggara Timur</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">08.00 WITA | 10.00 WITA</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">082247717051</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Anugerah Manado -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/ANUGERAH MANADO.jpg"
                    alt="ANUGERAH MANADO Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Anugerah Manado</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. Martadinata No.40 Manado, Sulawesi Utara</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">09.00 WITA</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">0431-847121</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Anugerah Timika -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/ANUGERAH TIMIKA.jpg"
                    alt="ANUGERAH TIMIKA Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Anugerah Timika</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. Lettu C. Heatubun, Jalur 2 Kwanki, Timika - Papua Barat 99910</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">09.00 WITA</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">081295122617</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Bethany Parigi -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/BETHANY PARIGI.jpg"
                    alt="BETHANY PARIGI Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Bethany Parigi</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. Trans Sulawesi Parigi, Sulawesi Tengah</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">08.00 WITA</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">081236868844</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- House Of Miracles Palu -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/HOUSE OF MIRACLE PALU.jpg"
                    alt="HOUSE OF MIRACLE PALU Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">House of Miracles Palu</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. R.E. Martadinata, Tondo -  Citraland Palu -  Baywalk BB3/36-37</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">10.00 WITA</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">082210101077</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- House of Restoration Bajugan -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/HOUSE OF RESTORATION BAJUGAN.jpg"
                    alt="HOUSE OF RESTORATION BAJUGAN Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">House of Restoration Bajugan</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. Trans Sulawesi Bajugan, Sulawesi Tengah</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">08.00 WITA</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">081341023719</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- House of Restoration Desa Lakuan -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/HOUSE OF RESTORATION DESA LAKUAN.jpg"
                    alt="HOUSE OF RESTORATION DESA LAKUAN Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">House of Restoration Desa Lakuan</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. Trans Sulawesi Lakuan, Sulawesi Tengah</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">10.00 WITA</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">081341023719</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- House of Restoration Toli Toli -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/HOUSE OF RESTORATION TOLI TOLI.jpg"
                    alt="HOUSE OF RESTORATION TOLI TOLI Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">House of Restoration Toli Toli</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. Mayjen Sutoyo No.21, Panasakan Toli Toli, Sulawesi Tengah</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">09.00 WITA | 18.30 WITA</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">081341023719</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Kuala Kurun -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/KUALA KURUN.jpg"
                    alt="KUALA KURUN Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Kuala Kurun</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Ruko Pemda Blok A1 No.3, Jl. Sangkurun, Kuala Kurun, Gunung Mas - Kalimantan Tengah</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">10.00 WITA</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">081260005359</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Makale - Toraja -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/MAKALE - TORAJA.jpg"
                    alt="MAKALE - TORAJA Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Makale - Toraja</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. Ibu Tien Soeharto no. 4, Makale Tana Toraja, Sulawesi Selatan 91811</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">07.00 WITA | 09.00 WITA</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">0423-24128</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Mawar Saron Timika -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/MAWAR SARON TIMIKA.jpg"
                    alt="MAWAR SARON TIMIKA Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Mawar Saron Timika</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. Port Site RT 20 Sempan, Mimika Baru Timika, Papua Tengah</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">09.00 WITA</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">0811498693</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Menorah Manado -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/MENORAH MENADO.jpg"
                    alt="MENORAH MENADO Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Menorah Manado</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Kawasan Mega Mas Boulevard, Jl. Laksada John Lie, Manado - Sulawesi Utara</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">08.00 WITA | 10.00 WITA | 18.00 WITA</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">08114357575</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Menorah Minahasa Utara -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/MENORAH MINAHASA UTARA.jpg"
                    alt="MENORAH MINAHASA UTARA Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Menorah Minahasa Utara</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Watutumou Jaga IX, Lorong Samping Trakindo (Komplek Wadi), Sulawesi Utara</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">09.00 WITA</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">08114357575</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Menorah Minanga -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/MENORAH MINANGA.jpg"
                    alt="MENORAH MINANGA Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Menorah Minanga</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Perumahan Minanga Indah Blok F No.33, Lingkungan VI Malalayang II Manado, Sulawesi Utara</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">10.00 WITA</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">08114357575</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Menorah Tagulandang -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/MENORAH TAGULANDANG.jpg"
                    alt="MENORAH TAGULANDANG Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Menorah Tagulandang</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Kel. Balehumara Lingkungan I, Kec. Tagulandang, Kab. Kepulauan Sitaro, Sulawesi Utara</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">10.00 WITA</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">08114357575</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Menorah Bengkol -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/MENORAH BENGKOL.jpg"
                    alt="MENORAH BENGKOL Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Menorah Bengkol</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. Raya Manado Wori, Kel. Bengkol lingk 3 Kec. Mapanget - Manado, Sulawesi Utara</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">10.00 WITA</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">08114357575</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Menorah FMC (Final Movement Church) -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/MENORAH FMC.jpg"
                    alt="MENORAH FMC Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Menorah FMC (Final Movement Church)</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Jl. R.W. Monginsidi Malalayang satu lingkungan 1 No. 99, Malalayang satu Barat Kec. Malalayang - Manado, Sulawesi Utara 95162</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">10.00 WITA</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">08114357575</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>

            <!-- Running Tumbang Kajuei -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/Running Tumbang Kajuei.jpg"
                    alt="Running Tumbang Kajuei Schedule"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Running Tumbang Kajuei</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Desa Tumbang Kajuei, Kecamatan Rungan, Kabupaten Gunung Mas, Kalimantan Tengah</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">16.00 WITA</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <!-- <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.yelloharris</span>
                              </div> -->
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">085256427972</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END CP -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>
            
        </div>
      </div>
    </div>
</div>


@include('footer')