@extends('blog.layout')

@section( 'content')



    <!-- Hero Section Begin -->
    <section class="hero spad set-bg" data-setbg="img/pexel0.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero__text">
                        <span>The Art of Growth </span>
                        <h2>Get the best Advice on Health Awareness and Welbeing</h2>
                        <a href="/contact-us" class="primary-btn normal-btn">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Consultation Section Begin -->
    <section class="consultation">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="consultation__form">
                        <div class="section-title">
                            <span>SignUp For Newsletter</span>
                            <h5 style="text-align: center">Stay Updated 100 %</h5>
                        </div>
                        <form action="route('client.contact.create') }}" method="POST">
                            <input type="text" placeholder="Name" name="name">
                            <input type="text" placeholder="Email" name="email">
                            {{-- <div class="datepicker__item">
                                <input type="text" placeholder="Date" class="datepicker">
                                <i class="fa fa-calendar"></i>
                            </div> --}}
                            {{-- <select>
                                <option value="">Type of service</option>
                                <option value="">Advanced equipment</option>
                                <option value="">Qualified doctors</option>
                                <option value="">Certified services</option>
                                <option value="">Emergency care</option>
                            </select> --}}
                            <button type="submit" class="site-btn">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="consultation__text">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="consultation__text__item">
                                    <div class="section-title">
                                        <span>Welcome to AfyaForever</span>
                                        <h2>Find Best Social Advice <b>TODAY</b></h2>
                                    </div>
                                    <p>Get experience in Public Health Policies and Wellness to empower your growth
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="consultation__video set-bg" data-setbg="img/pexel3.png">
                                    <a href="" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Consultation Section End -->





    <!-- Latest News Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6">
                    <div class="section-title">
                        <span>News</span>
                        <h2>Latest Posts</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="latest__btn">
                        <a href="/blog" class="primary-btn">View all news</a>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach($latest_posts as $key => $value)


                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="latest__item">
                        <h5><a href="{{ url('blog/'.Str::slug($value->title)) }}">{!! Str::limit($value->title, 58) !!}</a></h5>
                        <p>{!! Str::limit($value->body, 120) !!}</p>
                        <ul>
                            <li><img src="{{$value->image}}" alt="{{$value->slug}}"> {{$value->author}}</li>
                            <li>{{ $value->created_at->format('Y-m-d') }}</li>
                        </ul>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </section>
    <!-- Latest News End -->


@endsection
