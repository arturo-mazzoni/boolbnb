
@extends('layouts.admin')

@section('content')

<div class="chat-container">
  <!-- lato sinistro -->
  <div class="colonna-sx">
    <!-- Ricerca -->
    <div class="ricerca">
      <i class="fas fa-search"></i>
      <input type="text" placeholder="Cerca un cliente...">
    </div>
    <!-- lista contatti -->
    <div class="contact-list">
      <div class="scrolling-list">
        <ul>
          <li>
            <img class="chat-avatar" src="https://www.w3schools.com/howto/img_avatar.png" alt="avatar">
            <div>
              <p> { CLIENTE 1 }</p>
              <small>{ Anteprima }</small>
              {{-- <small>{ Orario di invio del messaggio }</small> --}}
            </div>
          </li>
          <li>
            <img class="chat-avatar" src="https://www.w3schools.com/howto/img_avatar2.png" alt="avatar">
            <div>
              <p> { CLIENTE 2 }</p>
              <small>{ Anteprima }</small>
              {{-- <small>{ Orario di invio del messaggio }</small> --}}
            </div>
          </li>
          <li>
            <img class="chat-avatar" src="https://www.w3schools.com/howto/img_avatar.png" alt="avatar">
            <div>
              <p> { CLIENTE 3 }</p>
              <small>{ Anteprima }</small>
              {{-- <small>{ Orario di invio del messaggio }</small> --}}
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- lato destro -->
  <div class="colonna-dx">
    <!-- HEADER della CHAT -->
    <div class="header-chat">
      <div class="contatto">
        <div class="contact-text">
          <div>
            <h2> MESSAGES </h2>
          </div>
        </div>
      </div>
    </div>
    <!-- FINE HEADER della CHAT -->
    <!-- Chat -->
    <div class="chat-space">
      <div class="message received">
        <p>buogiorno, volevo chiederle se posso portare il mio cane nell'appartamento</p>
      </div>
      <div class="message sent">
        <p>si, certo senza nessun problema!</p>
      </div>
    </div>
    <!-- fine Chat -->
    <!-- footer chat -->
    <div class="bottom-dx">
      <div class="scrivi">
        <input type="text" placeholder="Scrivi un messaggio...">
        <div class="send-button"><i class="fas fa-paper-plane"></i></div>
      </div>
    </div>
    <!-- fine footer chat -->
  </div>
</div>


@endsection