@extends('layouts.index')

@section('content')
<h1>
    ajouter un user
</h1>

<form action="/users" method="POST">
    @csrf
    <input type="text" placeholder="nom" name="name">
    <input type="number" placeholder="age" name="age">
    <input type="text" placeholder="numéro de téléphone" name="phone">
    <input type="text" placeholder="surnom" name="nickname">
    <input type="text" placeholder="email" name="email">
    <button type="submit">envoyer</button>
</form>

<h1>nos utilisateurs</h1>

@foreach ($Users as $user)
{{$user->profil->name}}
{{$user->nickname}}

@endforeach

@endsection
