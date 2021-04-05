@extends('layouts.app')

@section('content')

    <div class="home-container">

        <div class = "img-slider">

            <img src="{{url('/storage/sanePixie.jpg')}}" class = "slide-image" alt="current-bannerimage" data-imageindex = "3">
            <img src="{{url('/storage/MamaVCurls.jpg')}}" class = "slide-image" alt="current-bannerimage" data-imageindex = "2">
            <img src="{{url('/storage/SidePoliticsMom.jpg')}}" class = "slide-image" alt="current-bannerimage" data-imageindex = "1">
            <img src="{{url('/storage/SidePolitics.jpg')}}" class = "slide-image visible-image" alt="current-bannerimage" data-imageindex = "0">

            <div class = "socialmedia-container">

                <div class = "socialmedia-img-handle-container">
                    <div class = "socialmedia-img-container">
                        <a href = "https://www.instagram.com/bervey_/" id = "socialmedia-link">
                            <img src="{{url('/storage/berveybookingsIcons/InstagramIcon.svg')}}" alt="inst-icon" id = "social-image">
                            
                        </a>
                    </div>
                    <div class = "socialmedia-handle-container">
                        <p id = "social-handle">@bervey_</p>
                    </div>
                </div>

            </div>

            <img src="{{url('/storage/berveybookingsIcons/toLeftArrow.svg')}}" alt="left-arrow" id = "leftArrow" class = "slider-arrow" onclick="">
            <img src="{{url('/storage/berveybookingsIcons/toRightArrow.svg')}}" alt="right-arrow" id = "rightArrow" class = "slider-arrow" onclick="">
    
            <div class = "img-indicators">
                <div class = "img-indicator" data-indicatornum = "0" style = "background-color: rgba(255 , 182 , 193  , 1);"></div>
                <div class = "img-indicator" data-indicatornum = "1"></div>
                <div class = "img-indicator" data-indicatornum = "2"></div>
                <div class = "img-indicator" data-indicatornum = "3"></div>
            </div>

        </div>

        <div class = "about-service-container">

            <img src="{{url('/storage/berveybookingsIcons/noticIcon.svg')}}" alt="bervey-services-icon">

            <h3>Notices</h3>

        </div>

        <div class = "outer-notice-container">
            <h4>Look-Out Notices</h4>

            <div class = "scroll-img-container">

                <img src="{{url('/storage/berveybookingsIcons/scrollLeftNotice.svg')}}" alt="left-notice-arrow" class = "scroll-notice-arrow left-scroll-notice-arrow" id = "scroll-left-notice-arrow">
                <img src="{{url('/storage/berveybookingsIcons/scrollRightNotice.svg')}}" alt="right-notice-arrow" class = "scroll-notice-arrow right-scroll-notice-arrow" id = "scroll-right-notice-arrow">

            </div>
            
            <div class="inner-notice-container" id = "lookout-notice-container">
                
                <div class = "look-out-notice">
                    <div class = "look-out-notice-image">
                        <img src="{{url('/storage/berveyFreeInstallation2.png')}}" alt="look-out-img">
                    </div>
                    <div class = "look-out-notice-description">
                        <p>If you are booking for the first time, the appointment will be absolutely free.</p>
                    </div>
                </div>
                <div class = "look-out-notice">
                    <div class = "look-out-notice-image">
                        <img src="{{url('/storage/berveyEcommerNotice2.png')}}" alt="look-out-img">
                    </div>
                    <div class = "look-out-notice-description">
                        <p>Bervey is working on an e-commerce platform, aimed at making your beauty more convinient.</p>
                    </div>
                </div>
                <div class = "look-out-notice">
                    <div class = "look-out-notice-image">
                        <img src="{{url('/storage/berveyFoamNotice.png')}}" alt="look-out-img">
                    </div>
                    <div class = "look-out-notice-description">
                        <p>Bervey is working on Foam(Wrap Lotion). Aimed specifically for clueless application.</p>
                    </div>
                </div>
                <div class = "look-out-notice">
                    <div class = "look-out-notice-image">
                        <img src="{{url('/storage/berveySocialResponsibilityNotice.png')}}" alt="look-out-img">
                    </div>
                    <div class = "look-out-notice-description">
                        <p>Bervey is working on an event, as per our social responsibilty program.</p>
                    </div>

                </div>
                <div class = "look-out-notice">
                    <div class = "look-out-notice-image">
                        <img src="{{url('/storage/berveyFreeInstallation2.png')}}" alt="look-out-img">
                    </div>
                    <div class = "look-out-notice-description">
                        <p>If you are booking for the first time, the appointment will be absolutely free.</p>
                    </div>

                </div>

            </div>
            
        </div>

       

        <div class = "outer-notice-container">
            <h4>Appointment Notices</h4>

            <div class = "scroll-img-container">

                <img src="{{url('/storage/berveybookingsIcons/scrollLeftNotice.svg')}}" alt="left-notice-arrow" class = "scroll-notice-arrow left-scroll-notice-arrow" id = "scroll-left-booking-notice-arrow">
                <img src="{{url('/storage/berveybookingsIcons/scrollRightNotice.svg')}}" alt="right-notice-arrow" class = "scroll-notice-arrow right-scroll-notice-arrow" id = "scroll-right-booking-notice-arrow">

            </div>

            <div class="inner-notice-container" id = "booking-notice-container">

                <div class = "appointment-notice">
                    <img src="{{url('/storage/berveybookingsIcons/berveyNoticeIcon.svg')}}" alt="bervey Notice Icon">
                    <h4>First Booking</h4>

                    <p>
                        If you are booking for the first time, the appointment will be absolutely free. Too good to be true? Try it.
                    </p>
                    
                </div>
                <div class = "appointment-notice">
                    <img src="{{url('/storage/berveybookingsIcons/berveyNoticeIcon.svg')}}" alt="bervey Notice Icon">
                    <h4>Customization</h4>

                    <p>
                        Please deliver your hair(Own/Purchased from 
                        Bervey) 2 days Prior to your appointment.Should you be late, you will be charged. 
                    </p>
                    
                </div>
                <div class = "appointment-notice">
                    <img src="{{url('/storage/berveybookingsIcons/berveyNoticeIcon.svg')}}" alt="bervey Notice Icon">
                    <h4>Flat Base</h4>
                    <p>
                        Please come with your hair braided back, 10-14 cornrows to ensure a flat base underneath.
                    </p>
                </div>
                <div class = "appointment-notice">
                    <img src="{{url('/storage/berveybookingsIcons/berveyNoticeIcon.svg')}}" alt="bervey Notice Icon">
                    <h4>Punctuality</h4>
                    <p>
                        Please arrive on time(not early & not late). Do not show up with a guest. 
                        Balance is to be paid on the day.
                    </p>
                </div>
                <div class = "appointment-notice">
                    <img src="{{url('/storage/berveybookingsIcons/berveyNoticeIcon.svg')}}" alt="bervey Notice Icon">
                    <h4>Customization</h4>

                    <p>
                        Please deliver your hair(Own/Purchased from 
                        Bervey) 2 days Prior to your appointment.Should you be late, you will be charged. 
                    </p>
                    
                </div>
                
            </div>
        </div>
        
        

        <div class = "about-service-container">

            <img src="{{url('/storage/berveybookingsIcons/berveyServices.svg')}}" alt="bervey-services-icon">

            <h3>Services</h3>

        </div>
    
        <div class = "services-container">
    
            <div class = "col-lg-3 col-md-6 col-sm-6 col-xs-6 service-col">

                <a href="{{url('/services/1')}}">
                    <div class = "service-container">
                        <div class = "service-details">
                            
                        </div>
                        
                        <button class = "book-btn">Book</button>
                        <img src="{{url('/storage/berveybookingsImages/GluelessLaceFrontal.jpg')}}" alt="">
                    </div>
                </a>
               
            </div>
        
            <div class = "col-lg-3 col-md-6 col-sm-6 col-xs-6 service-col">

                <a href="{{url('/services/2')}}">
                    <div class = "service-container">
                        <div class = "service-details">
                            
                        </div>

                        <button class = "book-btn">Book</button>
                        <img src="{{url('/storage/berveybookingsImages/GluedLaceFrontalCover.jpg')}}" alt="">
                    </div >
                </a>
        
            </div>
            <div class = "col-lg-3 col-md-6 col-sm-6 col-xs-6 service-col">
        
                <a href="{{url('/services/3')}}">
                    <div class = "service-container">
                        <div class = "service-details">
                            
                        </div>
                        
                        <button class = "book-btn">Book</button>
                        <img src="{{url('/storage/berveybookingsImages/Glueless360.jpg')}}" alt="">
                    </div >
                </a>
        
            </div>
        
            <div class = "col-lg-3 col-md-6 col-sm-6 col-xs-6 service-col">
        
               <a href="{{url('/services/4')}}">
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


