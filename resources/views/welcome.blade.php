@extends('layouts.app')

@section('content')
    <div class="home-container">

        <div class = "img-slider">

            <img src="{{url('/storage/placeholderImage.jpg')}}" alt="current-bannerimage" id = "current-bannerimage">
            <img src="{{url('/storage/berveybookingsIcons/toLeftArrow.svg')}}" alt="left-arrow" id = "leftArrow" class = "slider-arrow" onclick="">
            <img src="{{url('/storage/berveybookingsIcons/toRightArrow.svg')}}" alt="right-arrow" id = "rightArrow" class = "slider-arrow" onclick="">
    
            <div class = "qoutes-and-tips">
                <p id="qoute-and-tip-paragraph">
                    Did you know:- The perfect home remedy for you hair is at reach? With just vinigar and water mahh hdhh dhhh dhhds  dshhds dshhds hds
                </p>
            </div>
            
            <div class = "img-indicators">
                <div class = "img-indicator"></div>
                <div class = "img-indicator"></div>
                <div class = "img-indicator"></div>
                <div class = "img-indicator"></div>
            </div>
        </div>

        <div class = "about-service-container">

            <img src="{{url('/storage/berveybookingsIcons/berveyServices.svg')}}" alt="bervey-services-icon">

            <p>These are the services we offer, click book to give your hair a treat. Enjoy.</p>

        </div>
    
        <div class = "services-container">
    
            <div class = "col-lg-3 col-md-6 col-sm-6 col-xs-6 service-col">

                <a href="/berveybookings/public/services/{{1}}">
                    <div class = "service-container">
                        <div class = "service-details">
                            
                        </div>
                        
                        <button class = "book-btn">Book</button>
                        <img src="{{url('/storage/berveybookingsImages/GluelessLaceFrontal.jpg')}}" alt="">
                    </div>
                </a>
               
            </div>
        
            <div class = "col-lg-3 col-md-6 col-sm-6 col-xs-6 service-col">

                <a href="/berveybookings/public/services/{{2}}">
                    <div class = "service-container">
                        <div class = "service-details">
                            
                        </div>

                        <button class = "book-btn">Book</button>
                        <img src="{{url('/storage/berveybookingsImages/GluedLaceFrontalCover.jpg')}}" alt="">
                    </div >
                </a>
        
            </div>
            <div class = "col-lg-3 col-md-6 col-sm-6 col-xs-6 service-col">
        
                <a href="/berveybookings/public/services/{{3}}">
                    <div class = "service-container">
                        <div class = "service-details">
                            
                        </div>
                        
                        <button class = "book-btn">Book</button>
                        <img src="{{url('/storage/berveybookingsImages/Glueless360.jpg')}}" alt="">
                    </div >
                </a>
        
            </div>
        
            <div class = "col-lg-3 col-md-6 col-sm-6 col-xs-6 service-col">
        
               <a href="/berveybookings/public/services/{{4}}">
                    <div class = "service-container">
                        <div class = "service-details">
                           
                        </div>

                        <button class = "book-btn">Book</button>
                        <img src="{{url('/storage/berveybookingsImages/Glued360.jpg')}}" alt="">
                    </div >
               </a>
        
            </div>
        
            
        </div>

    </div>
    
    
@endsection

@push('customJS')   
    <script src="{{ asset('js/mainCustomJS.js') }}"></script>
@endpush

