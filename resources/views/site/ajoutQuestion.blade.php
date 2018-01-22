@extends('layout.blog')

@section('content')
    <form action="{{ route('storeQuestion') }} " method="POST">
        {{ csrf_field() }}

        <label class="labels" style="display: block; margin: 50px auto 10px auto;" for="question">Question</label><input type="text" value="" name="question" id="destinataireMessage">
        <label class="labels" style="display: block; margin: 50px auto 10px auto;"  for="reponse">Reponse </label><input type="text" name="reponse" id="sujetMessage">
        <input style="display: block; margin-top : 20px;" type="submit" value="Envoyer !">
    </form>
@endsection