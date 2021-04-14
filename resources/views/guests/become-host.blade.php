<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <title>Affitta il tuo alloggio su Boolbnb</title>
</head>
<body>

  <div id="become-host-content">
    <div class="my-jumbotron">
      <div class="my-logo"></div>
      <div class="my-title">
        <div class="content-title">
          <h4>diventa host</h4>
          <h1>Uno spazio da condividere, un mondo da scoprire</h1>
          <p>Affittare può aiutarti a trasformare il tuo spazio extra in un guadagno in più, permettendoti di dedicarti a ciò che ami.</p>
          <div class="become-host-button">
            <a href="">Inizia</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <main>
    <div class="become-host-container">
      <section id="next-chapter">
        <div class="box">
          <h2>Il tuo prossimo capitolo: se ospiti, puoi</h2>
        </div>
        <div class="box">
          <div class="center-box">
            <h4>Accogli il futuro a braccia aperte</h4>
            <p>Guadagna un reddito aggiuntivo e crea legami duraturi grazie all'attività di host.</p>
            <a href="">Esplora il mondo dell'ospitalità</a>
          </div>
        </div>
        <div class="box box-right">
          <h4>Ospita in tutta tranquillità</h4>
          <p>Assistenza 24 ore su 24, un'utilissima community di host, materiali di formazione, approfondimenti e strumenti personalizzati: il nostro obiettivo è il tuo successo.</p>
          <a href="">Come supportiamo gli host</a>
        </div>
      </section>
      <section id="review">
        <div class="content-box">
          <div class="left-box"></div>
          <div class="right-box">
            <div class="content-area">
              <h2>Ospitare mi ha permesso di essere più creativo e trascorrere più tempo con la mia famiglia.</h2>
              <p>Darrel,<br>
                host di Atlanta, in Georgia</p>
            </div>
          </div>
        </div>
      </section>
      <section id="revenue">
        <div class="content-box">
          <div class="content-area">
            <div class="become-host-button">
              <a href="">Inizia</a>
            </div>
          </div>
        </div>
      </section>
      <section id="how-does-it-work">
        <h2>Come funziona l'attività di host</h2>
        <div class="box-area">
          <div class="box">
            <div class="img-box"></div>
            <div class="text-box">
              <h4>titolo</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, itaque. Id, cum debitis at sequi delectus ipsa aspernatur tempore nulla veritatis veniam saepe fugiat repellendus facilis vel qui dicta ipsum?</p>
            </div>
          </div>
          <div class="box">
            <div class="img-box"></div>
            <div class="text-box">
              <h4>titolo</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, itaque. Id, cum debitis at sequi delectus ipsa aspernatur tempore nulla veritatis veniam saepe fugiat repellendus facilis vel qui dicta ipsum?</p>
            </div>
          </div>
          <div class="box">
            <div class="img-box"></div>
            <div class="text-box">
              <h4>titolo</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, itaque. Id, cum debitis at sequi delectus ipsa aspernatur tempore nulla veritatis veniam saepe fugiat repellendus facilis vel qui dicta ipsum?</p>
            </div>
          </div>
          <div class="box">
            <div class="img-box"></div>
            <div class="text-box">
              <h4>titolo</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, itaque. Id, cum debitis at sequi delectus ipsa aspernatur tempore nulla veritatis veniam saepe fugiat repellendus facilis vel qui dicta ipsum?</p>
            </div>
          </div>
        </div>
      </section>
      <section id="support">
        <h2>Come ti supportiamo</h2>
        <div class="text-area">
          <div class="text-box">
            <h3>titolo</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores veniam nobis quis deserunt ea quo unde id hic perspiciatis commodi? Provident, deleniti nemo. Fugit repellat veritatis est dolorem, in sequi!</p>
            <a href="">link</a>
          </div>
          <div class="text-box">
            <h3>titolo</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores veniam nobis quis deserunt ea quo unde id hic perspiciatis commodi? Provident, deleniti nemo. Fugit repellat veritatis est dolorem, in sequi!</p>
            <a href="">link</a>
          </div>
          <div class="text-box">
            <h3>titolo</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores veniam nobis quis deserunt ea quo unde id hic perspiciatis commodi? Provident, deleniti nemo. Fugit repellat veritatis est dolorem, in sequi!</p>
            <a href="">link</a>
          </div>
        </div>
      </section>
    </div>
    <div class="img-bottom">
      <div class="content-area">
        <h2>Inizia il tuo percorso di host</h2>
        <p>Creiamo insieme il tuo annuncio.</p>
        <div class="become-host-button">
          <a href="">Inizia</a>
        </div>
      </div>
    </div>
  </main>
  
  @include('layouts.partials.footer')

</body>
</html>