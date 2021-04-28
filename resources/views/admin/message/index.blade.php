
@extends('layouts.admin')

@section('content')



<div id="appp" class="chat-container">
    <!-- lato sinistro -->
    <div class="colonna-sx col-sm-12 col-lg-3 ">

        <!-- lista contatti -->

        <div class="contact-list">
            <div class="scrolling-list">
                <ul>
                    @foreach ($messages as $message)

                    <li @click="check( {{ $message }},{{ $message->property}})"  >
                        <img class="chat-avatar" src="https://www.w3schools.com/howto/img_avatar.png" alt="avatar">
                        <div>

                            <p>{{ $message->name }}</p>
                            <small>{{ $message->email }}</small>

                            {{-- <small>{ Orario di invio del messaggio }</small> --}}
                        </div>
                    </li>
@endforeach

                    <div class="chat-space d-lg-none">
                            <div class="message received">
                                <p>@{{counter.content}}</p>
                                <p>@{{title}}</p>
                            </div>
                    </div>

                    
                </ul>
            </div>
        </div>
    </div>
    <!-- lato centrale col -->
    <div class="colonna-cc col-6">
        <!-- HEADER della CHAT -->
        <div class="header-chat d-none d-lg-block">
            <div class="contatto">
                <div class="contact-text ">
                    <div>
                        <h2> I tuoi messaggi ricevuti </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- FINE HEADER della CHAT -->
        <!--  Ricevuti -->
        <div class="chat-space d-lg-block">
            
                
                <div class="message received" v-if="counter!=0">
    
                    <p>@{{ counter.content }}</p>
                    <p>@{{ title }}</p>
                    {{-- <p>@{{ itme }}</p> --}}
                    {{-- <p>Proprietà: @{{ $counter.property.title }}</p> --}}

                </div>
                



        </div>
        <!--  Fine Ricevuti -->
    </div>
    <!-- lato destro -->
    <div class="colonna-sx col-3  d-lg-block">
        <div>
            <!-- VUOTO AL MOMENTO -->
        </div>
    </div>
</div>



@endsection