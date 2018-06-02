
@extends('layouts.admin')
@extends('layouts.app')
@section('incontent')

<div class="container">
  <h2>Collaborateurs</h2>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Status</th>
        <th>Role</th>
        <th>Date de création</th>
        <th>Date de la dernière modification</th>
        <!-- <th>Photo employé(e)</th> -->


      </tr>
    </thead>
    <tbody>

        <!-- On met une condition pour affiché seuelment si des users existent
        Puis dans un for each on vas bouclé sur chaque users pour qu'il s'affichent
        Et dans chaque td on vas inserér les données en utilisé les double curly brackets(grace à blade)
        pour inserer les datas -->

        @if($users)

            @foreach($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td><a href="{{route('users.update', $user->id)}}">{{$user->name}}</a></td>
        <td>{{$user->email}}</td>
        <td>{{$user->is_active == 1 ? 'Actif' : 'Inactif'}}</td>
        <td>{{$user->role_id == 1 ?'Administrateur':'Employé(e)'}}</td>
        <!-- On met une condition sur l'affichage de la data avec une condition ternaire -->
        <!-- si role_id == 1 alors on affiche administrateur  sinon employé -->
        <td>{{$user->created_at->diffForHumans()}}</td>
        <!-- diffForHumans pour convertir en date plus usersfriendly -->
        <td>{{$user->updated_at->diffForHumans()}}</td>
        <!-- <td> <img height="32" width="32" src="images/{{$user-> photo ? $user->photo->file : 'Pas de fichier'}}" alt="Photo profil"></td> -->
            <!-- on met une condition : si le users à une photo on l'affiche
            sinon on on affiche pas de photo -->

      </tr>
            @endforeach
      @endif

    </tbody>
  </table>
</div>
@stop
