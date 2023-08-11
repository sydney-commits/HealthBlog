@extends ('au.layout')
@section('content')



        <div class="card-title p-2 text-center">
            <h3>Create Category</h3>
        </div>
        <div class="container">
            <div class="jumbotron p-5">
                <form action="{{ route('admin.category.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label> Name</label>
                        <input type="text" name="name" class="form-control" aria-describedby="emailHelp"
                            required="">
                    </div>

                    <div class="form-group">
                        <label> Image</label>
                        <input type="text" name="image" class="form-control" aria-describedby="emailHelp"
                            required="">
                    </div>



                    <div class="input-submit pt-5">
                        <button type="submit" class="btn btn-primary">Save Category</button>
                    </div>
                </form>
            </div>
        </div>

@endsection
{{-- </html> --}}
