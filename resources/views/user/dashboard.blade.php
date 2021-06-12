@extends('layouts.front_layouts')
@section('profile') active @endsection
@section('content')

<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-xl-7">
                <div class="block">
                    <div class="divider mb-3"></div>
                    <span class="text-uppercase text-sm letter-spacing ">Total Health care solution</span>
                    <h1 class="mb-3 mt-3">Your most trusted health partner</h1>

                    <p class="mb-4 pr-5">A repudiandae ipsam labore ipsa voluptatum quidem quae laudantium quisquam
                        aperiam maiores sunt fugit, deserunt rem suscipit placeat.</p>
                    <div class="btn-container ">
                        @guest
                        <a href="{{ route('login') }}"
                        class="btn btn-main-2 btn-icon btn-round-full">Login First For Make Appoinment<i
                            class="icofont-simple-right ml-2  "></i></a>
                        @else

                        <a href="{{ route('appoinment') }}"
                            class="btn btn-main-2 btn-icon btn-round-full">Make appoinment <i
                                class="icofont-simple-right ml-2  "></i></a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="feature-block d-lg-flex">
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-surgeon-alt"></i>
                        </div>
                        <span>24 Hours Service</span>
                        <h4 class="mb-3">Online Appoinment</h4>
                        <p class="mb-4">Get ALl time support for emergency.We have introduced the principle of
                            family medicine.</p>
                            @guest
                            <a href="{{ route('login') }}" class="btn btn-main btn-round-full">Login First</a>
                                @else
                                <a href="{{ route('appoinment') }}" class="btn btn-main btn-round-full">Make a Appoinment</a>
                            @endguest

                    </div>

                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-ui-clock"></i>
                        </div>
                        <span>Timing schedule</span>
                        <h4 class="mb-3">Working Hours</h4>
                        <ul class="w-hours list-unstyled">
                            <li class="d-flex justify-content-between">Sun - Wed : <span>8:00 am - 8:00 am </span></li>
                            <li class="d-flex justify-content-between">Thu - Fri : <span>9:00 am - 8:00 am </span></li>
                            <li class="d-flex justify-content-between">Sat - sun : <span>10:00 am- 8:00 am </span></li>
                        </ul>
                    </div>

                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-support"></i>
                        </div>
                        <span>Emegency Cases</span>
                        <h4 class="mb-3">1-800-700-6200</h4>
                        <p>Get ALl time support for emergency.We have introduced the principle of family
                            medicine.Get Conneted with us for any urgency .</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="cta-section ">
    <div class="container">
        <div class="cta position-relative">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">

                        <i class="icofont-badge"></i>
                        <span class="h3">{{ $users }}</span>
                        <p>Happy People</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-flag"></i>
                        <span class="h3">00</span>
                        <p>Surgery Comepleted</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-doctor"></i>
                        <span class="h3">{{ $doctors }}</span>
                        <p>Expert Doctors</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-globe"></i>
                        <span class="h3">{{ $departments->count() }}</span>
                        <p>Hospital Department</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section service gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <h2>Award winning patient care</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt
                        molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-item mb-4">
                    <div class="icon d-flex align-items-center">
                        <i class="icofont-laboratory text-lg"></i>
                        <h4 class="mt-3 mb-3">Laboratory services</h4>
                    </div>

                    <div class="content">
                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-item mb-4">
                    <div class="icon d-flex align-items-center">
                        <i class="icofont-heart-beat-alt text-lg"></i>
                        <h4 class="mt-3 mb-3">Heart Disease</h4>
                    </div>
                    <div class="content">
                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-item mb-4">
                    <div class="icon d-flex align-items-center">
                        <i class="icofont-tooth text-lg"></i>
                        <h4 class="mt-3 mb-3">Dental Care</h4>
                    </div>
                    <div class="content">
                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-item mb-4">
                    <div class="icon d-flex align-items-center">
                        <i class="icofont-crutch text-lg"></i>
                        <h4 class="mt-3 mb-3">Body Surgery</h4>
                    </div>

                    <div class="content">
                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-item mb-4">
                    <div class="icon d-flex align-items-center">
                        <i class="icofont-brain-alt text-lg"></i>
                        <h4 class="mt-3 mb-3">Neurology Sargery</h4>
                    </div>
                    <div class="content">
                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-item mb-4">
                    <div class="icon d-flex align-items-center">
                        <i class="icofont-dna-alt-1 text-lg"></i>
                        <h4 class="mt-3 mb-3">Gynecology</h4>
                    </div>
                    <div class="content">
                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section clients">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center">
                    <h2>Partners who support us</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt
                        molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row clients-logo">
            <div class="col-lg-2">
                <div class="client-thumb">
                    <img src="{{ asset('frontend') }}/images/about/1.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="client-thumb">
                    <img src="{{ asset('frontend') }}/images/about/2.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="client-thumb">
                    <img src="{{ asset('frontend') }}/images/about/3.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="client-thumb">
                    <img src="{{ asset('frontend') }}/images/about/4.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="client-thumb">
                    <img src="{{ asset('frontend') }}/images/about/5.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="client-thumb">
                    <img src="{{ asset('frontend') }}/images/about/6.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="client-thumb">
                    <img src="{{ asset('frontend') }}/images/about/3.png" alt="" class="img-fluid">
                </div>
            </div>


        </div>
    </div>
</section>

@endsection
