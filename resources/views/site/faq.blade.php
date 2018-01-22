@extends('layout.blog')

@section('content')
    <h1>Foire aux questions</h1>

    <p>Trier par :</p>
    <select id="triselect">
        <option value="date" selected>Date de rédaction</option>
        <option value="favori">Favori</option>
    </select>
    <div id="faqcontent">


    @for ($i = 0; $i < count($attributs); $i++)
        <div id="question{{$attributs[$i][0]}}fav{{$attributs[$i][3]}}" style="margin-bot:50px;">
            <h3>Question : {{$attributs[$i][1]}}</h3>
            <p>Date de rédaction de la question : {{$attributs[$i][4]}}</p>
            <p>Reponse: {{$attributs[$i][2]}} </p>
            <p>Favori : {{$attributs[$i][3]}}
        </div>
    @endfor
    </div>

    <button id="buttonAjoutQuestion" class="detailsTicket">Rédiger</button>

    <script type="text/javascript">
        window.onload = function() {
            var divparente = document.getElementById('faqcontent');
            var divenfants = divparente.childNodes;
            var triselect = document.getElementById('triselect');
            var button = document.getElementById("buttonAjoutQuestion");


            var ajoutQuestion = function () {
                window.location = "ajoutQuestion/";
            };

           triselect.onchange = function() {
                if(triselect.value === "date"){
                    console.log("tri date");
                }else{
                    console.log("tri favori");
                }
            };

            button.addEventListener('click', ajoutQuestion, false);

            for (var i = 0; i < divenfants.length; i++)
            {
                var elem = divenfants[i];
                console.log(elem.id);
                // faire quelque chose avec chaque enfant en tant que collEnfants[i]
                // NOTE : la liste n'est pas une copie, l'ajout ou le retrait
                // d'éléments modifiera la liste
            }
        }
    </script>
@endsection