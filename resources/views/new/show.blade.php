@extends('main2')
@section('title','Single Properties')
@section('page-title','Single Properties')
@section('breadcrumb','Single Properties')
@section('content')
		<!--Feature property section-->
        <div class="feature-property properties-list pt-130">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12 ">
                        <div class="single-property-details">
                            <div class="property-details-img">
                                <img src="{{ $newproperty->property_image }}" alt="">
                            </div>
                            <div class="single-property-description">
                                <div class="desc-title">
                                    <h5>Description</h5>
                                </div>
                                <div class="description-inner">
                                    <p class="text-1">
                                        {{ $newproperty->property_descr }}
                                    </p>
                                </div>
                            </div>
                            <div class="condition-amenities">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="property-condition">
                                            <div class="condtion-title">
                                                <h5>Condition</h5>
                                            </div>
                                            <div class="property-condition-list">
                                                <ul>
                                                    <li>
                                                        <img src="{{ URL::asset('img/property/icon-6.png') }}" alt="">
                                                        <span>Area {{ $newproperty->area }} sqft</span>
                                                    </li>
                                                    <li>
                                                        <img src="{{ URL::asset('img/property/icon-7.png') }}" alt="">
                                                        <span>{{ $newproperty->bedroom }} Bedroom</span>
                                                    </li>
                                                    <li>
                                                        <img src="{{ URL::asset('img/property/icon-8.png') }}" alt="">
                                                        <span>{{ $newproperty->bathroom }} Bathroom</span>
                                                    </li>
                                                    <li>
                                                        <img src="{{ URL::asset('img/property/icon-9.png') }}" alt="">
                                                        <span>{{ $newproperty->garage }} car Garage</span>
                                                    </li>
                                                    <li>
                                                        <img src="{{ URL::asset('img/property/icon-10.png') }}" alt="">
                                                        <span>Kitchen</span>
                                                    </li>
                                                    <li>
                                                        <span class="price">
                                                            Ksh. {{ $newproperty->property_price }}
                                                        </span>
                                                    </li>
                                                </ul>
                                                <div class="property-location">
                                                    <p><img src="{{ URL::asset('img/property/icon-5.png') }}" alt=""> {{ $newproperty->property_location }}, {{ $newproperty->property_town }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="amenities">
                                            <div class="amenities-title">
                                                <h5>Amenities</h5>
                                            </div>
                                            <div class="amenities-list">
                                                <ul>
                                                    <li><i class="fa fa-check-square-o"></i> <span>Air Conditioning</span></li>
                                                    <li><i class="fa fa-check-square-o"></i> <span>Bedding</span></li>
                                                    <li><i class="fa fa-check-square-o"></i> <span>Balcony</span></li>
                                                    <li><i class="fa fa-check-square-o"></i> <span>Cable TV</span></li>
                                                    <li><i class="fa fa-check-square-o"></i> <span>Internet</span></li>
                                                    <li><i class="fa fa-check-square-o"></i> <span>Parking</span></li>
                                                    <li><i class="fa fa-check-square-o"></i> <span>Lift</span></li>
                                                    <li><i class="fa fa-check-square-o"></i> <span>Pool</span></li>
                                                    <li><i class="fa fa-check-square-o"></i> <span>Dishwasher</span></li>
                                                    <li><i class="fa fa-check-square-o"></i> <span>Furnished</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="planning">
                                <div class="row">
                                    <div class="col-md-5 col-sm-6 col-xs-12">
                                        <div class="plan-title">
                                            <h5>Floor Plan</h5>
                                        </div>
                                        <div class="plan-map">
                                            <img src="{{ URL::asset('img/property/plan-map.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-7  col-sm-6 col-xs-12">
                                        <div class="plan-title">
                                            <h5>Video Presentation</h5>
                                        </div>
                                        <div class="vimeo-video">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe src="https://player.vimeo.com/video/12690053" width="100%" height="300px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="feedback">
                                <div class="feedback-title">
                                    <h5>3 Feedback</h5>
                                </div>
                                <div class="single-feedback mb-35 fix">
                                    <div class="feedback-img">
                                        <img src="{{ URL::asset('img/feedback/1.png') }}" alt="">
                                    </div>
                                    <div class="feedback-desc">
                                        <div class="feedback-title">
                                            <h6>Albert Smith</h6>
                                        </div>
                                        <p class="feedback-post">
                                            6 hour ago
                                        </p>
                                        <p class="review-desc">There are some business lorem ipsum dolor sit amet, consectetur adipiscing elit, sed domod empor inc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudt </p>
                                    </div>
                                </div>
                                <div class="single-feedback mb-35 fix">
                                    <div class="feedback-img">
                                        <img src="{{ URL::asset('img/feedback/2.png') }}" alt="">
                                    </div>
                                    <div class="feedback-desc">
                                        <div class="feedback-title">
                                            <h6>Albert Smith</h6>
                                            <p class="feedback-post">
                                                6 hour ago
                                            </p>
                                            <p class="review-desc">There are some business lorem ipsum dolor sit amet, consectetur adipiscing elit, sed domod empor inc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudt </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-feedback fix">
                                    <div class="feedback-img">
                                        <img src="{{ URL::asset('img/feedback/3.png') }}" alt="">
                                    </div>
                                    <div class="feedback-desc">
                                        <div class="feedback-title">
                                            <h6>Albert Smith</h6>
                                            <p class="feedback-post">
                                                6 hour ago
                                            </p>
                                            <p class="review-desc">There are some business lorem ipsum dolor sit amet, consectetur adipiscing elit, sed domod empor inc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudt </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="leave-review">
                                <div class="review-title">
                                    <h5>Leave a Review</h5>
                                </div>
                                <div class="review-inner">
                                    <form action="#">
                                        <div class="form-top">
                                            <div class="input-filed">
                                                <input type="text" placeholder="Your name">
                                            </div>
                                            <div class="input-filed">
                                                <input type="text" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="form-bottom">
                                            <div class="input-field">
                                                <input type="text" placeholder="Subject">
                                            </div>
                                            <textarea placeholder="Write here"></textarea>
                                        </div>
                                        <div class="submit-form">
                                            <button type="submit">SUBMIT REVIEW</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="sidebar right-side">
                            <aside class="single-side-box search-property">
                                <div class="aside-title">
                                    <h5>Search for Property</h5>
                                </div>
                                <div class="find_home-box">
                                    <div class="find_home-box-inner">
                                        <form action="#">
                                            <div class="find-home-cagtegory">
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="find-home-item custom-select ">                  
                                                            <select class="selectpicker" title="Location" data-hide-disabled="true" data-live-search="true">
                                                                <optgroup disabled="disabled" label="disabled">
                                                                    <option>Hidden</option>
                                                                </optgroup>
                                                                <optgroup label="Naivasha">
                                                                    <option>Sydney</option>
                                                                    <option>Melbourne</option>
                                                                    <option>Cairns</option>
                                                                </optgroup>
                                                                <optgroup label="Nairobi">
                                                                    <option>South Carolina</option>
                                                                    <option>Florida</option>
                                                                    <option>Rhode Island</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="find-home-item custom-select">                  
                                                            <select class="selectpicker" title="Sub - Location" data-hide-disabled="true" data-live-search="true">
                                                                <optgroup disabled="disabled" label="disabled">
                                                                    <option>Hidden</option>
                                                                </optgroup>
                                                                <optgroup label="Australia">
                                                                    <option>southeastern coast</option>
                                                                    <option>southeastern tip</option>
                                                                    <option>northwest corner</option>
                                                                </optgroup>
                                                                <optgroup label="USA">
                                                                    <option>Charleston</option>
                                                                    <option>St. Petersburg</option>
                                                                    <option>Newport</option>
                                                                </optgroup>
                                                            </select>
                                                        </div> 
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="find-home-item">
                                                            <input type="text" name="min-area" placeholder="Min area (sqft)">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="find-home-item ">
                                                            <input type="text" name="max-area" placeholder="Max area (sqft)">
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="find-home-item no-caret  custom-select">                  
                                                            <select class="selectpicker" title="No. of Bedrooms" data-hide-disabled="true">
                                                                <optgroup  label="1">
                                                                    <option label="1">1 Bedrooms</option>
                                                                    <option>2 Bedrooms</option>
                                                                    <option>3 Bedrooms</option>
                                                                    <option>4 Bedrooms</option>
                                                                    <option>5 Bedrooms</option>
                                                                </optgroup>
                                                            </select>
                                                        </div> 
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="find-home-item no-caret  custom-select">                  
                                                            <select class="selectpicker" title="No. of Bathrooms" data-hide-disabled="true">
                                                                <optgroup label="2">
                                                                    <option>1 Bathrooms</option>
                                                                    <option>2 Bathrooms</option>
                                                                    <option>3 Bathrooms</option>
                                                                    <option>4 Bathrooms</option>
                                                                    <option>5 Bathrooms</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="find-home_bottom">
                                                        <div class="col-md-12">
                                                            <div class="find-home-item">
                                                                <!-- shop-filter -->
                                                                <div class="shop-filter">
                                                                    <div class="price_filter">
                                                                        <div class="price_slider_amount">
                                                                            <input type="submit"  value="price range"/> 
                                                                            <input type="text" id="amount" name="price"  placeholder="Add Your Price" /> 
                                                                        </div>
                                                                        <div id="slider-range"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="find-home-item">
                                                               <button type="submit">SEARCH PROPERTY </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                            </aside>
                            <aside class="single-side-box feature">
                                <div class="aside-title">
                                    <h5>Featured Property</h5>
                                </div>
                                <div class="feature-property">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="single-property">
                                                <div class="property-img">
                                                    <a href="{{ route('single-properties') }}">
                                                        <img src="{{ URL::asset('img/property/7.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="property-desc text-center">
                                                    <div class="property-desc-top">
                                                        <h6><a href="{{ route('single-properties') }}">Concept's Name</a></h6>
                                                        <h4 class="price">$52,354</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="single-property">
                                                <div class="property-img">
                                                    <a href="{{ route('single-properties') }}">
                                                        <img src="{{ URL::asset('img/property/3.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="property-desc text-center">
                                                    <div class="property-desc-top">
                                                        <h6><a href="{{ route('single-properties') }}">Concept's Name</a></h6>
                                                        <h4 class="price">$52,354</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="single-property">
                                                <div class="property-img">
                                                    <a href="{{ route('single-properties') }}">
                                                        <img src="{{ URL::asset('img/property/5.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="property-desc text-center">
                                                    <div class="property-desc-top">
                                                        <h6><a href="{{ route('single-properties') }}">Concept's Name</a></h6>
                                                        <h4 class="price">$52,354</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="single-property">
                                                <div class="property-img">
                                                    <a href="{{ route('single-properties') }}">
                                                        <img src="{{ URL::asset('img/property/11.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="property-desc text-center">
                                                    <div class="property-desc-top">
                                                        <h6><a href="{{ route('single-properties') }}">Concept's Name</a></h6>
                                                        <h4 class="price">$52,354</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                             <aside class="single-side-box agent">
                                <div class="aside-title">
                                    <h5>Our Agent</h5>
                                </div>
                                <div class="our-agent-sidbar">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-agent">
                                                <div class="agent-img">
                                                    <a href="{{ route('agent-details') }}">
                                                        <img src="{{ URL::asset('img/team/1.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="agent-title">
                                                    <h6><a href="{{ route('agent-details') }}">Agent's Name</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-agent">
                                                <div class="agent-img">
                                                    <a href="{{ route('agent-details') }}">
                                                        <img src="{{ URL::asset('img/team/2.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="agent-title">
                                                    <h6><a href="{{ route('agent-details') }}">Agent's Name</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-agent">
                                                <div class="agent-img">
                                                    <a href="{{ route('agent-details') }}">
                                                        <img src="{{ URL::asset('img/team/3.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="agent-title">
                                                    <h6><a href="{{ route('agent-details') }}">Agent's Name</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-agent">
                                                <div class="agent-img">
                                                    <a href="{{ route('agent-details') }}">
                                                        <img src="{{ URL::asset('img/team/4.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="agent-title">
                                                    <h6><a href="{{ route('agent-details') }}">Agent's Name</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-agent">
                                                <div class="agent-img">
                                                    <a href="{{ route('agent-details') }}">
                                                        <img src="{{ URL::asset('img/team/5.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="agent-title">
                                                   <h6><a href="{{ route('agent-details') }}">Agent's Name</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-agent">
                                                <div class="agent-img">
                                                    <a href="{{ route('agent-details') }}">
                                                        <img src="{{ URL::asset('img/team/6.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="agent-title">
                                                    <h6><a href="{{ route('agent-details') }}">Agent's Name</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <aside class="single-side-box tags">
                                <div class="aside-title">
                                    <h5>Tags</h5>
                                </div>
                                <div class="our-tag-list">
                                    <ul>
                                        <li><a href="#">Real Estate</a></li>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Appartment</a></li>
                                        <li><a href="#">Duplex villa</a></li>
                                        <li><a href="#">But property</a></li>
                                    </ul>
                                </div>
                            </aside>
                            <aside class="single-side-box video">
                                <div class="aside-title">
                                    <h5>Take a tour</h5>
                                </div>
                                <div class="video-sidebar">
                                    <div class="video-img">
                                        <img src="{{ URL::asset('img/common/video.jpg') }}" alt="">
                                    </div>
                                    <div class="play-button">
                                        <a href="https://youtu.be/vb5KLYAtPIs"><i class="fa fa-play"></i></a>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Feature property section end-->
@endsection