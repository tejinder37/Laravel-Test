<x-app-layout>

    <h1>Create Task</h1>
    <form action="{{route('tasks.store')}}" method="post">
        @csrf
        <label for="name">Task Name</label>
        <input type="text" name="name" id='name' required>
        <br>
        <label for="number">Number</label>
        <input type="number" name="number" id="number">
        <button type="submit"> Create Task</button>
    </form>
</x-app-layout>