@extends('layout.blog')

@section('content')
<form action="{{ url('addnewmessage') }}" method="POST">
    {{ csrf_field() }}

    <label class="labels" style="display: block; margin: 50px auto 10px auto;" for="destinataire">Destinataire</label><input type="text" value="" name="destinataire" id="destinataireMessage">
    <label class="labels" style="display: block; margin: 50px auto 10px auto;"  for="sujet">Sujet du message </label><input type="text" name="sujet" id="sujetMessage">

    <label class="labels" style="display: block; margin: 50px auto 10px auto;" for="contenu">Contenu du message</label><input type="text" name="contenu" id="contenuMessage">

    <input style="display: block; margin-top : 20px;" type="submit" value="Envoyer !">
</form>
@endsection