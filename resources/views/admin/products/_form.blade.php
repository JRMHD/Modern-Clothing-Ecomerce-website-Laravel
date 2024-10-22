<form action="{{ isset($product) ? route('admin.products.update', $product) : route('admin.products.store') }}"
    method="POST" enctype="multipart/form-data">
    @csrf
    @if (isset($product))
        @method('PUT')
    @endif

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="title"
            value="{{ old('title', $product->title ?? '') }}" required>
    </div>

    <div class="form-group">
        <label for="price">Price ($)</label>
        <input type="number" class="form-control" name="price" id="price"
            value="{{ old('price', $product->price ?? '') }}" required>
    </div>

    <div class="form-group">
        <label for="discounted_price">Discounted Price ($)</label>
        <input type="number" class="form-control" name="discounted_price" id="discounted_price"
            value="{{ old('discounted_price', $product->discounted_price ?? '') }}">
    </div>

    <div class="form-group">
        <label for="stock">Stock</label>
        <input type="number" class="form-control" name="stock" id="stock"
            value="{{ old('stock', $product->stock ?? '') }}" required>
    </div>

    <div class="form-group">
        <label for="category">Category</label>
        <select class="form-control" name="category" id="category" required>
            <option value="">Select a brand</option>
            @foreach ($categories as $category)
                <option value="{{ $category }}"
                    {{ old('category', $product->category ?? '') == $category ? 'selected' : '' }}>
                    {{ $category }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="color">Color</label>
        <input type="text" class="form-control" name="color" id="color"
            value="{{ old('color', $product->color ?? '') }}" required>
    </div>

    <div class="form-group">
        <label for="sizes">Sizes (comma separated)</label>
        <input type="text" class="form-control" name="sizes" id="sizes"
            value="{{ old('sizes', $product->sizes ?? '') }}" required>
    </div>

    <div class="form-group">
        <label for="tags">Tags (comma separated)</label>
        <input type="text" class="form-control" name="tags" id="tags"
            value="{{ old('tags', $product->tags ?? '') }}">
    </div>

    <div class="form-group">
        <label for="sku">SKU</label>
        <input type="text" class="form-control" name="sku" id="sku"
            value="{{ old('sku', $product->sku ?? '') }}" readonly>
        <small class="form-text text-muted">SKU will be auto-generated.</small>
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" id="description" required>{{ old('description', $product->description ?? '') }}</textarea>
    </div>

    <div class="form-group">
        <label for="image">Main Image</label>
        <input type="file" class="form-control" name="image" id="image" required>
    </div>

    <div class="form-group">
        <label for="images">Additional Images</label>
        <input type="file" class="form-control" name="images[]" id="images" multiple>
    </div>

    <button type="submit" class="btn btn-primary">{{ isset($product) ? 'Update Product' : 'Create Product' }}</button>
</form>
