<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Help team</title>

    <style media="screen">
        .content{
            display: flex;
            flex-direction: row;

        }
        .box-content{

            background-color: #ffffff;
            height: auto;
            width: 70%;
            margin-left: 20px;
            margin-right: 20px;
            padding: 10px;
            -webkit-box-shadow: -0.9px 0.1px 6.1px 0.2px #ccc;
            /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
            -moz-box-shadow: -0.9px 0.1px 6.1px 0.2px #ccc;
            ;
            /* Firefox 3.5 - 3.6 */
            box-shadow: -0.9px 0.1px 6.1px 0.2px #ccc;
            ;
            /* Opera 10.5, IE 9, Firefox 4+, Chrome 6+, iOS 5 */
        }
        li{
            list-style: none;
        }
    </style>


</head>
<body>
    <div class="main">

        <div class="content">
            <nav>
                <ul>
                    <li><a href="{{route('users.create')}}">Créer Compte Employé(e)</a></li>
                    <li><a href="{{route('users.index')}}">Fiches Employés</a></li>
                    <li><a href="#">Fiches client</a></li>

                </ul>
            </nav>
            <div class="box-content">
                @yield('incontent')
            </div>
    </div>


</div>

</body>
</html>
