@extends("admin.layout")

@section("content")

    <form method="POST" action="{{route("product.save")}}">

        {{csrf_field()}}

        @foreach($errors->all() as $error)
            <p>Greska: {{$error}}</p>
        @endforeach

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="description" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" class="form-control" id="price" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label><br>
            <input type="text" name="stock" class="form-control" id="stock" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image URL</label>
            <input type="text" name="image" class="form-control" id="image" aria-describedby="emailHelp">
        </div>

        <select name="category_id" class="form-select" aria-label="Choose product category">
            <option selected>Choose product category</option>
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>

        <button type="submit" class="btn btn-primary">Save Product</button>
    </form>

@endsection
