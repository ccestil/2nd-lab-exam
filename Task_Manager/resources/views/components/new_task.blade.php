<form action="{{ route('store') }}"  method="POST" class="task_input">

    @csrf

    <p for="title">Name</p>
    <input type="text" name="title" value="{{ old('title') }}" placeholder="ex: Buy bread later.."> 
    
    <p for="description">Description</p>
    <input type="text" name="description" value="{{ old('description') }}" placeholder="ex: buy at the newly opened shop.">
    <input type="hidden" name="is_completed" value="0">

    <input type="submit" value="create">

</form>