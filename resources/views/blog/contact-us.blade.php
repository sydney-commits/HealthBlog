@extends('blog.layout')

@section('content')

<section class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Contact Us</h2>
                    <div class="breadcrumb__links">
                        <a href="/">Home</a>
                        <span>Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="contact__widget">
                    <div class="contact__widget__icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="contact__widget__text">
                        <h5>Address</h5>
                        <p>L.A</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="contact__widget">
                    <div class="contact__widget__icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="contact__widget__text">
                        <h5>Adress</h5>
                        <p>info@afyaforever.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="contact__widget">
                    <div class="contact__widget__icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="contact__widget__text">
                        <h5>Email</h5>
                        <p>Support@afyaforever.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact__content">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__pic">
                        <img src="img/pexel0.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form">
                        <h3>Get in touch</h3>
                        <form action="{{ route('client.contact.create') }}" method="POST">
                            @csrf
                            <input type="text" placeholder="Name" name="name" required>
                            <input type="text" placeholder="Email" name="email" required>
                            {{-- <input type="text" placeholder="Website"> --}}
                            <textarea placeholder="Message" name="message" required></textarea>
                            <button type="submit" class="site-btn">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
