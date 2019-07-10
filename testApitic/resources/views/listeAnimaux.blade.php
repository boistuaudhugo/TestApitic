<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>La Liste des animaux</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Roboto', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {

            margin-top: 40px;
            align-items: center;
            text-align: center;
            
        }

        .title {
            font-size: 40px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
           
        }

        .button {
            border: none;
            margin: 1em;
            padding: 15px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            float : left;
             width : 120px ;
        }
        
        .button1 {
            border: none;
            margin: 1em;
            padding: 15px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            float : right;
            width : 120px ;
        }

        .body {
            
            display: flex;

            width: 100vw;

            height: 100vh;

            flex-direction: column ;
        }

        th,
        td,tr {
            border-bottom: 1px solid #ddd;
            padding: 20px;
            text-align: center;
            
        }
        
        .ligne{
            display : flex;
            flex-direction: row !important;
        }

    </style>
</head>

<body>
    <div class="content body">
        <div class="title m-b-md">
            Voici les Animaux que vous connaissez
        </div>
        <a href="ajout">
            <button> Ajouter un animal </button>
        </a>
        <br />

        <div class="m-b-md">
            <table>
                <thead>
                    <tr>
                        <th>NOM</th>
                        <th>Description</th>
                    </tr>
                </thead>
                @foreach($animaux as $animal)
                <tr ><?php
                    if($animal->type == 'Reptile'){
                            echo "<tr style='background-color:#32CD32;color:black;'>"; 
                    }

                    if($animal->type == 'Mammifere'){
                            echo "<tr style='background-color: #5b3c11;color:white;'>"; 
                    }

                    if($animal->type == 'Oiseau'){
                            echo "<tr style='background-color:#FFA07A;color:black;'>"; 
                    }?>

                    <td>{{$animal->nom}}</td>

                    <td> <?php if($animal->type == 'Reptile'){
                            echo "Je suis un ".$animal->type." et mes écailles sont ".$animal->scale; 
                    }

                    if($animal->type == 'Mammifere'){
                             echo "Je suis un ".$animal->type." et ma fourrure est ".$animal->fur; 
                    }

                    if($animal->type == 'Oiseau'){
                             echo "Je suis un ".$animal->type." et mon plumage est ".$animal->feather; 
                    }?>
                    </td>

                    <td >
                        <div class="ligne" >
                            <a href="{{$animal->id}}/modifier">
                                <button class="button"> Modifier </button>
                            </a>
                            <form method="POST" action="/{{$animal->id}}">
                                {{method_field('DELETE')}}
                                {{csrf_field()}}
                                <div>
                                    <button type="submit" class="button1"> Supprimer </button>
                                </div>

                            </form>
                        </div>
                </tr>
                @endforeach

            </table>

        </div>
        <a href="ajout">
            <button> Ajouter un animal </button>
        </a>

    </div>
</body>

</html>
