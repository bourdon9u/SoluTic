@extends('layout.blog')

@section('content')
    <h1>Liste des tickets</h1>

    @for ($i = 0; $i < count($attributs); $i++)
    {{ csrf_field() }}
    <form id="ticket" style="text-align:center" action="{{ url('storeticket') }}" method="POST"> 
        <div class="form-model">
            <div class="form-white-background">
                <div class="form-title-row">
                    <h1>Ticket n°{{$attributs[$i][0]}}</h1>
                </div>
                <div class="form-row">
                    <label>
                        <span>Intitulé :</span>
                        <p> {{$attributs[$i][1]}} </p>
                    </label>
                </div>
                <div class="form-row">
                    <label>
                        <span>Statut :</span>
                        <p> {{$attributs[$i][7]}} </p>
                    </label>
                </div>
                <div class="form-row">
                    <label>
                        <span>Priorité :</span>
                        <p> {{$attributs[$i][5]}} </p>
                    </label>
                </div>
                <div class="form-row">
                    <label>
                        <span>Date de soumission :</span>
                        <p> {{$attributs[$i][3]}} </p>
                    </label>
                </div>
                <div class="form-row">
                    <button id="buttonticketdetails{{$attributs[$i][0]}}" class="detailsTicket">Afficher les détails</button>
                </div>
            </div>
        </div>
    </form>
        
    @endfor

    <script type="text/javascript">
        window.onload = function(){
            var classname = document.getElementsByClassName("detailsTicket");

            var afficherDetails = function() {
                var number = this.id.match(/\d+/)[0];
                window.location = "detailsticket/"+number;
            };

            for (var i = 0; i < classname.length; i++) {
                classname[i].addEventListener('click', afficherDetails, false);
            }
        }
    </script>
@endsection


