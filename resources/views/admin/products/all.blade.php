@extends("admin.layout")

@section("content")

    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">DESCRIPTION</th>
            <th scope="col">PRICE</th>
            <th scope="col">STOCK</th>
            <th scope="col">IMAGE</th>
            <th scope="col">CATEGORY</th>
            <th scope="col">ACTIONS</th>
        </tr>
        </thead>

        <tbody>
        @foreach($allProducts as $product)
            @php $category = $product->getCategory; @endphp
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->stock}}</td>
                <td>{{$product->image}}</td>
                <td>{{$category->name}}</td>
                <td>
                    <a class="btn btn-danger"
                       href="{{ route('product.delete', ['product' => $product->id]) }}">DELETE</a>
                </td>
                <td>
                    <a class="btn btn-primary" href="{{ route('product.edit', ['product' => $product->id]) }}">EDIT</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
