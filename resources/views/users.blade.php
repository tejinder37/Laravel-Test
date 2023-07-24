<x-app-layout>

    <h1>Users List</h1>

    @if($users->isEmpty())
    <p>No Users Found</p>
    @else
    <ul>
        @foreach($users as $user)
        <li>{{$loop->iteration}}</li>
        <li>{{$user->name}}</li>
        <li>{{$user->email}}</li>
        <li>{{$user->age}}</li>
        <li>{{$user->number}}</li>
        @endforeach
    </ul>
    @endif

</x-app-layout>