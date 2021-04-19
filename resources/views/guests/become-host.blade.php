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
      {{-- <div class="my-logo">
        <a href="{{ url('/') }}">
          <i class="fab fa-airbnb"></i>
        </a>
      </div> --}}
      <div class="my-logo"><a href="{{ url('/') }}"><svg style="width: 150px" id="Livello_1" data-name="Livello 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 194.28 80.89"><defs><style>.cls-1{fill:#104d95;}.cls-2{fill:#d9901a;}.cls-3{fill:#d89118;}</style></defs><path class="cls-1" d="M82.37,50a32,32,0,0,0,10.94-7.18,1.56,1.56,0,0,0,.38-.73c1.88-7.52,5.18-14.49,8.47-21.46,1.75-3.71,3.74-7.32,5.8-10.88a20.39,20.39,0,0,1,3.38-4.17,2.4,2.4,0,0,1,3.63.12,2.17,2.17,0,0,1,.42,3c-3.58,6.56-7.26,13.07-10.69,19.7-2.64,5.1-5.45,10.14-7,15.72a17.3,17.3,0,0,0-.61,4.24c0,1.88,1.11,2.71,2.83,2a16.64,16.64,0,0,0,3.94-2.42,28.76,28.76,0,0,0,6.27-7.36,50.16,50.16,0,0,1,9.5-11.53,10.44,10.44,0,0,1,5.08-2.78,4.18,4.18,0,0,1,5,2.72,9.91,9.91,0,0,1,.08,7.15,23.14,23.14,0,0,1-2,4.83,38.91,38.91,0,0,1-8.9,10.44,9.47,9.47,0,0,1-5.3,2.3c-3.18.24-5.09-1.09-5.84-4.22-.07-.29-.16-.58-.27-1a30.9,30.9,0,0,1-3.64,3.25,10.11,10.11,0,0,1-4.08,1.79c-3.54.46-5.87-1.48-6.51-5-.08-.38-.13-.78-.21-1.26a3,3,0,0,0-.52.3,28.91,28.91,0,0,1-9,5.19,1.13,1.13,0,0,0-.89,1.46,29.36,29.36,0,0,0,1.76,8.28c2.4,5.65,6.91,8.6,12.7,9.87s11.45.72,17.13-.37c9.09-1.73,17.59-5.17,25.9-9.12a58.07,58.07,0,0,1,16.7-5.33c5.68-.81,10.94.52,16,3,1.6.79,3.14,1.71,4.95,2.7-2.73-.12-5.13-.35-7.52-.3-4.06.08-7.93,1.09-10.84,4.05a4.26,4.26,0,0,1-4.68,1.3c-5.7-1.27-11.41-.55-16.94,1-6.79,1.91-13.49,4.16-20.24,6.23A63.72,63.72,0,0,1,98.8,78.87c-9,0-15.54-4.13-20.1-11.67a29.21,29.21,0,0,1-3.9-12.35c0-.23-.06-.46-.11-.8a21.85,21.85,0,0,1-11.16-4.4c-1.32,2-2.64,3.9-3.86,5.85-3.82,6.16-9.26,10.1-16.39,11.19S30,65.26,25.34,59.57a23,23,0,0,1,2-31.76c3.05-2.88,6.33-5.28,10.52-6.12,4.9-1,9.31.41,13.43,3a2,2,0,0,1,.68.66,1.09,1.09,0,0,1,.16.87.92.92,0,0,1-.8.29c-.69-.15-1.36-.42-2-.62-2.32-.69-4.61-1.71-7-2-4.92-.57-8.67,1.94-11.87,5.38-4.2,4.51-5.48,10-5,16C26,52.59,30,57.42,36.6,60.08c6.19,2.51,13.16,1.46,18.48-4.58a71.45,71.45,0,0,0,5.42-7.74,1.71,1.71,0,0,0,0-1.38c-1.18-2.43-2.25-4.87-2.23-7.63a5,5,0,0,1,6-5.13,26.34,26.34,0,0,1,2.95.51,1.52,1.52,0,0,0,2-.88c3-5.41,6-10.84,9.13-16.17A70,70,0,0,1,90.8,1.46,11,11,0,0,1,92.2.33c.9-.62,1.52-.37,1.44.73a33.43,33.43,0,0,1-.88,6.72c-2.43,8.47-5.07,16.89-7.59,25.33a59.7,59.7,0,0,0-2.79,15.51C82.36,49,82.37,49.4,82.37,50Zm7.32-44c-2.51,1.1-17.57,24.82-18.48,28.72L77.52,39c.09-.21.19-.41.27-.62,2.29-6.37,4.54-12.77,6.9-19.11,1.39-3.73,3-7.39,4.47-11.09A15.92,15.92,0,0,0,89.69,6.06Zm22.44,41.37c0,2.83.94,3.5,3,2.57a11.36,11.36,0,0,0,2.7-1.75,33.24,33.24,0,0,0,7.76-9.51,26,26,0,0,0,2-6c.37-1.44-.54-2.3-2-1.83a8.35,8.35,0,0,0-3.77,2.12c-3,3.71-5.8,7.6-8.56,11.52A11,11,0,0,0,112.13,47.43Zm-44.2-7c-1,2.09-2,4-3,6a1,1,0,0,0,.13.92,14.86,14.86,0,0,0,8.65,4c.78,0,1-.26,1-.94A19.22,19.22,0,0,1,75,47.68c.32-1.83.72-3.63,1.13-5.62C72.77,44.33,70.38,42.2,67.93,40.45ZM62.06,44.9h.6c1.29-2.33,2.59-4.64,3.86-7a.82.82,0,0,0-.6-1.29,14.33,14.33,0,0,0-3.5-.3,1.93,1.93,0,0,0-2,2.52C60.84,40.9,61.51,42.89,62.06,44.9Z"/><path class="cls-1" d="M138.46,36.33c.63-.53,1.26-1.07,1.9-1.58,3.94-3.12,7.86-6.29,11.87-9.33a12.76,12.76,0,0,1,3.64-1.75,2.6,2.6,0,0,1,3.12.88,2.84,2.84,0,0,1-.05,3.36c-2.56,4.2-5.19,8.35-7.59,12.64A30.28,30.28,0,0,0,149,46.67a7.3,7.3,0,0,0,.26,2.62,8.11,8.11,0,0,0,2.43-.63,16.49,16.49,0,0,0,5.64-5.88,35.93,35.93,0,0,1,15.73-15.13,10.87,10.87,0,0,1,6.62-1.13,3.28,3.28,0,0,1,2.78,2.17c.2.56.52.69,1.12.8a6,6,0,0,1,2.29,1.06,1.3,1.3,0,0,1,.26,2c-1.62,2.43-3.26,4.85-4.78,7.33-1.37,2.25-2.67,4.54-3.84,6.89a5,5,0,0,0-.34,2.65c.11,1,.91,1.54,1.83,1a29.15,29.15,0,0,0,5.21-3.73c2.75-2.72,5.23-5.72,7.8-8.62.49-.55,1-1.29,1.75-.76s.48,1.44,0,2c-1.71,2.26-3.39,4.56-5.3,6.65a62,62,0,0,1-5.86,5.47A9,9,0,0,1,179.48,53a5.17,5.17,0,0,1-6.56-4.79c0-.47,0-1,0-1.78-.7.6-1.15,1-1.61,1.37a71.33,71.33,0,0,1-5.68,4.77c-3.88,2.68-8.24,1-9.66-3.46a3.86,3.86,0,0,0-.19-.47c-1.24,1.08-2.46,2.11-3.65,3.17-3.09,2.75-6.86.73-7.51-2.93a16,16,0,0,1,1.52-9.77c1.27-2.75,2.69-5.44,4.05-8.15a1.2,1.2,0,0,0,.08-.91c-1.38,1.06-2.81,2.05-4.12,3.18a57.26,57.26,0,0,0-12.93,15.31c-.81,1.47-1.74,2.87-2.69,4.25a2.13,2.13,0,0,1-3,.81,1.86,1.86,0,0,1-.9-2.64c1.08-2.69,2.21-5.38,3.53-8,4.39-8.68,8.78-17.38,13.38-26a77,77,0,0,1,5.68-8.29,7.84,7.84,0,0,1,1.84-1.7c1.39-1,2.62-.55,3,1.1a3.31,3.31,0,0,1-.29,2.17q-2.93,5.22-6.05,10.33c-2.87,4.71-5.82,9.36-8.73,14-.28.45-.49,1-.74,1.43ZM181,30.73c-.1-.08-.22-.26-.33-.25-1.28.13-2.73-.05-3.8.5a39.74,39.74,0,0,0-6.53,4.17c-3.51,2.79-6.8,5.87-8.94,9.89a12,12,0,0,0-1.18,4.43c-.14,1.47.7,2,2.16,1.66a11.63,11.63,0,0,0,5.25-3.21C172.94,43,176.68,36.79,181,31,181,31,181,30.87,181,30.73Z"/><path class="cls-2" d="M13.62,42.2a17.48,17.48,0,0,1,2.16.37A1.5,1.5,0,0,1,17,44.33c-.16.91-.87,1.07-1.63,1.05-2.31-.06-4.62-.21-6.93-.21s-4.7.18-7,.2A4.68,4.68,0,0,1,0,44.85c.42-.36.78-.92,1.26-1a51.25,51.25,0,0,1,5.5-1C8.93,42.49,11.12,42.4,13.62,42.2Z"/><path class="cls-2" d="M5.5,21.85c2.19.66,4.34,1.23,6.44,2s4.17,1.6,6.21,2.51a4.48,4.48,0,0,1,1.72,1.42,1.61,1.61,0,0,1,0,1.51,1.94,1.94,0,0,1-1.43.48,3.27,3.27,0,0,1-1.2-.51L6.56,24.18a11.24,11.24,0,0,1-1.41-.64,6.66,6.66,0,0,1-1-.93Z"/><path class="cls-2" d="M52.56,3a5.1,5.1,0,0,1,.18,1.87c-1.18,4.05-2.4,8.09-3.72,12.09a4.43,4.43,0,0,1-1.5,1.94,1.67,1.67,0,0,1-1.58,0,1.65,1.65,0,0,1-.34-1.51c.72-1.77,1.63-3.46,2.38-5.22,1-2.3,1.88-4.65,2.84-7,.32-.78.73-1.52,1.1-2.27Z"/><path class="cls-2" d="M20.92,59.81a10.17,10.17,0,0,1-1.61,1.41c-1.31.67-2.7,1.18-4,1.86-2.55,1.32-5.06,2.71-7.59,4.07a3.05,3.05,0,0,1-.74.38c-.5.12-1,.16-1.54.23.2-.51.25-1.17.61-1.5a48.92,48.92,0,0,1,11.38-7.43,3.06,3.06,0,0,1,1.86-.23C19.78,58.71,20.19,59.25,20.92,59.81Z"/><path class="cls-2" d="M33.11,19.29c-.35.44-.64,1.09-1.14,1.34-.71.35-1.28-.15-1.63-.82-.76-1.5-1.47-3-2.31-4.47-1.44-2.49-3-4.91-4.43-7.4a6.42,6.42,0,0,1-.41-1.84c.58.24,1.38.33,1.71.77,2.55,3.41,5,6.89,7.49,10.38A8.6,8.6,0,0,1,33.11,19.29Z"/><path class="cls-3" d="M24.91,71.22H21.57l-2.05,9.67H16.83l2-9.67H15.49L16,69h9.41Z"/><path class="cls-3" d="M34.86,72.06a3.34,3.34,0,0,1-.28,1.36,3.27,3.27,0,0,1-.74,1,4,4,0,0,1-1.1.73,5.18,5.18,0,0,1-1.36.38v0a1.76,1.76,0,0,1,.88.63,3.18,3.18,0,0,1,.55,1.23l.82,3.42H30.77l-.64-3a2.13,2.13,0,0,0-.52-1.11,1.38,1.38,0,0,0-1-.37h-.45l-1,4.53H24.48L27,69h4.05a5.7,5.7,0,0,1,1.76.25A3.27,3.27,0,0,1,34,70a2.59,2.59,0,0,1,.66,1A3.21,3.21,0,0,1,34.86,72.06ZM32,72.5a1.39,1.39,0,0,0-.4-1.07A1.71,1.71,0,0,0,30.38,71H29.27l-.71,3.3h1.08a3.35,3.35,0,0,0,1.06-.15,2,2,0,0,0,.73-.41,1.55,1.55,0,0,0,.44-.58A1.9,1.9,0,0,0,32,72.5Z"/><path class="cls-3" d="M43,80.89l-.33-2.63H38.46l-1.39,2.63h-3L40.9,69h3.18l1.69,11.85Zm-1-8.68c0-.09,0-.19,0-.29v-.31c0-.1,0-.19,0-.27s0-.14,0-.18H42s0,.11,0,.19-.06.16-.1.25-.08.19-.12.29l-.15.29-2.16,4h3Z"/><path class="cls-3" d="M51.79,80.89H48.85L47.33,69h2.74l.8,8.2a5.68,5.68,0,0,1,0,.59,2.48,2.48,0,0,1,0,.56h.07c0-.16.11-.34.19-.54s.18-.41.3-.64L55.52,69h2.94Z"/><path class="cls-3" d="M66.26,71.22H62.12l-.56,2.67h3.86L65,76.07H61.11l-.58,2.66H65l-.46,2.16H57.38L59.9,69h6.83Z"/><path class="cls-3" d="M73.42,80.89H66.35L68.87,69h2.69l-2,9.66h4.37Z"/></svg></a></div>
      <div class="my-title">
        <div class="content-title">
          <h4>diventa host</h4>
          <h1>Uno spazio da condividere, un mondo da scoprire</h1>
          <p>Affittare può aiutarti a trasformare il tuo spazio extra in un guadagno in più, permettendoti di dedicarti a ciò che ami.</p>
          <div class="become-host-button">
            <a href="{{ route('register') }}">Inizia</a>
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
            <h2>Guadagna grazie alle spiagge più belle</h2>
            <div class="become-host-button">
              <a href="{{ route('register') }}">Inizia</a>
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
              <h4>Perchè ospitare su Aloha Travel?</h4>
              <p>Gli host rivelano perchè adorano condividere il proprio spazio su Aloha Travel.</p>
            </div>
          </div>
          <div class="box">
            <div class="img-box"></div>
            <div class="text-box">
              <h4>Come iniziare la tua avventura su Aloha Travel</h4>
              <p>Dalla creazione del tuo annuncio alla preparazione del tuo spazio, scopri come muovere i primi passi nel mondo dell'ospitalità.</p>
            </div>
          </div>
          <div class="box">
            <div class="img-box"></div>
            <div class="text-box">
              <h4>Come guadagnare su Aloha Travel</h4>
              <p>Ciò che ogni host deve sapere su prezzi e compensi.</p>
            </div>
          </div>
          <div class="box">
            <div class="img-box"></div>
            <div class="text-box">
              <h4>Il mio spazio è adatto a Aloha Travel?</h4>
              <p>C'è un ospite perfetto per ogni spazio: il segreto è definire le aspettative degli ospiti.</p>
            </div>
          </div>
        </div>
      </section>
      <section id="support">
        <h2>Come ti supportiamo</h2>
        <div class="text-area">
          <div class="text-box">
            <h3>Programmi di protezione dell'host</h3>
            <p>Per ricevere il supporto necessario nel raro caso di un incidente, la maggior parte delle prenotazioni Aloha Travel include un'assicurazione contro i danni all'alloggio e un'assicurazione di responsabilità civile per un importo massimo di un milione di dollari.</p>
            <a href="">Come ti proteggiamo quando svolgi l'attività di host</a>
          </div>
          <div class="text-box">
            <h3>Linee guida sulla sicurezza per l'emergenza COVID-19</h3>
            <p>Per contribuire a proteggere la salute della nostra community, abbiamo collaborato con esperti allo scopo di creare linee guida di sicurezza per tutti, oltre a un processo di pulizia per gli host.
            </p>
            <a href="">Scopri il processo avanzato di pulizia</a>
          </div>
          <div class="text-box">
            <h3>Standard elevati per gli ospiti</h3>
            <p>Per garantire tranquillità agli host, verifichiamo l'identità degli ospiti e ti permettiamo di consultare le recensioni relative a questi ultimi prima che prenotino. La nuova Politica sugli standard degli ospiti definisce aspettative maggiori relativamente al comportamento di questi ultimi.</p>
            <a href="">Le misure che adottiamo per aiutare gli host a sentirsi sicuri</a>
          </div>
        </div>
      </section>
    </div>
    <div id="img-bottom">
      <div class="content-area">
        <h2>Inizia il tuo percorso di host</h2>
        <p>Creiamo insieme il tuo annuncio.</p>
        <div class="become-host-button">
          <a href="{{ route('register') }}">Inizia</a>
        </div>
      </div>
    </div>
  </main>
  
  @include('layouts.partials.footer')

</body>
</html>