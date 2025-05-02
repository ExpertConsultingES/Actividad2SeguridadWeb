<h1>Lista de usuarios</h1>
<ul>
@foreach ($users as $user)
    <li>{{ $user->name }} - {{ $user->email }} - {{ $user->role }}</li>
@endforeach
</ul>
