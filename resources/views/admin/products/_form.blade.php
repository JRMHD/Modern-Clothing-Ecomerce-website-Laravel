<style>
    .form-container {
        padding: 15px;
        min-height: 100vh;
        background: linear-gradient(135deg, #ECF5F4, #ffffff);
    }

    .content-wrapper {
        max-width: 1000px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .header-card {
        background: white;
        border-radius: 20px;
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.06);
        margin-bottom: 25px;
        overflow: hidden;
    }

    .header-content {
        padding: 25px;
        background: linear-gradient(to right, #2c3e50, #3498db);
        color: white;
    }

    .form-card {
        background: white;
        border-radius: 20px;
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.06);
        padding: 30px;
        margin-bottom: 30px;
    }

    .form-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group.full-width {
        grid-column: 1 / -1;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: 500;
        color: #2c3e50;
    }

    .form-control {
        width: 100%;
        padding: 10px 15px;
        border: 2px solid #e2e8f0;
        border-radius: 8px;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #3498db;
        box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
        outline: none;
    }

    select.form-control {
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%232c3e50' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 10px center;
        background-size: 20px;
        padding-right: 40px;
    }

    textarea.form-control {
        min-height: 120px;
        resize: vertical;
    }

    .form-text {
        font-size: 12px;
        color: #64748b;
        margin-top: 5px;
        display: block;
    }

    .file-input-wrapper {
        position: relative;
    }

    .file-input-wrapper .form-control {
        padding: 12px 15px;
        background: #f8fafc;
    }

    .btn-primary {
        background: linear-gradient(to right, #2c3e50, #3498db);
        color: white;
        padding: 12px 30px;
        border: none;
        border-radius: 8px;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    @media (max-width: 768px) {
        .form-grid {
            grid-template-columns: 1fr;
            gap: 15px;
        }

        .form-card {
            padding: 20px;
        }

        .btn-primary {
            width: 100%;
        }
    }
</style>

<div class="form-container">
    <div class="content-wrapper">
        <!-- Header Card -->
        <div class="header-card">
            <div class="header-content">
                <h2 style="margin: 0; font-size: 24px; font-weight: 600;">
                    {{ isset($product) ? 'Edit Product' : 'Create New Product' }}
                </h2>
            </div>
        </div>

        <!-- Form Card -->
        <div class="form-card">
            <form
                action="{{ isset($product) ? route('admin.products.update', $product) : route('admin.products.store') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($product))
                    @method('PUT')
                @endif

                <div class="form-grid">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title"
                            value="{{ old('title', $product->title ?? '') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" name="category" id="category" required>
                            <option value="">Select a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category }}"
                                    {{ old('category', $product->category ?? '') == $category ? 'selected' : '' }}>
                                    {{ $category }}
                                </option>
                            @endforeach
                        </select>
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
                        <small class="form-text">SKU will be auto-generated.</small>
                    </div>

                    <div class="form-group full-width">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description" required>{{ old('description', $product->description ?? '') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Main Image</label>
                        <div class="file-input-wrapper">
                            <input type="file" class="form-control" name="image" id="image"
                                {{ !isset($product) ? 'required' : '' }}>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="images">Additional Images</label>
                        <div class="file-input-wrapper">
                            <input type="file" class="form-control" name="images[]" id="images" multiple>
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <button type="submit" class="btn btn-primary">
                            {{ isset($product) ? 'Update Product' : 'Create Product' }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
