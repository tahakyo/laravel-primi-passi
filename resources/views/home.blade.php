<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Hello World</h1>

  <p>Ciao {{ $name }} {{ $lastName }} ecco i tuoi primi passi con Laravel</p>

  {{-- se l'utente è taha scrivo il suo nome e cognome altrimenti scrivo 'accesso negato'--}}

  @if ($userVerify)
   <p>{{ $name }} {{ $lastName }}</p>
  @else 
    <p>Accesso negato</p>   
  @endif
</body>
</html>