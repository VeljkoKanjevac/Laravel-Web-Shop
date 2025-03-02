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
        </tr>
        </thead>

        <tbody>
        @foreach($allProducts as $product)
            @php $category = $product->getCategoryByid; @endphp
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->stock}}</td>
                <td>{{$product->image}}</td>
                <td>{{$category->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
