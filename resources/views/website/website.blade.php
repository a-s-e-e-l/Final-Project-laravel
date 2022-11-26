@extends('layouts.masterlayout')

@section('Headtitle')
    {{ __('Web Site') }}
@endsection
@section('content')
    <div
        class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n4 overflow-hidden position-relative z-index-2">
        <div class="container pt-6 pb-5 position-relative z-index-3">
            <div class="row">
                @if(!count($stores)<1)
                    @foreach ($stores as $store )
                        {{--                        <div class="col-lg-4 col-md-6">--}}
                        {{--                            <div class="card mt-5 mt-md-0">--}}
                        {{--                                <div class="card-header p-0 mx-3 mt-n4 position-relative z-index-2">--}}
                        {{--                                    <a class="d-block blur-shadow-image">--}}
                        {{--                                        <img src="{{$store->logo}}" alt="img-blur-shadow"--}}
                        {{--                                             class="img-fluid border-radius-lg" loading="lazy">--}}
                        {{--                                    </a>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="card-body pt-3">--}}
                        {{--                                    <p class="text-dark mb-2 text-sm">{{$store->phone}}</p>--}}
                        {{--                                    <a href="javascript:;">--}}
                        {{--                                        <h5>--}}
                        {{--                                            {{$store->name}}--}}
                        {{--                                        </h5>--}}
                        {{--                                    </a>--}}
                        {{--                                    <p>--}}
                        {{--                                        {{$store->address}}--}}
                        {{--                                    </p>--}}
                        {{--                                    <button type="button" class="btn btn-outline-primary btn-sm mb-0">From / Night--}}
                        {{--                                    </button>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                        <div class="container bootdey" style="margin-top: 26%;">--}}

                        <div class="col-md-4 mb-md-0 mb-7" style="margin-top: 10%;">
                            <div class="card">
                                <div class="text-center mt-n5 z-index-1">
                                    <div class="position-relative">
                                        <div class="blur-shadow-avatar rounded-circle">
                                            <img class="avatar avatar-xxl shadow-lg" src="{{$store->logo}}"
                                                 alt="Logo Store">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body text-center pb-0">
                                    <h4 class="mb-0">{{$store->name}}</h4>
                                    <p>{{$store->phone}}</p>
                                    <p class="mt-2">
                                        {{$store->address}}
                                    </p>
                                </div>
                                <div class="card-footer text-center pt-2">
                                    <div class="mx-auto">
                                        <a class="btn bg-gradient-primary mt-4 w-100"
                                           href="{{ route('website.products',$store->id) }}"
                                           type="button">{{ __('Show Products') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--                        </div>--}}
                    @endforeach
                @else
                    <h2 colspan="9" class="text-center">{{ __('No Stores') }}</h2>
                @endif
                {{--                            <div class="col-md-4 mb-md-0 mb-7">--}}
                {{--                                <div class="card">--}}
                {{--                                    <div class="text-center mt-n5 z-index-1">--}}
                {{--                                        <div class="position-relative">--}}
                {{--                                            <div class="blur-shadow-avatar rounded-circle">--}}
                {{--                                                <img class="avatar avatar-xxl shadow-lg" src="../../assets/img/team-2.jpg" alt="avatar">--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="card-body text-center pb-0">--}}
                {{--                                        <h4 class="mb-0">Olivia Harper</h4>--}}
                {{--                                        <p>@oliviaharper</p>--}}
                {{--                                        <p class="mt-2">--}}
                {{--                                            The connections you make at Web Summit are unparalleled, we met users all over the world.--}}
                {{--                                        </p>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="card-footer text-center pt-2">--}}
                {{--                                        <div class="mx-auto">--}}
                {{--                                            <svg class="opacity-2" width="60px" height="60px" viewBox="0 0 270 270" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">--}}
                {{--                                                <title>quote-down</title>--}}
                {{--                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                {{--                                                    <path d="M107.000381,49.033238 C111.792099,48.01429 115.761022,48.6892564 116.625294,50.9407629 C117.72393,53.8028077 113.174473,58.3219079 107.017635,60.982801 C107.011653,60.9853863 107.00567,60.9879683 106.999688,60.990547 C106.939902,61.0219589 106.879913,61.0439426 106.820031,61.0659514 C106.355389,61.2618887 105.888177,61.4371549 105.421944,61.5929594 C88.3985192,68.1467602 80.3242628,76.9161885 70.3525495,90.6906738 C60.0774843,104.884196 54.9399518,119.643717 54.9399518,134.969238 C54.9399518,138.278158 55.4624127,140.716309 56.5073346,142.283691 C57.2039492,143.328613 57.9876406,143.851074 58.8584088,143.851074 C59.7291771,143.851074 61.0353294,143.241536 62.7768659,142.022461 C68.3497825,138.016927 75.4030052,136.01416 83.9365338,136.01416 C93.8632916,136.01416 102.658051,140.063232 110.320811,148.161377 C117.983572,156.259521 121.814952,165.88151 121.814952,177.027344 C121.814952,188.695638 117.417572,198.970703 108.622813,207.852539 C99.828054,216.734375 89.1611432,221.175293 76.6220807,221.175293 C61.9931745,221.175293 49.3670351,215.166992 38.7436627,203.150391 C28.1202903,191.133789 22.8086041,175.024577 22.8086041,154.822754 C22.8086041,131.312012 30.0359804,110.239421 44.490733,91.6049805 C58.2196377,73.906272 74.3541002,59.8074126 102.443135,50.4450748 C102.615406,50.3748509 102.790055,50.3058192 102.966282,50.2381719 C104.199241,49.7648833 105.420135,49.3936487 106.596148,49.1227802 L107,49 Z M233.000381,49.033238 C237.792099,48.01429 241.761022,48.6892564 242.625294,50.9407629 C243.72393,53.8028077 239.174473,58.3219079 233.017635,60.982801 C233.011653,60.9853863 233.00567,60.9879683 232.999688,60.990547 C232.939902,61.0219589 232.879913,61.0439426 232.820031,61.0659514 C232.355389,61.2618887 231.888177,61.4371549 231.421944,61.5929594 C214.398519,68.1467602 206.324263,76.9161885 196.352549,90.6906738 C186.077484,104.884196 180.939952,119.643717 180.939952,134.969238 C180.939952,138.278158 181.462413,140.716309 182.507335,142.283691 C183.203949,143.328613 183.987641,143.851074 184.858409,143.851074 C185.729177,143.851074 187.035329,143.241536 188.776866,142.022461 C194.349783,138.016927 201.403005,136.01416 209.936534,136.01416 C219.863292,136.01416 228.658051,140.063232 236.320811,148.161377 C243.983572,156.259521 247.814952,165.88151 247.814952,177.027344 C247.814952,188.695638 243.417572,198.970703 234.622813,207.852539 C225.828054,216.734375 215.161143,221.175293 202.622081,221.175293 C187.993174,221.175293 175.367035,215.166992 164.743663,203.150391 C154.12029,191.133789 148.808604,175.024577 148.808604,154.822754 C148.808604,131.312012 156.03598,110.239421 170.490733,91.6049805 C184.219638,73.906272 200.3541,59.8074126 228.443135,50.4450748 C228.615406,50.3748509 228.790055,50.3058192 228.966282,50.2381719 C230.199241,49.7648833 231.420135,49.3936487 232.596148,49.1227802 L233,49 Z" fill="#48484A" fill-rule="nonzero" transform="translate(135.311778, 134.872794) scale(-1, -1) translate(-135.311778, -134.872794) "></path>--}}
                {{--                                                </g>--}}
                {{--                                            </svg>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
            </div>
        </div>
        <div class="pagination justify-content-center">
            {{ $stores->links() }}
        </div>
    </div>
    <!-- Page Content -->
    {{--    <div--}}
    {{--        class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 overflow-hidden p-0 position-relative mt-n4 mx-3 z-index-2">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-lg-4 col-md-6">--}}
    {{--                    <div class="card mt-5 mt-md-0">--}}
    {{--                        <div class="card-header p-0 mx-3 mt-n4 position-relative z-index-2">--}}
    {{--                            <a class="d-block blur-shadow-image">--}}
    {{--                                <img src="../assets/img/products/product-2-min.jpg" alt="img-blur-shadow"--}}
    {{--                                     class="img-fluid border-radius-lg" loading="lazy">--}}
    {{--                            </a>--}}
    {{--                        </div>--}}
    {{--                        <div class="card-body pt-3">--}}
    {{--                            <p class="text-dark mb-2 text-sm">Entire Apartment • 3 Guests • 2 Beds</p>--}}
    {{--                            <a href="javascript:;">--}}
    {{--                                <h5>--}}
    {{--                                    Lovely and cosy apartment--}}
    {{--                                </h5>--}}
    {{--                            </a>--}}
    {{--                            <p>--}}
    {{--                                Siri's latest trick is offering a hands-free TV viewing experience, that will allow--}}
    {{--                                consumers to turn on or off their television, change inputs, fast forward.--}}
    {{--                            </p>--}}
    {{--                            <button type="button" class="btn btn-outline-primary btn-sm mb-0">From / Night</button>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-4 col-md-6">--}}
    {{--                    <div class="card mt-5 mt-md-0">--}}
    {{--                        <div class="card-header p-0 mx-3 mt-n4 position-relative z-index-2">--}}
    {{--                            <a class="d-block blur-shadow-image">--}}
    {{--                                <img src="../assets/img/products/product-1-min.jpg" alt="img-blur-shadow"--}}
    {{--                                     class="img-fluid border-radius-lg" loading="lazy">--}}
    {{--                            </a>--}}
    {{--                        </div>--}}
    {{--                        <div class="card-body pt-3">--}}
    {{--                            <p class="text-dark mb-2 text-sm">Private Room • 1 Guests • 1 Sofa</p>--}}
    {{--                            <a href="javascript:;">--}}
    {{--                                <h5>--}}
    {{--                                    Single room in the center of the city--}}
    {{--                                </h5>--}}
    {{--                            </a>--}}
    {{--                            <p>--}}
    {{--                                As Uber works through a huge amount of internal management turmoil, the company is--}}
    {{--                                also consolidating more of its international business.--}}
    {{--                            </p>--}}
    {{--                            <button type="button" class="btn btn-outline-primary btn-sm mb-0">From / Night</button>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-4 col-md-6">--}}
    {{--                    <div class="card mt-5 mt-lg-0">--}}
    {{--                        <div class="card-header p-0 mx-3 mt-n4 position-relative z-index-2">--}}
    {{--                            <a class="d-block blur-shadow-image">--}}
    {{--                                <img src="../assets/img/products/product-3-min.jpg" alt="img-blur-shadow"--}}
    {{--                                     class="img-fluid border-radius-lg" loading="lazy">--}}
    {{--                            </a>--}}
    {{--                        </div>--}}
    {{--                        <div class="card-body pt-3">--}}
    {{--                            <p class="text-dark mb-2 text-sm">Entire Apartment • 4 Guests • 2 Beds</p>--}}
    {{--                            <a href="javascript:;">--}}
    {{--                                <h5>--}}
    {{--                                    Independent house bedroom kitchen--}}
    {{--                                </h5>--}}
    {{--                            </a>--}}
    {{--                            <p>--}}
    {{--                                Music is something that every person has his or her own specific opinion about.--}}
    {{--                                Different people have different taste, and various types of music.--}}
    {{--                            </p>--}}
    {{--                            <button type="button" class="btn btn-outline-primary btn-sm mb-0">From / Night</button>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-4 col-md-6">--}}
    {{--                    <div class="card mt-5">--}}
    {{--                        <div class="card-header p-0 mx-3 mt-n4 position-relative z-index-2">--}}
    {{--                            <a class="d-block blur-shadow-image">--}}
    {{--                                <img src="../assets/img/products/product-5-min.jpg" alt="img-blur-shadow"--}}
    {{--                                     class="img-fluid border-radius-lg" loading="lazy">--}}
    {{--                            </a>--}}
    {{--                        </div>--}}
    {{--                        <div class="card-body pt-3">--}}
    {{--                            <p class="text-dark mb-2 text-sm">Entire Apartment • 2 Guests • 1 Bed</p>--}}
    {{--                            <a href="javascript:;">--}}
    {{--                                <h5>--}}
    {{--                                    Zen Gateway with pool and garden--}}
    {{--                                </h5>--}}
    {{--                            </a>--}}
    {{--                            <p>--}}
    {{--                                Fast forward, rewind and more, without having to first invoke a specific skill, or--}}
    {{--                                even--}}
    {{--                                press a button on their remote.--}}
    {{--                            </p>--}}
    {{--                            <button type="button" class="btn btn-outline-primary btn-sm mb-0">From / Night</button>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-4 col-md-6">--}}
    {{--                    <div class="card mt-5">--}}
    {{--                        <div class="card-header p-0 mx-3 mt-n4 position-relative z-index-2">--}}
    {{--                            <a class="d-block blur-shadow-image">--}}
    {{--                                <img src="../assets/img/products/product-6-min.jpg" alt="img-blur-shadow"--}}
    {{--                                     class="img-fluid border-radius-lg" loading="lazy">--}}
    {{--                            </a>--}}
    {{--                        </div>--}}
    {{--                        <div class="card-body pt-3">--}}
    {{--                            <p class="text-dark mb-2 text-sm">Entire Flat • 8 Guests • 3 Rooms</p>--}}
    {{--                            <a href="javascript:;">--}}
    {{--                                <h5>--}}
    {{--                                    Cheapest hotels for a luxury vacation--}}
    {{--                                </h5>--}}
    {{--                            </a>--}}
    {{--                            <p>--}}
    {{--                                Today, the company announced it will be combining its rides-on-demand business and--}}
    {{--                                UberEATS.--}}
    {{--                            </p>--}}
    {{--                            <button type="button" class="btn btn-outline-primary btn-sm mb-0">From / Night</button>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-4 col-md-6">--}}
    {{--                    <div class="card mt-5">--}}
    {{--                        <div class="card-header p-0 mx-3 mt-n4 position-relative z-index-2">--}}
    {{--                            <a class="d-block blur-shadow-image">--}}
    {{--                                <img src="../assets/img/products/product-7-min.jpg" alt="img-blur-shadow"--}}
    {{--                                     class="img-fluid border-radius-lg" loading="lazy">--}}
    {{--                            </a>--}}
    {{--                        </div>--}}
    {{--                        <div class="card-body pt-3">--}}
    {{--                            <p class="text-dark mb-2 text-sm">Entire Apartment • 2 Guests • 1 Bed</p>--}}
    {{--                            <a href="javascript:;">--}}
    {{--                                <h5>--}}
    {{--                                    Cozy Double Room Near Station--}}
    {{--                                </h5>--}}
    {{--                            </a>--}}
    {{--                            <p>--}}
    {{--                                Different people have different taste, and various types of music have many ways of--}}
    {{--                                leaving an impact on someone.--}}
    {{--                            </p>--}}
    {{--                            <button type="button" class="btn btn-outline-primary btn-sm mb-0">From / Night</button>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-sm-7 ms-auto text-end">--}}
    {{--                    <ul class="pagination pagination-primary mt-4">--}}
    {{--                        <li class="page-item ms-auto">--}}
    {{--                            <a class="page-link" href="javascript:;" aria-label="Previous">--}}
    {{--                                    <span aria-hidden="true"><i class="fa fa-angle-double-left"--}}
    {{--                                                                aria-hidden="true"></i></span>--}}
    {{--                            </a>--}}
    {{--                        </li>--}}
    {{--                        <li class="page-item active">--}}
    {{--                            <a class="page-link" href="javascript:;">1</a>--}}
    {{--                        </li>--}}
    {{--                        <li class="page-item">--}}
    {{--                            <a class="page-link" href="javascript:;">2</a>--}}
    {{--                        </li>--}}
    {{--                        <li class="page-item">--}}
    {{--                            <a class="page-link" href="javascript:;">3</a>--}}
    {{--                        </li>--}}
    {{--                        <li class="page-item">--}}
    {{--                            <a class="page-link" href="javascript:;">4</a>--}}
    {{--                        </li>--}}
    {{--                        <li class="page-item">--}}
    {{--                            <a class="page-link" href="javascript:;">5</a>--}}
    {{--                        </li>--}}
    {{--                        <li class="page-item">--}}
    {{--                            <a class="page-link" href="javascript:;" aria-label="Next">--}}
    {{--                                    <span aria-hidden="true"><i class="fa fa-angle-double-right"--}}
    {{--                                                                aria-hidden="true"></i></span>--}}
    {{--                            </a>--}}
    {{--                        </li>--}}
    {{--                    </ul>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}



    <!-- START Testimonials w/ 3 cards & dark background -->
    {{--    <section class="py-3 bg-gradient-dark position-relative overflow-hidden">--}}
    {{--        <img src="../../assets/img/shapes/pattern-lines.svg" class="position-absolute opacity-2 h-100 top-0 d-md-block d-none" alt="">--}}
    {{--        <div class="container pt-6 pb-5 position-relative z-index-3">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-md-6 mx-auto text-center">--}}
    {{--                    <span class="badge badge-white text-dark mb-2">Testimonials</span>--}}
    {{--                    <h2 class="text-white mb-3">Some thoughts from our clients</h2>--}}
    {{--                    <h5 class="text-white font-weight-light">--}}
    {{--                        If you’re selected for them you’ll also get three tickets, opportunity to access Investor Office Hours and Mentor Hours and much more all for free.--}}
    {{--                    </h5>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="row mt-8">--}}
    {{--                <div class="col-md-4 mb-md-0 mb-7">--}}
    {{--                    <div class="card">--}}
    {{--                        <div class="text-center mt-n5 z-index-1">--}}
    {{--                            <div class="position-relative">--}}
    {{--                                <div class="blur-shadow-avatar rounded-circle">--}}
    {{--                                    <img class="avatar avatar-xxl shadow-lg" src="../../assets/img/team-2.jpg" alt="avatar">--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="card-body text-center pb-0">--}}
    {{--                            <h4 class="mb-0">Olivia Harper</h4>--}}
    {{--                            <p>@oliviaharper</p>--}}
    {{--                            <p class="mt-2">--}}
    {{--                                The connections you make at Web Summit are unparalleled, we met users all over the world.--}}
    {{--                            </p>--}}
    {{--                        </div>--}}
    {{--                        <div class="card-footer text-center pt-2">--}}
    {{--                            <div class="mx-auto">--}}
    {{--                                <svg class="opacity-2" width="60px" height="60px" viewBox="0 0 270 270" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">--}}
    {{--                                    <title>quote-down</title>--}}
    {{--                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
    {{--                                        <path d="M107.000381,49.033238 C111.792099,48.01429 115.761022,48.6892564 116.625294,50.9407629 C117.72393,53.8028077 113.174473,58.3219079 107.017635,60.982801 C107.011653,60.9853863 107.00567,60.9879683 106.999688,60.990547 C106.939902,61.0219589 106.879913,61.0439426 106.820031,61.0659514 C106.355389,61.2618887 105.888177,61.4371549 105.421944,61.5929594 C88.3985192,68.1467602 80.3242628,76.9161885 70.3525495,90.6906738 C60.0774843,104.884196 54.9399518,119.643717 54.9399518,134.969238 C54.9399518,138.278158 55.4624127,140.716309 56.5073346,142.283691 C57.2039492,143.328613 57.9876406,143.851074 58.8584088,143.851074 C59.7291771,143.851074 61.0353294,143.241536 62.7768659,142.022461 C68.3497825,138.016927 75.4030052,136.01416 83.9365338,136.01416 C93.8632916,136.01416 102.658051,140.063232 110.320811,148.161377 C117.983572,156.259521 121.814952,165.88151 121.814952,177.027344 C121.814952,188.695638 117.417572,198.970703 108.622813,207.852539 C99.828054,216.734375 89.1611432,221.175293 76.6220807,221.175293 C61.9931745,221.175293 49.3670351,215.166992 38.7436627,203.150391 C28.1202903,191.133789 22.8086041,175.024577 22.8086041,154.822754 C22.8086041,131.312012 30.0359804,110.239421 44.490733,91.6049805 C58.2196377,73.906272 74.3541002,59.8074126 102.443135,50.4450748 C102.615406,50.3748509 102.790055,50.3058192 102.966282,50.2381719 C104.199241,49.7648833 105.420135,49.3936487 106.596148,49.1227802 L107,49 Z M233.000381,49.033238 C237.792099,48.01429 241.761022,48.6892564 242.625294,50.9407629 C243.72393,53.8028077 239.174473,58.3219079 233.017635,60.982801 C233.011653,60.9853863 233.00567,60.9879683 232.999688,60.990547 C232.939902,61.0219589 232.879913,61.0439426 232.820031,61.0659514 C232.355389,61.2618887 231.888177,61.4371549 231.421944,61.5929594 C214.398519,68.1467602 206.324263,76.9161885 196.352549,90.6906738 C186.077484,104.884196 180.939952,119.643717 180.939952,134.969238 C180.939952,138.278158 181.462413,140.716309 182.507335,142.283691 C183.203949,143.328613 183.987641,143.851074 184.858409,143.851074 C185.729177,143.851074 187.035329,143.241536 188.776866,142.022461 C194.349783,138.016927 201.403005,136.01416 209.936534,136.01416 C219.863292,136.01416 228.658051,140.063232 236.320811,148.161377 C243.983572,156.259521 247.814952,165.88151 247.814952,177.027344 C247.814952,188.695638 243.417572,198.970703 234.622813,207.852539 C225.828054,216.734375 215.161143,221.175293 202.622081,221.175293 C187.993174,221.175293 175.367035,215.166992 164.743663,203.150391 C154.12029,191.133789 148.808604,175.024577 148.808604,154.822754 C148.808604,131.312012 156.03598,110.239421 170.490733,91.6049805 C184.219638,73.906272 200.3541,59.8074126 228.443135,50.4450748 C228.615406,50.3748509 228.790055,50.3058192 228.966282,50.2381719 C230.199241,49.7648833 231.420135,49.3936487 232.596148,49.1227802 L233,49 Z" fill="#48484A" fill-rule="nonzero" transform="translate(135.311778, 134.872794) scale(-1, -1) translate(-135.311778, -134.872794) "></path>--}}
    {{--                                    </g>--}}
    {{--                                </svg>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-4 mb-md-0 mb-7">--}}
    {{--                    <div class="card">--}}
    {{--                        <div class="text-center mt-n5 z-index-1">--}}
    {{--                            <div class="position-relative">--}}
    {{--                                <div class="blur-shadow-avatar rounded-circle">--}}
    {{--                                    <img class="avatar avatar-xxl shadow-lg" src="../../assets/img/team-3.jpg" alt="avatar">--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="card-body text-center pb-0">--}}
    {{--                            <h4 class="mb-0">Simon Lauren</h4>--}}
    {{--                            <p>@simonlaurent</p>--}}
    {{--                            <p class="mt-2">--}}
    {{--                                The networking at Web Summit is like no other European tech conference. Everything is amazing.--}}
    {{--                            </p>--}}
    {{--                        </div>--}}
    {{--                        <div class="card-footer text-center pt-2">--}}
    {{--                            <div class="mx-auto">--}}
    {{--                                <svg class="opacity-2" width="60px" height="60px" viewBox="0 0 270 270" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">--}}
    {{--                                    <title>quote-down</title>--}}
    {{--                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
    {{--                                        <path d="M107.000381,49.033238 C111.792099,48.01429 115.761022,48.6892564 116.625294,50.9407629 C117.72393,53.8028077 113.174473,58.3219079 107.017635,60.982801 C107.011653,60.9853863 107.00567,60.9879683 106.999688,60.990547 C106.939902,61.0219589 106.879913,61.0439426 106.820031,61.0659514 C106.355389,61.2618887 105.888177,61.4371549 105.421944,61.5929594 C88.3985192,68.1467602 80.3242628,76.9161885 70.3525495,90.6906738 C60.0774843,104.884196 54.9399518,119.643717 54.9399518,134.969238 C54.9399518,138.278158 55.4624127,140.716309 56.5073346,142.283691 C57.2039492,143.328613 57.9876406,143.851074 58.8584088,143.851074 C59.7291771,143.851074 61.0353294,143.241536 62.7768659,142.022461 C68.3497825,138.016927 75.4030052,136.01416 83.9365338,136.01416 C93.8632916,136.01416 102.658051,140.063232 110.320811,148.161377 C117.983572,156.259521 121.814952,165.88151 121.814952,177.027344 C121.814952,188.695638 117.417572,198.970703 108.622813,207.852539 C99.828054,216.734375 89.1611432,221.175293 76.6220807,221.175293 C61.9931745,221.175293 49.3670351,215.166992 38.7436627,203.150391 C28.1202903,191.133789 22.8086041,175.024577 22.8086041,154.822754 C22.8086041,131.312012 30.0359804,110.239421 44.490733,91.6049805 C58.2196377,73.906272 74.3541002,59.8074126 102.443135,50.4450748 C102.615406,50.3748509 102.790055,50.3058192 102.966282,50.2381719 C104.199241,49.7648833 105.420135,49.3936487 106.596148,49.1227802 L107,49 Z M233.000381,49.033238 C237.792099,48.01429 241.761022,48.6892564 242.625294,50.9407629 C243.72393,53.8028077 239.174473,58.3219079 233.017635,60.982801 C233.011653,60.9853863 233.00567,60.9879683 232.999688,60.990547 C232.939902,61.0219589 232.879913,61.0439426 232.820031,61.0659514 C232.355389,61.2618887 231.888177,61.4371549 231.421944,61.5929594 C214.398519,68.1467602 206.324263,76.9161885 196.352549,90.6906738 C186.077484,104.884196 180.939952,119.643717 180.939952,134.969238 C180.939952,138.278158 181.462413,140.716309 182.507335,142.283691 C183.203949,143.328613 183.987641,143.851074 184.858409,143.851074 C185.729177,143.851074 187.035329,143.241536 188.776866,142.022461 C194.349783,138.016927 201.403005,136.01416 209.936534,136.01416 C219.863292,136.01416 228.658051,140.063232 236.320811,148.161377 C243.983572,156.259521 247.814952,165.88151 247.814952,177.027344 C247.814952,188.695638 243.417572,198.970703 234.622813,207.852539 C225.828054,216.734375 215.161143,221.175293 202.622081,221.175293 C187.993174,221.175293 175.367035,215.166992 164.743663,203.150391 C154.12029,191.133789 148.808604,175.024577 148.808604,154.822754 C148.808604,131.312012 156.03598,110.239421 170.490733,91.6049805 C184.219638,73.906272 200.3541,59.8074126 228.443135,50.4450748 C228.615406,50.3748509 228.790055,50.3058192 228.966282,50.2381719 C230.199241,49.7648833 231.420135,49.3936487 232.596148,49.1227802 L233,49 Z" fill="#48484A" fill-rule="nonzero" transform="translate(135.311778, 134.872794) scale(-1, -1) translate(-135.311778, -134.872794) "></path>--}}
    {{--                                    </g>--}}
    {{--                                </svg>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-4 mb-md-0 mb-7">--}}
    {{--                    <div class="card">--}}
    {{--                        <div class="text-center mt-n5 z-index-1">--}}
    {{--                            <div class="position-relative">--}}
    {{--                                <div class="blur-shadow-avatar rounded-circle">--}}
    {{--                                    <img class="avatar avatar-xxl shadow-lg" src="../../assets/img/team-4.jpg" alt="avatar">--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="card-body text-center pb-0">--}}
    {{--                            <h4 class="mb-0">Lucian Eurel</h4>--}}
    {{--                            <p>@luciaeurel</p>--}}
    {{--                            <p class="mt-2">--}}
    {{--                                Web Summit will increase your appetite, your inspiration, your motivation and your network.--}}
    {{--                            </p>--}}
    {{--                        </div>--}}
    {{--                        <div class="card-footer text-center pt-2">--}}
    {{--                            <div class="mx-auto">--}}
    {{--                                <svg class="opacity-2" width="60px" height="60px" viewBox="0 0 270 270" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">--}}
    {{--                                    <title>quote-down</title>--}}
    {{--                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
    {{--                                        <path d="M107.000381,49.033238 C111.792099,48.01429 115.761022,48.6892564 116.625294,50.9407629 C117.72393,53.8028077 113.174473,58.3219079 107.017635,60.982801 C107.011653,60.9853863 107.00567,60.9879683 106.999688,60.990547 C106.939902,61.0219589 106.879913,61.0439426 106.820031,61.0659514 C106.355389,61.2618887 105.888177,61.4371549 105.421944,61.5929594 C88.3985192,68.1467602 80.3242628,76.9161885 70.3525495,90.6906738 C60.0774843,104.884196 54.9399518,119.643717 54.9399518,134.969238 C54.9399518,138.278158 55.4624127,140.716309 56.5073346,142.283691 C57.2039492,143.328613 57.9876406,143.851074 58.8584088,143.851074 C59.7291771,143.851074 61.0353294,143.241536 62.7768659,142.022461 C68.3497825,138.016927 75.4030052,136.01416 83.9365338,136.01416 C93.8632916,136.01416 102.658051,140.063232 110.320811,148.161377 C117.983572,156.259521 121.814952,165.88151 121.814952,177.027344 C121.814952,188.695638 117.417572,198.970703 108.622813,207.852539 C99.828054,216.734375 89.1611432,221.175293 76.6220807,221.175293 C61.9931745,221.175293 49.3670351,215.166992 38.7436627,203.150391 C28.1202903,191.133789 22.8086041,175.024577 22.8086041,154.822754 C22.8086041,131.312012 30.0359804,110.239421 44.490733,91.6049805 C58.2196377,73.906272 74.3541002,59.8074126 102.443135,50.4450748 C102.615406,50.3748509 102.790055,50.3058192 102.966282,50.2381719 C104.199241,49.7648833 105.420135,49.3936487 106.596148,49.1227802 L107,49 Z M233.000381,49.033238 C237.792099,48.01429 241.761022,48.6892564 242.625294,50.9407629 C243.72393,53.8028077 239.174473,58.3219079 233.017635,60.982801 C233.011653,60.9853863 233.00567,60.9879683 232.999688,60.990547 C232.939902,61.0219589 232.879913,61.0439426 232.820031,61.0659514 C232.355389,61.2618887 231.888177,61.4371549 231.421944,61.5929594 C214.398519,68.1467602 206.324263,76.9161885 196.352549,90.6906738 C186.077484,104.884196 180.939952,119.643717 180.939952,134.969238 C180.939952,138.278158 181.462413,140.716309 182.507335,142.283691 C183.203949,143.328613 183.987641,143.851074 184.858409,143.851074 C185.729177,143.851074 187.035329,143.241536 188.776866,142.022461 C194.349783,138.016927 201.403005,136.01416 209.936534,136.01416 C219.863292,136.01416 228.658051,140.063232 236.320811,148.161377 C243.983572,156.259521 247.814952,165.88151 247.814952,177.027344 C247.814952,188.695638 243.417572,198.970703 234.622813,207.852539 C225.828054,216.734375 215.161143,221.175293 202.622081,221.175293 C187.993174,221.175293 175.367035,215.166992 164.743663,203.150391 C154.12029,191.133789 148.808604,175.024577 148.808604,154.822754 C148.808604,131.312012 156.03598,110.239421 170.490733,91.6049805 C184.219638,73.906272 200.3541,59.8074126 228.443135,50.4450748 C228.615406,50.3748509 228.790055,50.3058192 228.966282,50.2381719 C230.199241,49.7648833 231.420135,49.3936487 232.596148,49.1227802 L233,49 Z" fill="#48484A" fill-rule="nonzero" transform="translate(135.311778, 134.872794) scale(-1, -1) translate(-135.311778, -134.872794) "></path>--}}
    {{--                                    </g>--}}
    {{--                                </svg>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
    <!-- END Testimonials w/ 3 cards & dark background -->
    {{--        <div class="container-fluid pt-3 drop-zone">--}}
    {{--            <div class="row removable">--}}
    {{--                <div class="col-lg-3 drop-zone">--}}
    {{--                    <div class="card mb-4 draggable" draggable="true">--}}
    {{--                        <div class="card-header p-3 pt-2">--}}
    {{--                            <div--}}
    {{--                                class="icon icon-lg icon-shape shadow-dark text-center border-radius-xl mt-n4 position-absolute bg-gradient-primary">--}}
    {{--                                <i class="material-icons opacity-10">weekend</i>--}}
    {{--                            </div>--}}
    {{--                            <div class="text-end pt-1">--}}
    {{--                                <h4 class="mb-0">Clothes</h4>--}}
    {{--                                <p class="text-sm mb-0 text-capitalize">800 Murray SquareRomagueraview, ND 17704</p>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <hr class="dark horizontal my-0">--}}
    {{--                        <div class="card-footer d-flex">--}}
    {{--                            <p class="font-weight-normal my-auto">+1.314.533.3809</p>--}}
    {{--                            <i class="material-icons position-relative ms-auto text-lg me-1 my-auto">place</i>--}}
    {{--                            <p class="text-sm my-auto"> Barcelona, Spain</p>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
@endsection

@section('script')

@endsection
