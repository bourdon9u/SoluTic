@extends('layout.blog')

@section('content')
    <div class="container">
    <h1>Messagerie</h1>
    <?php
    $numticket = -1;
    $i = 0;
    ?>
<!-- Trier les messages par ticket. Ensuite par date - heure -->


    @if( ! empty($attributs))
        @while ($i < count($attributs))
                @if ($numticket != $attributs[$i][6])
                    @if ($i > 0)
                        </div>
                    @endif
                    <?php $numticket = $attributs[$i][6]?>
                    <div class="message">

                            <h3>Ticket n°{{$attributs[$i][6]}}</h3>
                            <p>Auteur : {{$attributs[$i][4]}}</p>
                            <p>Destinataire : {{$attributs[$i][5]}}</p>

                            <p>Date : {{$attributs[$i][3]}}</p>
                            {{--<p>Date de prise en main : {{$attributs[$i][]}}</p>--}}
                            <p>Sujet : {{$attributs[$i][1]}}</p>
                            <p>Contenu : {{$attributs[$i][2]}} </p>
                            {{--<p> Priorite : </p>{{$attributs[$i][5]}}--}}
 
                    </div>
                @else
                    <div class="reponse">
                            <h3>Ticket n°{{$attributs[$i][6]}} -- Réponse</h3>
                            <p>Auteur : {{$attributs[$i][4]}}</p>
                            <p>Destinataire : {{$attributs[$i][5]}}</p>

                            <p>Date : {{$attributs[$i][3]}}</p>
                            {{--<p>Date de prise en main : {{$attributs[$i][]}}</p>--}}
                            <p>Sujet : {{$attributs[$i][1]}}</p>
                            <p>Contenu : {{$attributs[$i][2]}} </p>
                            {{--<p> Priorite : </p>{{$attributs[$i][5]}}--}}
                            <button class="writemessageto" id="writemessageto">Répondre</button>
                    </div>
                @endif
        
            <?php $i++;?>
        @endwhile
    @endif
</div>
@endsection

