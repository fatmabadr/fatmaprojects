@extends('layouts.front')
@section('content')

<!-- map
============================================ -->

        <section id="map" class="hero-map pt-0 pb-0">
            <div class="container-fluid pr-0 pl-0">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div id="googleMap"></div>
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
            <div class="search-properties">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <form class="mb-0 " method="post" action="/search">
                                @csrf

                                <div class="form-box ">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <div class="select--box">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select name="select-location" id="select-location">
                                                        <option>Any Location</option>
                                                     
                                                            <option value=> </option>
                                                       
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .col-md-3 end -->
                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <div class="select--box">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select name="select-type" id="select-type">
                                                    <option>Any Type</option>
                                        
                                            <option></option>
                                 
                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .col-md-3 end -->
                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <div class="select--box">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select name="select-status" id="select-status">
                                           <option>Any Status</option>
                                        
                                            <option></option>
                                       
                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .col-md-3 end -->
                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                            <input type="submit" value="Search" name="submit" class="btn btn--primary btn--block mb-30">
                                        </div>
                                        <!-- .col-md-3 end -->
                                        <div class="col-xs-12 col-sm-6 col-md-3 option-hide">
                                            <div class="form-group">
                                                <div class="select--box">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select name="select-rooms" id="select-rooms">
                                            <option>noOfRooms</option>
                          
                                            <option></option>
                                  
                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                      
                                        <!-- .col-md-3 end -->
                                        <div class="col-xs-12 col-sm-6 col-md-6 option-hide">
                                            <div class="filter mb-30">
                                                <p>
                                                    <label for="amount">Price Range: </label>
                                                    <input id="amount" type="text" class="amount" readonly>
                                                </p>
                                                <div class="slider-range"></div>
                                            </div>
                                        </div>
                                        <!-- .col-md-3 end -->
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <a href="#" class="less--options">Less options</a>
                                        </div>
                                    </div>
                                    <!-- .row end -->
                                </div>
                                <!-- .form-box end -->
                            </form>
                        </div>
                        <!-- .col-md-12 end -->
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .container end -->
            </div>
        </section>
        <!-- #map end -->

        <!-- properties-grid
============================================= -->
        <section id="properties-grid">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <!-- widget property type

  
=============================-->
                        <div class="widget widget-featured-property">
                            <div class="widget--title">
                                <h5>Featured Properties</h5>
                            </div>
                            <div class="widget--content">
                                <div class="carousel carousel-dots" data-slide="1" data-slide-rs="1" data-autoplay="false" data-nav="false" data-dots="true" data-space="0" data-loop="true" data-speed="800">
                                    <!-- .property-item #1 -->
                                    <div class="property-item">
                                        <div class="property--img">
                                            <img src="/assets/images/properties/13.jpg" alt="property image" class="img-responsive">
                                            <span class="property--status">For Rent</span>
                                        </div>
                                        <div class="property--content">
                                            <div class="property--info">
                                                <h5 class="property--title"><a href="property-single-gallery.html">House in Chicago</a></h5>
                                                <p class="property--location">1445 N State Pkwy, Chicago, IL 60610</p>
                                                <p class="property--price">$1200<span class="time">month</span></p>
                                            </div>
                                            <!-- .property-info end -->
                                        </div>
                                    </div>
                                    <!-- .property item end -->
                                
                                    <!-- .property-item #2 -->
                                    <div class="property-item">
                                        <div class="property--img">
                                            <img src="/assets/images/properties/3.jpg" alt="property image" class="img-responsive">
                                            <span class="property--status">For Sale</span>
                                        </div>
                                        <div class="property--content">
                                            <div class="property--info">
                                                <h5 class="property--title"><a href="property-single-gallery.html">Apartment in Long St.</a></h5>
                                                <p class="property--location">34 Long St, Jersey City, NJ 07305</p>
                                                <p class="property--price">$70,000</p>
                                            </div>
                                            <!-- .property-info end -->
                                        </div>
                                    </div>
                                    <!-- .property item end -->
                                </div>
                                <!-- .carousel end -->
                            </div>
                        </div>
                        <!-- . widget featured property end -->
                    </div>
                    <!-- .col-md-4 end -->
                    <div class="col-xs-12 col-sm-12 col-md-8">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="properties-filter clearfix">
                                    <div class="select--box pull-left">
                                        <label>Sort by:</label>
                                        <i class="fa fa-angle-up"></i>
                                        <i class="fa fa-angle-down"></i>
                                        <select>
								<option selected="" value="Default">Default Sorting</option>
								<option value="Larger">Newest Items</option>
								<option value="Larger">oldest Items</option>
								<option value="Larger">Hot Items</option>
								<option value="Small">Highest Price</option>
								<option value="Medium">Lowest Price</option>
							</select>
                                    </div>
                                    <!-- .select-box -->
                                    <div class="view--type pull-right">
                                        <a id="switch-list" href="#" class=""><i class="fa fa-th-list"></i></a>
                                        <a id="switch-grid" href="#" class="active"><i class="fa fa-th-large"></i></a>
                                    </div>
                                </div>
                            </div>

                            @foreach($unit as $unit)
                            <div class="properties properties-grid">
                                <!-- .col-md-12 end -->
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <!-- .property-item #1 -->
                                    <div class="property-item">
                                        <div class="property--img">
                                            <a href="property-single-gallery.html">
                                <img src="/assets/images/properties/1.jpg" alt="property image" class="img-responsive">
								</a>
                                            <span class="property--status">{{$unit->status}}</span>
                                        </div>
                                        <div class="property--content">
                                            <div class="property--info">
                                                <h5 class="property--title"><a href="property-single-gallery.html">{{$unit->title}}</a></h5>
                                                <p class="property--location">127 Kent Street, Sydney, NSW 2000</p>
                                                <p class="property--price">${{$unit->price}}</p>
                                            </div>
                                            <!-- .property-info end -->
                                            <div class="property--features">
                                                <ul class="list-unstyled mb-0">
                                                    <li><span class="feature">Rooms:</span><span class="feature-num">{{$unit->noOfRooms}}</span></li>
                                                    <li><span class="feature">Baths:</span><span class="feature-num">2</span></li>
                                                    <li><span class="feature">Area:</span><span class="feature-num">{{$unit->area}}m2</span></li>
                                                </ul>
                                            </div>
                                            <!-- .property-features end -->
                                        </div>
                                    </div>
                                </div>
                                <!-- .property item end -->

                            @endforeach
                                
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-50">
                                <ul class="pagination">
                            

                                        <a href="#" aria-label="Next">
                            <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- .col-md-12 end -->
                        </div>
                        <!-- .row -->
                    </div>
                    <!-- .col-md-8 end -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- #properties-grid  end  -->

        <!-- cta #1
============================================= -->
        <section id="cta" class="cta cta-1 text-center bg-overlay bg-overlay-dark pt-90">
            <div class="bg-section"><img src="/assets/images/cta/bg-1.jpg" alt="Background"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <h3>Join our professional team & agents to start selling your house</h3>
                        <a href="#" class="btn btn--primary">Contact</a>
                    </div>
                    <!-- .col-md-6 -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- #cta1 end -->
        <!-- Footer #1
============================================= -->
@endsection
