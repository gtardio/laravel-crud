@foreach ($users as $user)
<ul>
  <li><strong>ID: </strong>{{ $user->id }}</li>
  <li><strong>Nome: </strong>{{ $user->name }}</li>
  <li><strong>Cognome: </strong>{{ $user->lastname }}</li>
  <li><strong>Età: </strong>{{ $user->age }}</li>
  <li><strong>Sesso: </strong>{{ $user->gender }}</li>
</ul>
@endforeach
