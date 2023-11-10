@include('header')

<style>
    @import url("https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Montserrat:wght@700&display=swap");

    :root {
      /* Colors */
      --brand-color: hsl(46, 100%, 50%);
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

    

    h2 {
      font-size: 3.25rem;
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
      height: 75%;
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
            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="https://i.imgur.com/QYWAcXk.jpeg"
                    alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Colombia</h2>
                      <p class="card__description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum in
                        labore laudantium deserunt fugiat numquam.
                      </p>
                    </div>
                    <button class="card__button">Read more</button>
                  </div>
                </article>
            </div>

            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="https://i.imgur.com/QYWAcXk.jpeg"
                    alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Colombia</h2>
                      <p class="card__description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum in
                        labore laudantium deserunt fugiat numquam.
                      </p>
                    </div>
                    <button class="card__button">Read more</button>
                  </div>
                </article>
            </div>

            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="https://i.imgur.com/QYWAcXk.jpeg"
                    alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Colombia</h2>
                      <p class="card__description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum in
                        labore laudantium deserunt fugiat numquam.
                      </p>
                    </div>
                    <button class="card__button">Read more</button>
                  </div>
                </article>
            </div>

            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="https://i.imgur.com/QYWAcXk.jpeg"
                    alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Colombia</h2>
                      <p class="card__description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum in
                        labore laudantium deserunt fugiat numquam.
                      </p>
                    </div>
                    <button class="card__button">Read more</button>
                  </div>
                </article>
            </div>

            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="https://i.imgur.com/QYWAcXk.jpeg"
                    alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Colombia</h2>
                      <p class="card__description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum in
                        labore laudantium deserunt fugiat numquam.
                      </p>
                    </div>
                    <button class="card__button">Read more</button>
                  </div>
                </article>
            </div>

            <div class="col-md-4">
                <article class="card">
                  <img
                    class="card__background"
                    src="https://i.imgur.com/QYWAcXk.jpeg"
                    alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                    width="1920"
                    height="2193"
                  />
                  <div class="card__content | flow">
                    <div class="card__content--container | flow">
                      <h2 class="card__title">Colombia</h2>
                      <p class="card__description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum in
                        labore laudantium deserunt fugiat numquam.
                      </p>
                    </div>
                    <button class="card__button">Read more</button>
                  </div>
                </article>
            </div>
            
        </div>
    </div>
</div>


@include('footer')