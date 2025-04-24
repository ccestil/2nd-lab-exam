<x-layout>
    

    @forelse ($tasks as $task)
    <li>
        
        <h2>
            {{ $task->title }}

        </h2>
        <p>
            {{ $task->description }}
        </p>

        <div>
            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                @csrf
                @method('DELETE')
    
                <input type="submit" value="Delete">
            </form>
    
            <a href="">Update</a>
        </div>


    </li>
@empty
    <p>You currently don't have tasks.</p>
@endforelse

</x-layout>
