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
            <!-- ARUNA -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/Aruna copy.jpg"
                    alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
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
                            <div class="col-md-6 pr-0">
                              <div class="white-button" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.aruna1</span>
                              </div>
                              <div class="white-button" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">08993228226</span>
                              </div>
                            </div>
                            <div class="col-md-6 pr-0">
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
                            <div class="col-md-6 pr-0">
                              <div class="white-button" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">gbiaruna3pm </span>
                              </div>
                              <div class="white-button" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">089606033888</span>
                              </div>
                            </div>
                            <div class="col-md-6 pr-0">
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
                    alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
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
                            <div class="col-md-6 pr-0">
                              <div class="white-button" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.gbi.baranangsiang</span>
                              </div>
                              <div class="white-button" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">087819717181</span>
                              </div>
                            </div>
                            <div class="col-md-6 pr-0">
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
                            <div class="col-md-6 pr-0">
                              <div class="white-button" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.barsi3pm</span>
                              </div>
                              <div class="white-button" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">082115252533</span>
                              </div>
                            </div>
                            <div class="col-md-6 pr-0">
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
                    alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
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
                    alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
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
                    <button class="card__button">Read more</button>
                  </div>
                </article>
            </div>

            <!-- HARRIS POP -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/Harris Pop copy.jpg"
                    alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Harris Pop</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Hotel Harris, Jl. Peta No.241, Bandung</span>
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

            <!-- ISTANA PLAZA -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/Istana Plaza copy.jpg"
                    alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Istana Plaza</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Istana Plaza, Jl. Pasir Kaliki No.121-123, Bandung</span>
                        </div>
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-clock-o"></i></a>
                            <span style="color: white; margin-left: 5px;">10.00 | 17.00</span>
                        </div>
                        <hr>
                        <!-- CP -->
                        <div class="row">
                          <div class="col-md-12 p-0">
                            <div class="col-md-8 pr-0">
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">istana_plaza_regency_4</span>
                              </div>
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">081220485802</span>
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
                    alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
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
                    alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
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
                    alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
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

            <!-- TRANS -->
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="{{url('/img')}}/Trans copy.jpg"
                    alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Trans</h2>
                      <div class="card__description">
                        <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                            <a href="#" class="white-button card__desc__top"><i class="fa fa-map-marker"></i></a>
                            <span style="color: white; margin-left: 5px;">Trans Studio Mall, Jl. Gatot Subroto No.289, Bandung</span>
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
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-instagram"></i></a>
                                  <span style="color: white; margin-left: 5px;">sukawarna.trans</span>
                              </div>
                              <div class="white-button card__desc__top" style="padding-left: 0px !important;">
                                  <a href="#" class="white-button card__desc__top"><i class="fa fa-phone"></i></a>
                                  <span style="color: white; margin-left: 5px;">08993228226</span>
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
                    alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
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
    </div>
</div>


@include('footer')