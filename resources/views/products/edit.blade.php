
<form action="{{ route('products.update', $product) }}" method="post">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $product->name }}">
    @error('name')
        <div class="error">{{ $message }}</div>
    @enderror

    <input type="number" name="quantity" value="{{ $product->quantity }}">
    @error('name')
        <div class="error">{{ $message }}</div>
    @enderror   

    <textarea name="description">{{ $product->description }}</textarea>
    @error('name')
        <div class="error">{{ $message }}</div>
    @enderror

    <input type="submit" value="Submit">
</form>

 <a href="{{ route('products.index') }}">Back to all product list</a>