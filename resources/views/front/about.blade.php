@extends('front.layouts.app')


@section('content')

   
   <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="#">Home</a></li>
                        <li class="page-breadcrumb__nav active">About</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <!-- ::::::  Start  Main Container Section  ::::::  -->
    <main id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-top m-b-30">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="about-img m-b-30">
                                    <div class="img-responsive m-b-40">
                                        <img src="assets/img/about/about-1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="about-content">
                                    <h1 class="title title--large title--thin">{{ $about['title'] }}</h1>
                                    <div class="para__content">
                                        <p class="para__text">{{$about->content}}</p>
                                        <p class="para__text">{{ $about['sub_content'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        @foreach ($aboute_items as $item)
                        <div class="col-md-4">
                            <div class="about-single m-t-30">
                                <h3 class="title title--small title--regular">{{$item->title}}</h3>
                                <div class="para__content">
                                    <p class="para__text">{{$item->content}}</p>
                                </div>
                            </div>
                        </div>
                    
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main> <!-- ::::::  End  Main Container Section  ::::::  -->
    @endsection

   