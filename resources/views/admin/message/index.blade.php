
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
    <!-- lato centrale -->
    <div class="colonna-cc">
        <!-- HEADER della CHAT -->
        <div class="header-chat">
            <div class="contatto">
                <div class="contact-text">
                    <div>
                        <h2> I tuoi messaggi ricevuti </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- FINE HEADER della CHAT -->
        <!--  Ricevuti -->
        <div class="chat-space">
            <div class="message received">
                <p>buogiorno, volevo chiederle se posso portare il mio cane nell'appartamento</p>
            </div>
        </div>
        <!--  Fine Ricevuti -->
    </div>
    <!-- lato destro -->
    <div class="colonna-sx">
        <div>
            <!-- VUOTO AL MOMENTO -->
        </div>
    </div>
</div>


@endsection