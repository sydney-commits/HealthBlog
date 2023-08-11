@extends('blog.layout1')

@section('content')

  <!-- Blog Details Section Begin -->
  <section class="blog-details spad">
    <div class="container">
        <div class="blog__details__hero set-bg" data-setbg="{{$post->image}}" alt="{{$post->image}}">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="blog__hero__text">
                        <h2>{{$post->title}}</h2>
                        <ul>
                            <li><img src="{{asset('img/blog/blog-author.jpg')}}" alt=""> {{$post->author}}</li>
                            <li>{{ $post->created_at->format('Y-m-d') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
                <div class="row">

<div class="col-lg-8">



                <div class="blog__details__text">
                    <div class="blog__details__text__item">
                        <h4 class="pb-2">{{$post->title}}</h4>



                        <p>{!! $post->body !!}</p>
                    </div>

                </div>


                <div class="col-md-6 pb-3">
                    <span class="mr-3 pl-3"><i class="fa fa-share text-primary"></i><strong>Share Post</strong></span>

                </div>


                <div class="col-md-6">
                    <span class="mr-3"> {!! $shareButtons1 !!} </span>
                </div>

            </div>

            <div class="col-lg-4">
                <div class="blog__details__related">
                    <h3>Recent posts</h3>
                    @foreach($latest_posts as $latest_post)
                    <div class="row">


                        <a href="{{ url('blog/'.Str::slug($latest_post->title)) }}" class="blog__details__btn__item">

                            <div class="blog__details__btn__pic">
                                <img src="{{$latest_post->image}}" alt="{{$latest_post->title}}" style="height: 60px">
                            </div>
                            <div class="blog__details__btn__text">
                                <h6>{{$latest_post->title}}</h6>
                                <span>{{ $latest_post->created_at->format('Y-m-d') }}</span>
                            </div>
                        </a>





                    </div>
               <br>

                    @endforeach

                </div>
            </div>

        </div>

            </div>

            <div class="col-lg-8">


                <div class="blog__details__tag">
                    <p><i class="fa fa-tag"></i> Tag:</p>



                    <a href="#">{{$tag->name}}</a>



                </div>
                <div class="blog__details__btns">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <a href="{{ url('blog/'.Str::slug($previous_post->title)) }}" class="blog__details__btn__item">
                                <h6 class="title"><i class="fa fa-angle-left"></i> Previous posts</h6>
                                <div class="blog__details__btn__pic">
                                    <img src="{{$previous_post->image}}" alt="{{$previous_post->title}}" style="height: 60px">
                                </div>
                                <div class="blog__details__btn__text">
                                    <h6>{{$previous_post->title}}</h6>
                                    <span>{{ $previous_post->created_at->format('Y-m-d') }}</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <a href="{{ url('blog/'.Str::slug($next_post->title)) }}" class="blog__details__btn__item blog__details__btn__prev">
                                <h6 class="title">Next posts <i class="fa fa-angle-right"></i></h6>
                                <div class="blog__details__btn__pic">
                                    <img src="{{$next_post->image}}" alt="{{$next_post->title}}" style="height: 60px">
                                </div>
                                <div class="blog__details__btn__text">
                                    <h6>{{$next_post->title}}</h6>
                                    <span>{{ $next_post->created_at->format('Y-m-d') }}</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="blog__details__related">
                    <h3>Recent posts</h3>
                    <div class="row">

                        @foreach($related_posts as $related_post)


                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="{{$related_post->image}}" alt="{{$related_post->title}}" style="height: 140px">
                                </div>
                                <div class="blog__item__text">

                                    <h5><a href="{{ url('blog/'.Str::slug($related_post->title)) }}"> {!! Str::limit($related_post->title, 60) !!}</a></h5>
                                    <span>Dec 06, 2019</span>
                                </div>
                            </div>
                        </div>

                        @endforeach


                    </div>
                </div>
                <div class="blog__details__comment">
                    <h3>Leave a comment</h3>
                    <form action="{{ route('client.contact.create') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <input type="text" placeholder="Name" name="name">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="email" placeholder="Email" name="email">
                            </div>

                        </div>
                        <textarea placeholder="Comment" name="message"></textarea>
                        <button type="submit" class="site-btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Section End -->


@endsection
