<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Petit Test Technique</title>

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
            margin-top: 30px;
        }

        .body {
            display: flex;

            width: 100vw;

            height: 100vh;

            flex-wrap: wrap;

            flex-direction: column
        }

    </style>
</head>

<body>



    <div class="content body">
        <div class="title m-b-md">
            Modifier un Animal

        </div>
        
        <form method="POST" action="/{{$animal->id}}">
            
            {{method_field('PATCH')}}
            
            {{csrf_field()}}
        
            <div>
                <label>Nom : *</label>
                
                <input type="text" name="nom" value="{{$animal->nom}}">
                
            </div>
            
            <br />
            
            <div>
                
                <select name="type">
                <?php
                    if($animal->type == 'Reptile'){ ?>
                        <option selected="selected">Reptile</option> 
                        <option>Mammifere</option>
                        <option>Oiseau</option> <?php
                    } 

                    if($animal->type == 'Mammifere'){ ?>
                        <option>Reptile</option>
                        <option selected="selected">Mammifere</option> 
                        <option>Oiseau</option> <?php
                    }

                    if($animal->type == 'Oiseau'){ ?>
                        <option>Reptile</option>
                        <option>Mammifere</option>
                        <option selected="selected">Oiseau</option> <?php           
                    }
                           
                ?>
                </select>
                        
                
            </div>
            
            <br />
            
            <div>
                <label>Caractéristique : *</label>
                <input type="text" name="carac" value="<?php
                                                       
                    if($animal->type == 'Reptile'){ 
                        echo $animal->scale ;
                    } 

                    if($animal->type == 'Mammifere'){ 
                        echo $animal->fur;
                    }

                    if($animal->type == 'Oiseau'){
                        echo $animal->feather ;        
                    }
                                                     ?>">
            </div>
            
            <br />
            
            <div>
                <button type="submit"> Valider </button>
            </div>
            
        </form>


    </div>
</body>

</html>