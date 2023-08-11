
<!DOCTYPE html>
<html>
<head>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha256-aAr2Zpq8MZ+YA/D6JtRD3xtrwpEz2IqOS+pWD/7XKIw=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="showimages"></div>
            </div>
            <div class="col-md-9 offset-1 mt-5">
                <div class="card">
                    <div class="card-header bg-info">
                        <h6 class="text-white">Create Post</h6>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('admin.post.create') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label> Title</label>
                                <input type="text" name="title" class="form-control" aria-describedby="emailHelp"
                                    required="">
                            </div>

                            <div class="form-group">
                                <label> Meta Title</label>
                                <input type="text" name="title1" class="form-control" aria-describedby="emailHelp"
                                    required="">
                            </div>

                            <div class="form-group">
                                <label> Image</label>
                                <input type="url" name="image" class="form-control" aria-describedby="emailHelp"
                                    required="">
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="body" rows="5" cols="40" class="form-control tinymce-editor"></textarea>
                            </div>

                            <label> Author</label>
                            <select name="author" id="author" class="category">
                                <option disable selected>--select Author--</option>

                                <option value="Mitchele I">Mitchele I</option>
                                <option value="Robert B">Robert B</option>
                                <option value="Tony A">Tony A</option>


                            </select>





                            <label> Category</label>
                            <select name="category_id" id="category" class="category">
                                <option disable selected>--select category--</option>
                                @foreach($categories as $item)
                                <option value="{{ $item->id }}">{{ $item->name}}</option>
                            @endforeach
                            </select>


                            <label> Tag</label>
                            <select name="tag_id" id="tag" class="tag">
                                <option disable selected>--select tag--</option>
                                @foreach($tags as $item)
                                <option value="{{ $item->id }}">{{ $item->name}}</option>
                            @endforeach
                            </select>



                            <div class="form-group pt-3">
                                <label>Excerpt</label>
                                <input type="textarea" name="excerpt" class="form-control" aria-describedby="emailHelp"
                                    required="">
                            </div>





                            <div class="input-submit pt-5">
                                <button type="submit" class="btn btn-primary">Save Post</button>
                            </div>
                        </form>




                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    {{-- <script type="text/javascript">
        tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 300,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
    </script> --}}

<script type="text/javascript">
    CKEDITOR.replace('body', {
        filebrowserUploadUrl: "",
        filebrowserUploadMethod: 'form'
    });

</script>


</body>
</html>



