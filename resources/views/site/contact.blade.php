@extends('layout.blog')

@section('content')

<div class="container">  
    <form id="contact" style="text-align:center" action="{{ url('storeticket') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-model">
            <div class="form-white-background">
                <div class="form-title-row">
                    <h1>Créer un ticket</h1>
                </div>
                <div class="form-row">
                    <label>
                        <span>Intitulé du ticket</span>
                        <input type="text" name="intitule" id="intituleTicket">
                    </label>
                </div>
                <div class="form-row">
                    <label>
                        <span>Description</span>
                        <input type="text" name="description"  id="descriptionTicket">
                    </label>
                </div>
                <div class="form-row">
                    <label>
                        <span>Priorité</span>
                        <input type="text" name="priorite" id="prioriteTicket">
                    </label>
                </div>

                <div class="form-row">
                    <button type="submit">Envoyer</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection 

