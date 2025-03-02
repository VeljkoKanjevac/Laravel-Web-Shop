@extends("admin.layout")

@section("content")

    <form method="POST" action="{{route("category.save")}}">

        {{csrf_field()}}

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
        </div>

        <button>Create Category</button>
    </form>

@endsection
