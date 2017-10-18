@extends('main2')
@section('title','Add Property')
@section('breadcrumb','Add Property')
@section('content')
		<!-- Add property page start -->
        <div class="add-property-page pt-130">
            <form action="#">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="add-property-box step-1">
                                <div class="step-title">
                                    <h4>Step # 1</h4>
                                </div>
                                <div class="basic-information-box">
                                    <div class="information-title">
                                        <h5>Basic Information</h5>
                                    </div>
                                    <div class="basic-information-form">
                                        <div class="row">
                                            <div class="col-md-9 col-sm-7 col-xs-12">
                                                <div class="input-file">
                                                    <label>Property Title</label>
                                                    <input type="text" placeholder="Enter your title here">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-5 col-xs-12">
                                                <div class="input-file">
                                                    <label>Price</label>
                                                    <input type="text" placeholder="Price $">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xs-12 col-sm-12">
                                                <div class="information-text">
                                                    <label>Property Text</label>
                                                    <textarea placeholder="Write here"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-property-box step-2">
                                <div class="step-title">
                                    <h4>Step # 2</h4>
                                </div>
                                <div class="information-title">
                                    <h5>Basic Information</h5>
                                </div>
                                <div class="details-information-box">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12 ">
                                            <div class="input-file">
                                                <label>Town</label>
                                                <select class="selectpicker" title="Town" data-hide-disabled="true" data-live-search="true">
                                                        <option>Nairobi</option>
                                                        <option>Mombasa</option>
                                                        <option>Kisumu</option>
                                                        <option>Nakuru</option>
                                                        <option>Naivasha</option>
                                                        <option>Kampala</option>
                                                        <option>Entebbe</option>
                                                        <option>Arusha</option>
                                                        <option>Daresalaam</option>
                                                        <option>Moshi</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="input-file">
                                                <label>Location</label>
                                                <input type="text" placeholder="Location">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="input-file">
                                                <label>Property type</label>
                                                <select class="selectpicker" title="Property type" data-hide-disabled="true">
                                                    <option>Apartment</option>
                                                    <option>Bungalow</option>
                                                    <option>Mansionette</option>
                                                    <option>Flat</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="input-file">
                                                <label>Status</label>
                                                <select class="selectpicker" title="Sale" data-hide-disabled="true">
                                                    <option>Rent</option>
                                                    <option>Sale</option>
                                             </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="input-file">
                                                <label>No. of Bedroom</label>
                                                <select class="selectpicker" title="No. of Bedrooms" data-hide-disabled="true">
                                                    <optgroup  label="1">
                                                        <option label="1">1 Bedroom</option>
                                                        <option>2 Bedrooms</option>
                                                        <option>3 Bedrooms</option>
                                                        <option>4 Bedrooms</option>
                                                        <option>5 Bedrooms</option>
                                                        <option>6+ Bedrooms</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="input-file">
                                                <label>No. of Bathroom</label>
                                                <select class="selectpicker" title="No. of Bedrooms" data-hide-disabled="true">
                                                    <optgroup  label="2">
                                                        <option label="1">1 Bathroom</option>
                                                        <option>2 Bathrooms</option>
                                                        <option>3 Bathrooms</option>
                                                        <option>4 Bathrooms</option>
                                                        <option>5 Bathrooms</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="input-file">
                                                <label>No. of Cars in Garage</label>
                                                <select class="selectpicker" title="No of Cars in Garagee" data-hide-disabled="true">
                                                    <optgroup >
                                                        <option >1 Car</option>
                                                        <option >2 Cars</option>
                                                        <option >3 Cars</option>
                                                        <option >4 Cars</option>
                                                        <option >5 Cars</option>
                                                        <option >6+ Cars</option>
                                                   </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="input-file">
                                                <label>Area (squft)</label>
                                                <input type="text" name="max-area" placeholder="Area (squft)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-property-box step-3">
                                <div class="step-title">
                                    <h4>Step # 3</h4>
                                </div>
                                <div class="image-upload-inner">
                                    <div class="information-title">
                                        <h5>Image gallery</h5>
                                    </div>
                                    <div class="image-upload-box">
                                        <label class="custom-file-upload">
                                            <span><i class="icofont icofont-folder-open"></i> Browse Images</span> <input type="file">
                                        </label>
                                    </div>
                                </div>
                                <div class="video-upload-inner">
                                    <div class="information-title">
                                        <h5>Video Presentation</h5>
                                    </div>
                                    <div class="video-upload-box">
                                        <label class="custom-video-upload">
                                            <span>Add Video</span> <input type="file">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="add-property-box step-4">
                                <div class="row">
                                    <div class="col-md-4 col-sm-5 col-xs-12">
                                        <div class="property-features">
                                            <div class="information-title">
                                                <h5>Property Features</h5>
                                            </div>
                                        </div>
                                        <div class="features-box">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="feature-check box1">
                                                        <input id="remember-1" type="checkbox">
                                                        <label for="remember-1">Air Conditioning</label>
                                                    </div>
                                                    <div class="feature-check box2">
                                                        <input id="remember-2" type="checkbox">
                                                        <label for="remember-2">Bedding</label>
                                                    </div>
                                                    <div class="feature-check box3">
                                                        <input id="remember-3" type="checkbox">
                                                        <label for="remember-3">Balcony</label>
                                                    </div>
                                                    <div class="feature-check box4">
                                                        <input id="remember-4" type="checkbox">
                                                        <label for="remember-4">Cable TV</label>
                                                    </div>
                                                    <div class="feature-check box5">
                                                        <input id="remember-5" type="checkbox">
                                                        <label for="remember-5">Internet</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 pd-left">
                                                    <div class="feature-check box6">
                                                        <input id="remember-6" type="checkbox">
                                                        <label for="remember-6">Parking</label>
                                                    </div>
                                                    <div class="feature-check box7">
                                                        <input id="remember-7" type="checkbox">
                                                        <label for="remember-7">Lift</label>
                                                    </div>
                                                    <div class="feature-check box8">
                                                        <input id="remember-8" type="checkbox">
                                                        <label for="remember-8">Pool</label>
                                                    </div>
                                                    <div class="feature-check box9">
                                                        <input id="remember-9" type="checkbox">
                                                        <label for="remember-9">Dishwasher</label>
                                                    </div>
                                                    <div class="feature-check box10">
                                                        <input id="remember-10" type="checkbox">
                                                        <label for="remember-10">Toaster</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-7 col-xs-12">
                                        <div class="place-map">
                                            <div class="information-title">
                                                <h5>Place on Map</h5>
                                            </div>
                                            <div class="place-map-inner">
                                                <div id="googleMap-2" style="width:100%;height:365px;"></div>
                                            </div>
                                        </div>
                                   </div>
                                </div>
                            </div>
                            <div class="add-property-submit">
                                <button type="submit">ADD PRPPERTY</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- Add property page End -->
@endsection