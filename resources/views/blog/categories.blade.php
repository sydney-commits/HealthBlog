@extends('blog.layout')

@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option spad set-bg" data-setbg="{{asset('img/breadcrumb-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>News</h2>
                        <div class="breadcrumb__links">
                            <a href="/">Home</a>
                            <span>Category</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">

                @foreach($posts as $key => $value)


                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{$value->image}}" alt="" style="width:360px;height:240px">
                        </div>
                        <div class="blog__item__text">


                            <h5><a href="{{ url('blog/'.Str::slug($value->title)) }}">{!! Str::limit($value->title, 100) !!}</a></h5>
                         <ul>
                                <li><img src="{{asset('img/blog/blog-author.jpg')}}" alt=""> {{$value->category->name}}</li>
                                <li>{{ $value->created_at->format('Y-m-d') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>

                @endforeach





                <div class="col-lg-12 text-center">
                    <div class="load__more">
                        <div class="d-flex justify-content-center">
                            {!! $posts->links() !!}
                        </div>
                        {{-- <a href="#" class="primary-btn">Load More</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->


@endsection
