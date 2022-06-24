<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <header>
    <ul>
      <li><a href="{{ route('home') }}">Home</a></li>
      <li><a href="{{ route('link1') }}">Link#1</a></li>
      <li><a href="{{ route('link2') }}">Link#2</a></li>
    </ul>
  </header>
  <main>

    <h1>Hello World</h1>
  
    <p>Ciao {{ $name }} {{ $lastName }} ecco i tuoi primi passi con Laravel</p>
  
    {{-- se l'utente è taha scrivo il suo nome e cognome altrimenti scrivo 'accesso negato'--}}
  
    @if ($userVerify)
     <p>{{ $name }} {{ $lastName }}</p>
    @else 
      <p>Accesso negato</p>   
    @endif
  
    {{-- stampo userInfos usando il ciclo Foreach --}}
    <ul>
      @foreach ($userInfos as $user)
        <h3>Infos utente</h3>
        <li> Data di nascità: {{ $user['dataDiNascità'] }}</li>
        <li> Origine : {{ $user['origine'] }}</li>
        <li> Città : {{ $user['città'] }}</li>
      @endforeach
    </ul>
    
  </main>

</body>
</html>