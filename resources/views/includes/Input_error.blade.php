
    @if(count($errors) > 0)

    <div class="alert alert-danger">
    <!-- si $errors existe j'entre dans le foreach -->


        @foreach ($errors->all() as $error)

        <!-- pour chaque erreur je creer un li et je display l'erreur au user -->
        <!-- nb: la fonction count native de php compte tout les éléments d'un tableau -->
            <li>{{$error}}</li>

        @endforeach

    @endif
</div>
