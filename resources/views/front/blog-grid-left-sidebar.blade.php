@extends('front.layouts.app')


@section('content')


<!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="#">Home</a></li>
                        <li class="page-breadcrumb__nav active"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <!-- ::::::  Start  Main Container Section  ::::::  -->
    <main id="main-container" class="main-container">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row">
                <!-- Start Leftside - Sidebar -->
                <div class="col-lg-3">
                    <div class="sidebar">
                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar__widget gray-bg">
                            <div class="sidebar__box">
                                <h5 class="sidebar__title">Search</h5>
                            </div>
                            <div class="sidebar__search">
                                <form action="#" method="post" class="form-box__single-group">
                                    <div class="d-flex">
                                        <input type="search" placeholder="Search entire here ...">
                                        <button class="btn btn--submit btn--blue btn--uppercase btn--weight " type="submit"><i class="fal fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>  <!-- End Single Sidebar Widget -->
                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar__widget gray-bg">
                            <div class="sidebar__box">
                                <h5 class="sidebar__title">Categories</h5>
                            </div>
                            <ul class="sidebar__catagories list-space--small">
                                <li><a class="link--gray" href="#">Dresses <span>(20)</span></a></li>
                                <li><a class="link--gray" href="#">Jackets & Coats <span>(9)</span></a></li>
                                <li><a class="link--gray" href="#">Jeans  <span>(11)</span></a></li>
                                <li><a class="link--gray" href="#">Electronic Cigarettes  <span>(6)</span></a></li>
                                <li><a class="link--gray" href="#">Bags & Cases <span>(4)</span></a></li>
                            </ul>
                        </div>  <!-- End Single Sidebar Widget -->
                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar__widget gray-bg">
                            <div class="sidebar__box">
                                <h5 class="sidebar__title">Recent Post</h5>
                            </div>
                            <ul class="sidebar__post list-space--medium">
                                <li class="d-flex align-items-center">
                                    <a class="sidebar__post-img" href="#">
                                        <div class="img-responsive">
                                            <img src="assets/img/product/size-small/product-home-1-img-1.jpg" alt="">
                                        </div>
                                    </a>
                                    <div class="sidebar__post-content">
                                        <a class="link--gray" href="{{$blog->title}}"></a>
                                        <span class="d-block color-gray">{{$blog->data}}</span>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <a class="sidebar__post-img" href="#">
                                        <div class="img-responsive">
                                            <img src="{{$blog->image}}" alt="">
                                        </div>
                                    </a>
                                    <div class="sidebar__post-content">
                                        <a class="link--gray" href="">This Is Second Post For XipBlog</a>
                                        <span class="d-block color-gray">APRIL 26, 2020</span>
                                    </div>
                                </li>
                            </ul>
                        </div>  <!-- End Single Sidebar Widget -->

                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar__widget gray-bg">
                            <div class="sidebar__box">
                                <h5 class="sidebar__title">Tags</h5>
                            </div>
                            <ul class="sidebar__tag list-space--small">
                                <li><a class="btn btn--box btn--blue" href="#">Electronics</a></li>
                                <li><a class="btn btn--box btn--blue" href="#">Audio</a></li>
                                <li><a class="btn btn--box btn--blue" href="#">Video</a></li>
                                <li><a class="btn btn--box btn--blue" href="#">Games</a></li>
                                <li><a class="btn btn--box btn--blue" href="#">VR</a></li>
                                <li><a class="btn btn--box btn--blue" href="#">Camera</a></li>
                                <li><a class="btn btn--box btn--blue" href="#">Lens</a></li>
                            </ul>
                        </div>  <!-- End Single Sidebar Widget -->
                          
                    </div>
                </div>  <!-- End Left Sidebar -->

                 <!-- Start Rightside - Content -->
                <div class="col-lg-9">
                    <div class="blog">
                        <div class="row">
                            <!-- Start Single Blog Grid -->
                            <div class="col-md-6">
                                <div class="blog__type-grid">
                                    <div class="blog__img"><a href=""><img src="assets/img/blog/list/blog-1.jpg" alt=""></a></div>
                                    
                                    <div class="blog__content">
                                        <a class="link--gray" href=""><h3 class="title title--small title--thin m-t-25">This is Third Post For XipBlog</h3></a>
                                        <div class="blog__archive m-t-20">
                                            <a href="#" class="link--gray link--icon-left m-r-30"><i class="far fa-calendar"></i> Oct 29, 2018</a>
                                            <a href="#" class="link--gray link--icon-left"><i class="far fa-user"></i> Jhon Doe</a>
                                        </div>
                                        <div class="para m-tb-20">
                                            <p class="para__text">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus expedita quo voluptate, esse ratione facilis quibusdam vel ad, quas ut reiciendis neque voluptates adipisci laborum, dolor saepe natus.
                                            </p>
                                        </div>
                                        <a class="link--gray link--icon-right" href="blog-single-left-sidebar.html">Read More <i class="icon-chevron-right"></i></a>
                                    </div>
                                </div> 
                            </div> <!-- End Single Blog Grid -->
                            <!-- Start Single Blog Grid -->
                            <div class="col-md-6">
                                <div class="blog__type-grid">
                                    <div class="blog__slider overflow-hidden pos-relative">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="blog__img"><img src="assets/img/blog/list/blog-1.jpg" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="blog__img"><img src="assets/img/blog/list/blog-2.jpg" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="blog__img"><img src="assets/img/blog/list/blog-3.jpg" alt=""></div>
                                            </div>
                                        </div>
                                        <div class="swiper-buttons">
                                            <!-- Add Arrows -->
                                            <div class="swiper-button-next inner__nav inner__nav--next"><i class="far fa-chevron-right"></i></div>
                                            <div class="swiper-button-prev inner__nav inner__nav--prev"><i class="far fa-chevron-left"></i></div>
                                        </div>
                                    </div>
                                    
                                    <div class="blog__content">
                                        <a class="link--gray" href=""><h3 class="title title--small title--thin m-t-25">This is Third Post For XipBlog</h3></a>
                                        <div class="blog__archive m-t-20">
                                            <a href="#" class="link--gray link--icon-left m-r-30"><i class="far fa-calendar"></i> Oct 29, 2018</a>
                                            <a href="#" class="link--gray link--icon-left"><i class="far fa-user"></i> Jhon Doe</a>
                                        </div>
                                        <div class="para m-tb-20">
                                            <p class="para__text">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus expedita quo voluptate, esse ratione facilis quibusdam vel ad, quas ut reiciendis neque voluptates adipisci laborum, dolor saepe natus.
                                            </p>
                                        </div>
                                        <a class="link--gray link--icon-right" href="blog-single-left-sidebar.html">Read More <i class="icon-chevron-right"></i></a>
                                    </div>
                                </div> 
                            </div> <!-- End Single Blog Grid -->
                            <!-- Start Single Blog Grid -->
                            <div class="col-md-6">
                                <div class="blog__type-grid">
                                    <div class="blog__img">
                                        <div class="blog__video pos-relative">
                                            <img src="assets/img/blog/list/blog-2.jpg" alt="">
                                            <a class="popup-icon vinobox-popup pos-absolute" data-autoplay="true" data-vbtype="video" href="https://youtu.be/QQHLGlB4Dpk?list=PLk25BQFrj7wHgCkzPuejFXJTiFIam-MVq"><i class="fal fa-play"></i></a>
                                        </div>
                                    </div>
                                    
                                    <div class="blog__content">
                                        <a class="link--gray" href=""><h3 class="title title--small title--thin m-t-25">This is Third Post For XipBlog</h3></a>
                                        <div class="blog__archive m-t-20">
                                            <a href="#" class="link--gray link--icon-left m-r-30"><i class="far fa-calendar"></i> Oct 29, 2018</a>
                                            <a href="#" class="link--gray link--icon-left"><i class="far fa-user"></i> Jhon Doe</a>
                                        </div>
                                        <div class="para m-tb-20">
                                            <p class="para__text">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus expedita quo voluptate, esse ratione facilis quibusdam vel ad, quas ut reiciendis neque voluptates adipisci laborum, dolor saepe natus.
                                            </p>
                                        </div>
                                        <a class="link--gray link--icon-right" href="blog-single-left-sidebar.html">Read More <i class="icon-chevron-right"></i></a>
                                    </div>
                                </div> 
                            </div> <!-- End Single Blog Grid -->
                            <!-- Start Single Blog Grid -->
                            <div class="col-md-6">
                                <div class="blog__type-grid">
                                    <div class="blog__img">
                                        <iframe class="embed-responsive-item" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/182537870&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
                                    </div>
                                    
                                    <div class="blog__content">
                                        <a class="link--gray" href=""><h3 class="title title--small title--thin m-t-25">This is Third Post For XipBlog</h3></a>
                                        <div class="blog__archive m-t-20">
                                            <a href="#" class="link--gray link--icon-left m-r-30"><i class="far fa-calendar"></i> Oct 29, 2018</a>
                                            <a href="#" class="link--gray link--icon-left"><i class="far fa-user"></i> Jhon Doe</a>
                                        </div>
                                        <div class="para m-tb-20">
                                            <p class="para__text">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus expedita quo voluptate, esse ratione facilis quibusdam vel ad, quas ut reiciendis neque voluptates adipisci laborum, dolor saepe natus.
                                            </p>
                                        </div>
                                        <a class="link--gray link--icon-right" href="blog-single-left-sidebar.html">Read More <i class="icon-chevron-right"></i></a>
                                    </div>
                                </div> 
                            </div> <!-- End Single Blog Grid -->
                        </div>
                    </div>

                    <div class="page-pagination">
                        <span>Showing 1-12 of 13 item(s)</span>
                        <ul class="page-pagination__list">
                            <li class="page-pagination__item">
                              <a class="page-pagination__link btn btn--gray"  href="#"><i class="icon-chevron-left"></i> Previous</a>
                            </li>
                            <li class="page-pagination__item"><a class="page-pagination__link active btn btn--gray"  href="#">1</a></li>
                            <li class="page-pagination__item"><a class="page-pagination__link btn btn--gray"  href="#">2</a></li>
                            <li class="page-pagination__item">
                              <a class="page-pagination__link btn btn--gray"  href="#">Next<i class="icon-chevron-right"></i></a>
                            </li>
                          </ul>
                    </div>
                </div>  <!-- Start Rightside - Content -->
                
            </div>
        </div>
    </main> <!-- ::::::  End  Main Container Section  ::::::  -->

    @endsection