@csrf
<x-input name="name" label="Tên sản phẩm" :value="$product->name ?? null" />
<x-input name="price" label="Giá" type="number" step="1" min="0" :value="isset($product) ? (int) $product->price : null" />
<x-input name="stock" label="Tồn kho" type="number" min="0" :value="$product->stock ?? 0" />

<div class="field">
    <label for="category_id">Danh mục</label>
    <select id="category_id" name="category_id">
        <option value="">-- Chọn danh mục --</option>
        @foreach ($categories as $c)
            <option value="{{ $c->id }}" @selected(old('category_id', $product->category_id ?? null) == $c->id)>{{ $c->name }}</option>
        @endforeach
    </select>
    @error('category_id')
        <div class="error">{{ $message }}</div>
    @enderror
</div>

<button class="btn" type="submit">Lưu</button>
<a class="btn" href="{{ route('products.index') }}">Hủy</a>
