
@extends('layouts.admin')
@extends('layouts.app')
@section('incontent')


<div class="container">
  <h2>Créer un compte Employé</h2>


        {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files' => true] ) !!}

            <div class="form-group">
                {!! Form::label('name', 'Nom Prénom :') !!}
                {!! Form::text('name',null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Adresse mail :') !!}
                {!! Form::text('email',null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password', 'Mot de passe :') !!}
                {!! Form::password('password', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('role_id', 'Roles :') !!}
                {!! Form::select('role_id',[''=>'Choisir une option'] + $roles, null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('statut', 'Statut:') !!}
                {!! Form::select('is_active',array(1 => 'Actif',  0 => 'Inactif'), null, ['class'=>'form-control']) !!}

            </div>
            <div class="form-gourp">
                {!! Form::label('photo_id',' Votre photo :') !!}
                {!! Form::file('photo_id',null, ['class'=>'custom-file-input']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Valider', ['class'=>'btn btn-primary btn-lg']) !!}
            </div>
            {!! Form::close() !!}

            @include('includes.Input_error')


</div>





@stop
