<form action="{{ route('products.store') }}" method="post">
    @csrf
    <input type="text" name="name">
    @error('name')
    <div class="error">{{ $message }}</div>
    @enderror

    <input type="number" name="quantity">
    @error('name')
    <div class="error">{{ $message }}</div>
    @enderror

    <textarea name="description"></textarea>
    @error('name')
    <div class="error">{{ $message }}</div>
    @enderror

    <input type="submit" value="Submit">
</form>
<a href="{{ route('products.index') }}">Back to all product list</a>