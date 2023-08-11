


    @extends ('au.layout')
    @section('content')

    <div class="card">
        <div class="card-header " style="text-align: center">
            <h3>Posts</h3>
        </div>



      <div class="card-body">

    <div class="card">
        <table class="table table-hover">
            <thead>
              <tr>
                <th>Title</th>
                <th>Link</th>
                <th>Body</th>

              </tr>
            </thead>
            <tbody>

                @foreach($posts as $key => $post)


              <tr>
                <td>{{$post->title}}</td>

                <td>
                    <input type="text" value="fecytech.com/blog/{{$post->slug}}" id="myInput">
    <button class="btn-info" onclick="myFunction()">Copy</button>
                </td>
                <td>{!! $post->body !!}</td>

              </tr>

              @endforeach

            </tbody>
          </table>
    </div>
    <br>


    <div class="card">
        <table class="table table-hover">
            <thead>
              <tr>
                <th>Title</th>
                <th>Body</th>

              </tr>
            </thead>
            <tbody>

                @foreach($categories as $key => $post)


              <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->name}}</td>

              </tr>

              @endforeach

            </tbody>
          </table>
    </div>
    <br>


      </div>

    </div>

    <script>
        function myFunction() {
          // Get the text field
          var copyText = document.getElementById("myInput");

          // Select the text field
          copyText.select();
          copyText.setSelectionRange(0, 99999); // For mobile devices

          // Copy the text inside the text field
          navigator.clipboard.writeText(copyText.value);

          // Alert the copied text
          alert("Copied the text: " + copyText.value);
        }
        </script>

    @endsection
