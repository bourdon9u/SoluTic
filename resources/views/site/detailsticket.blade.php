@extends('layout.blog')

@section('content')
    <h1>Details du ticket numéro {{$attributs->id}}</h1>

    <div class="detailsticket">

        <h3>Ticket n° {{$attributs->id}}</h3>
        <p>Intitulé : {{$attributs->intitule}}</p>
        <p>Description : {{$attributs->description}}</p>
        <p>IDClient : {{$attributs->idauteur}}</p>
        @if (!is_null($attributs->idemploye))
            <p>IDEmployé : {{$attributs->idemploye}}</p>
        @endif
        <p>Date de soummission : {{$attributs->dateSoumission}}</p>
        {{--<p>Date de prise en main : {{$attributs[$i][]}}</p>--}}
        @if (!is_null($attributs->dateFin))
            <p>Date de fin : {{$attributs->dateFin}}</p>
        @else
            <p>Ticket non encore résolu</p>
        @endif
        <p>Statut : {{$attributs->statut}} </p>
        <p> Priorite : {{$attributs->priorite}}</p>
        @if (!is_null($attributs->idemploye))
            <button class="writemessageto" id="writemessageto">Envoyer un message</button>
        @endif
    </div>

    <script type="text/javascript">
        window.onload = function(){
            var classname = document.getElementsByClassName("writemessageto");
            var writemessageto = function() {
                window.location = "../writeMessage/{{$attributs->id}}/{{$attributs->idemploye}}";
            };
           if (classname.length > 0){
               classname[0].addEventListener('click', writemessageto, false);
           }
        }
    </script>
@endsection