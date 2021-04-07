@extends('layouts.layout')
@section('content')

    <!--static parallax start-->
    <section class="full_screen_hero">
        <div class="display-table">
            <div class="verticle-middle">
                <div class="container text-center">
                    <h3>Soopcy Restaurant</h3>
                    <p class="lead">Always a leader in food</p>
                </div>
            </div>
        </div>
    </section>
    <!--static parallax end-->


    <div class="space-70"></div>
    <div class="overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h3 class="title-1">Mirëseerdhët në <span class="text-color "> Soopcy</span></h3>
                    <h5 class="subtitle">Our Little Story</h5>
                    <div class="space-30"></div>
                    <p>
                        Hapëm dyert tona më <span class="text-color"> 31 dhjetor 2020</span> me qëllimin që të ndihmonim për ta bërë botën një vend më të mirë. I pasur me trashëgimi dhe i bollshëm me prodhime vendore vendi i mbledhjes celebratin në vendet më të mira të rajonit.
                    </p>
                    <blockquote>
                        Ne kemi të bëjmë me përpjekjet e kombinuara të kuzhinierëve, vreshtave dhe prodhuesve të birrës masa Enean. Cum sociis natoque penatibus dhe magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec
                    </blockquote>
                    <img src="{{asset('assets/images/sign.png')}}" alt="">
                    <div class="space-30"></div>
                </div>
                <!-- <div class="col-md-6">
                    <img data-aos="fade-up" data-aos-delay="800" data-aos-duration="500" src="assets/images/combine1.png" alt="" class="img-fluid">
                </div> -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <img data-aos="fade-up" data-aos-delay="800" data-aos-duration="500" src="{{'assets/images/about.png'}}" alt="" class="img-fluid aos-init">
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="space-70"></div> -->
    <div class="cta-background parallax-background">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-left">
                    <p class="lead font-italic">
                        " Një shëtitje e fuqishme me pesë milje do të bëjë më shumë mirë për një të rritur të pakënaqur, por ndryshe të shëndetshëm sesa të gjitha ilaçet dhe psikologjia në botë."
                    </p>
                    <span class="lead">- Paul Dudley White </span>
                </div>
            </div>
        </div>
    </div><!--end call to action-->
    <div class="space-70"></div>

    <div class="container">
        <div class="text-center">
            <h3 class="title-1">Todays <span class="text-color ">Special</span></h3>
            <h5 class="subtitle">menuja e ditore</h5>
            <div class="space-30"></div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6">
                <div>

                    <!-- Nav tabs -->
                    <ul class="nav menu-tabs margin-b-30" role="tablist">
                        @php
                            $active2 = true;

                            foreach($items->groupBy('category_id') as $item){
                                if ($active2){
                                    echo '<li role="presentation" class="nav-item"><a class="active show nav-link" href="#category_'.$item[0]->category->id.'" aria-controls="category_'.$item[0]->category->id.'" role="tab" data-toggle="tab">'.$item[0]->category->name.'</a></li>';
                                } else {
                                    echo '<li role="presentation" class="nav-item"><a class="nav-link" href="#category_'.$item[0]->category->id.'" aria-controls="category_'.$item[0]->category->id.'" role="tab" data-toggle="tab">'.$item[0]->category->name.'</a></li>';
                                }
                                $active2 = false;
                            }
                            $active2 = true;

                        @endphp

                        {{--                        <li role="presentation" class="nav-item"><a class="nav-link" href="#lunch" aria-controls="lunch" role="tab" data-toggle="tab">Lunch</a></li>--}}
                        {{--                        <li role="presentation" class="nav-item"><a class="nav-link" href="#dinner" aria-controls="dinner" role="tab" data-toggle="tab">Dinner</a></li>--}}
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        @foreach($items->groupBy('category_id') as $item)


                            <div role="tabpanel" class="tab-pane @if($active2) active show fade @endif" id="category_{{ $item[0]->category->id }}">
                                <ul class="list-unstyled">
                                    @foreach(@$items as $item_)
                                        @if($item[0]->category_id == $item_->category_id)
                                            <li class="menu-box clearfix margin-b-20">
                                                <div class="thumb">
                                                    <img src="{{ asset('assets/images/'.$item_->image) }}" width="70" class="img-fluid" alt="">
                                                </div>
                                                <div class="menu-content">
                                                    <h4><a href="#">{{ $item_->name }}</a> <span>{{ $item_->price }}</span></h4>
                                                </div>
                                            </li><!--end menu box-->
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            @php
                                $active2 = false;
                            @endphp
                        @endforeach

                    </div>

                </div><!--end tabs-->
            </div>
            <div class="col-md-6 text-center">

                <div class="abso-img">
                    <a href="{{ asset('menu') }}" class="btn btn-dark py-3">Shikoni menunë e plotë</a>
                    <img src="{{ asset('assets/images/m1.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div class="space-70"></div>
    <div class="about-chefs">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h3 class="text-uppercase title-1">Supreme <span class="text-color ">Teamwork</span></h3>
                    <p>
                        Customization is intuitive and easy Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet Lorem
                    </p>
                    <p>
                        Sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet Lorem
                    </p>
                </div>

            </div>
        </div>
    </div><!--about chef cta-->
    <div class="testimonials">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="text-center">
                        <h3 class="title-1">Customer <span class="text-color ">Reviews</span></h3>
                        <h5 class="subtitle">What they say</h5>
                        <div class="space-30"></div>
                    </div>
                    <div class="testi-slider">

                        <div class="flex-viewport"><ul class="slides" style="width: 1000%; transition-duration: 0s; transform: translate3d(-730px, 0px, 0px);"><li class="clone" aria-hidden="true" style="width: 730px; margin-right: 0px; float: left; display: block;">
                                    <p class="font-italic">
                                        " Duis leo justo, condimentum at purus eu,Aenean sed dolor sem. Etiam massa libero, auctor vitae egestas et, accumsan quis nunc. "
                                    </p>

                                    <div class="testi-info">
                                        <img src="assets/images/avtar-3.jpg" alt="" width="80" class="img-circle" draggable="false">
                                        <h4>Angelo Marchell <small> - Soopcy customer</small></h4>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </li>
                                <li class="flex-active-slide" data-thumb-alt="" style="width: 730px; margin-right: 0px; float: left; display: block;">
                                    <p class="font-italic">
                                        " Duis leo justo, condimentum at purus eu,Aenean sed dolor sem. Etiam massa libero, auctor vitae egestas et, accumsan quis nunc. "
                                    </p>

                                    <div class="testi-info">
                                        <img src="assets/images/avtar-1.jpg" alt="" width="80" class="img-circle" draggable="false">
                                        <h4>John Doe <small> - Soopcy customer</small></h4>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>

                                    </div>
                                </li><!--slide item-->
                                <li data-thumb-alt="" style="width: 730px; margin-right: 0px; float: left; display: block;">
                                    <p class="font-italic">
                                        " Perfect Themes and the best of all that you have many options to choose! Very fat responding! I highly recommend this theme and these people! "
                                    </p>

                                    <div class="testi-info">
                                        <img src="assets/images/avtar-2.jpg" alt="" width="80" class="img-circle" draggable="false">
                                        <h4>Jack Chen <small> - Soopcy customer</small></h4>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>

                                    </div>
                                </li><!--slide item-->
                                <li data-thumb-alt="" style="width: 730px; margin-right: 0px; float: left; display: block;">
                                    <p class="font-italic">
                                        " Duis leo justo, condimentum at purus eu,Aenean sed dolor sem. Etiam massa libero, auctor vitae egestas et, accumsan quis nunc. "
                                    </p>

                                    <div class="testi-info">
                                        <img src="assets/images/avtar-3.jpg" alt="" width="80" class="img-circle" draggable="false">
                                        <h4>Angelo Marchell <small> - Soopcy customer</small></h4>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>

                                    </div>
                                </li><!--slide item-->
                                <li class="clone" aria-hidden="true" style="width: 730px; margin-right: 0px; float: left; display: block;">
                                    <p class="font-italic">
                                        " Duis leo justo, condimentum at purus eu,Aenean sed dolor sem. Etiam massa libero, auctor vitae egestas et, accumsan quis nunc. "
                                    </p>

                                    <div class="testi-info">
                                        <img src="assets/images/avtar-1.jpg" alt="" width="80" class="img-circle" draggable="false">
                                        <h4>John Doe <small> - Soopcy customer</small></h4>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </li></ul></div><ol class="flex-control-nav flex-control-paging"><li><a href="#" class="flex-active">1</a></li><li><a href="#">2</a></li><li><a href="#">3<  /a></li></ol></div>
                </div>
            </div>
        </div>
    </div><!--testimonials end-->

    <div class="cta-background-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h3 class="text-uppercase">Rezervoni një tavolinë tani</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet est placerat in. At tempor commodo ullamcorper a. Pulvinar mattis nunc sed blandit.
                    </p>
                    <a href="{{ asset('reservation') }}" class="btn btn-white btn-rounded">Bej nje rezervim</a>
                </div>
            </div>
        </div>
    </div>
    <div class="cta-skin contact-info">
        <div class="container">
            <div class="row">
                <div class="col-md-4 margin-b-30">
                    <i class="fa fa-envelope"></i>
                    <div class="overflow-hidden">
                        <h4>Email</h4>
                        <p class="lead">
                            sopcy@dmain.com
                        </p>
                    </div>
                </div>
                <div class="col-md-4 margin-b-30">
                    <i class="fa fa-phone"></i>
                    <div class="overflow-hidden">
                        <h4>Reservation</h4>
                        <p class="lead">
                            +38344000000
                        </p>
                    </div>
                </div>
                <div class="col-md-4 margin-b-30">
                    <i class="fa fa-map-marker"></i>
                    <div class="overflow-hidden">
                        <h4>Location</h4>
                        <p class="lead">
                            124, Lorem Street
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="assets/js/plugins/plugins.js"></script>
    <script src="assets/js/template-custom.js" type="text/javascript"></script>
@endsection
