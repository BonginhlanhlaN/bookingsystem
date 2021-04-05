/**
 * Variable Declarations
 */

let socialsIconsJson = [{"SocialmediaIcon": "/storage/berveybookingsIcons/InstagramIcon.svg" , "SocailmediaHandle":"@bervey_" , "SocialmediaLink":"https://www.instagram.com/bervey_/"} , 
{"SocialmediaIcon": "/storage/berveybookingsIcons/facebookIcon.svg" , "SocailmediaHandle":"@Bervey Hair" , "SocialmediaLink":"https://web.facebook.com/bervey.hair"}];
var currentSocialImage = 0;

var currentBannerimageIndex = 0;
var nextBannerimageIndex = 1;
var totalSlideImages = 3;

//Track which month is on screen
var trackViewedMonth = 2;

//Track which month and day-of-month
var previouslyClickedMonth = null;
var previouslyClickedMonthDay = null;

//Track which appointment-time was previously clicked
var trackPreviousAppointmentTime = null;//Initially no time clicked

/**
* Method Calls
*/
autoSlideImg();
autoslideSocials();
rightSlidelookoutNotice();
leftSlidelookoutNotice();
rightSlideBookingNotice();
leftSlideBookingNotice();
nextMonth();
monthDayListners();
//listenForBookableTimes();
customizationPeriodListener();
closecustomizationPeriodDialog();


function autoslideSocials(){
    
    const socialImage = document.getElementById("social-image");

    if(socialImage){//Check if socialImage is not null.

        setInterval(() => {

            const socialImage = document.getElementById("social-image");
            socialImage.src = socialsIconsJson[currentSocialImage].SocialmediaIcon;
    
            const socialLink = document.getElementById("socialmedia-link");
            socialLink.href = socialsIconsJson[currentSocialImage].SocialmediaLink;
    
            const socialHandle = document.getElementById("social-handle");
            socialHandle.innerHTML =socialsIconsJson[currentSocialImage].SocailmediaHandle;
            
    
            if(currentSocialImage == (socialsIconsJson.length - 1)){
                currentSocialImage = 0;
            }else{
                currentSocialImage += 1;
            }
            
         }, 7000);

    }
 
}

function autoSlideImg(){

    const currentBannerimg = document.body.querySelector('.slide-image[data-imageindex="'+currentBannerimageIndex+'"]');

    if(currentBannerimg){

        setInterval(() => {

            const currentBannerimg = document.body.querySelector('.slide-image[data-imageindex="'+currentBannerimageIndex+'"]');
            const nextBannerImage = document.body.querySelector('.slide-image[data-imageindex="'+nextBannerimageIndex+'"]');
            currentBannerimg.className = "slide-image";
            nextBannerImage.className = "slide-image visible-image";
    
            
            var currentImageIndicator = document.body.querySelector('.img-indicator[data-indicatornum="'+nextBannerimageIndex+'"]');
            var previuosImageIndicator = document.body.querySelector('.img-indicator[data-indicatornum="'+currentBannerimageIndex+'"]');
            currentImageIndicator.style.background = 'lightpink';
            previuosImageIndicator.style.background = 'white';
    
            if(currentBannerimageIndex == totalSlideImages){
                currentBannerimageIndex = 0;
            }else{
                currentBannerimageIndex++;
            }
    
            if(nextBannerimageIndex == totalSlideImages){
                nextBannerimageIndex = 0;
            }else{
                nextBannerimageIndex++;
            }
    
        }, 4000); 

    }
    
}

function rightSlidelookoutNotice(){
    
    const rightArrow = document.getElementById("scroll-right-notice-arrow");
    if(rightArrow){

        const noticeContainer = document.getElementById("lookout-notice-container");
        rightArrow.addEventListener("click" , function(){
            //alert("Hau");
            noticeContainer.scrollLeft += 100;
        });

    }
   
    
}

function leftSlidelookoutNotice(){
   
    const leftArrow = document.getElementById("scroll-left-notice-arrow");

    if(leftArrow){

        const noticeContainer = document.getElementById("lookout-notice-container");
        leftArrow.addEventListener("click" , function(){
            noticeContainer.scrollLeft -= 100;
        });

    }
 
}

function rightSlideBookingNotice(){

    const rightArrow = document.getElementById("scroll-right-booking-notice-arrow");

    if(rightArrow){
        const noticeContainer = document.getElementById("booking-notice-container");
        rightArrow.addEventListener("click" , function(){
            //alert("Hau");
            noticeContainer.scrollLeft += 100;
        });
    }

}

function leftSlideBookingNotice(){

    const leftArrow = document.getElementById("scroll-left-booking-notice-arrow");

    if(leftArrow){
        const noticeContainer = document.getElementById("booking-notice-container");
        leftArrow.addEventListener("click" , function(){
            //alert("Hau");
            noticeContainer.scrollLeft -= 100;
        });

    }

}

function slideLeft(){



}

function nextMonth(){
    
   const nextMonthImg = document.getElementById("next-month-btn");
   
   if(nextMonthImg){

        nextMonthImg.addEventListener("click" , function(){
            if(trackViewedMonth == 1){

                document.getElementById("month-one").style.display = "block";
                document.getElementById("month-two").style.display = "none";
                document.getElementById("month-three").style.display = "none";
     
                trackViewedMonth++;
     
            }else if(trackViewedMonth == 2){
     
                document.getElementById("month-one").style.display = "none";
                document.getElementById("month-two").style.display = "block";
                document.getElementById("month-three").style.display = "none";
     
                trackViewedMonth++;
     
            }else{
     
                document.getElementById("month-one").style.display = "none";
                document.getElementById("month-two").style.display = "none";
                document.getElementById("month-three").style.display = "block";
     
                trackViewedMonth = 1;
            }
        });

   }
   
}

function monthDayListners(){

   const monthDays = document.getElementsByClassName("month-day");

   for (let index = 0; index < monthDays.length; index++) {

       monthDays[index].addEventListener("click" , function(){

           //All from html
           let year = this.getAttribute("data-year");
           let month = this.getAttribute("data-month");
           let day = this.getAttribute("data-day");

           
           let dayClicked = year + '-' + month + '-' + day;
           let dateObj = new Date();
           let monthNum = dateObj.getMonth()+1;
           if(monthNum < 10){
               monthNum = "0"+monthNum;
           }
           let today = dateObj.getFullYear() + '-' + monthNum + '-' + dateObj.getDate();

           let currentHour = dateObj.getHours();
          
           if(currentHour < 10){
               currentHour = "0"+currentHour;
           }
           let currentTime = currentHour + ':' + dateObj.getMinutes();

           let ajaxDay = day;
           if(day < 10){
               ajaxDay = "0"+ajaxDay;//for my sql date format (2020-05-03)
           }
           
           $.ajaxSetup({

               headers:{
                   'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
               }

           });

           $.ajax({

               url:'/bookingsession/bookingsinday',
               method:'GET',
               data:{

                   bookedday:year + '-' + month + '-' + ajaxDay

               },
               success: function(result){
                   

                    //console.log("Dayclicked "+dayClicked);
                    //console.log("today "+today);
                    //console.log("currntTime "+currentTime);
                    if(!Array.isArray(result)){

                        let bookedDaySchedule = '<div class = "already-booked"><h3>You have already booked an appointment in this day.</h3></div>';
                       
                        document.getElementById("booking-time-animation").style.display = "block";
                        document.getElementById("booking-times").innerHTML = bookedDaySchedule;
                        document.getElementById("booking-times").style.display = "block";
						
						if(previouslyClickedMonth != null && previouslyClickedMonthDay != null){//Then we know sumting was prev clicked
                            var previuoslyClickedDate = document.body.querySelector('.month-day[data-month="'+previouslyClickedMonth+'"][data-day="'+previouslyClickedMonthDay+'"]');
                            previuoslyClickedDate.style.background = 'white';
                        }

                        var currentlyClickedDate = document.body.querySelector('.month-day[data-month="'+month+'"][data-day="'+day+'"]');
                        currentlyClickedDate.style.backgroundImage = "linear-gradient(to bottom right,rgba(255 , 192 , 203 , 1) , rgba(255 , 255 , 255 , 1))";
                        previouslyClickedMonth = month;
                        previouslyClickedMonthDay = day;
            
                        //Disable the schedule button coz time not yet selected
                        const scheduleBtn = document.getElementById("schedule-btn");
                        scheduleBtn.style.background = "gray";
                        scheduleBtn.disabled = true;

                    }else{

                        let bookedDaySchedule = '<table class ="booking-time-table"><tr><th>10:00</th><th>12:00</th><th>14:00</th><th>16:00</th></tr>';
                        bookedDaySchedule += '<tr>';
                        if(_isContains(result , "10:00:00")){
                            bookedDaySchedule += '<td class = "booked appointment-time" data-scheduletime = "10:00">Booked</td>';
                        }else{

                            if(dayClicked == today && currentTime > "10:00"){
                                bookedDaySchedule += '<td class = "time-past appointment-time" data-scheduletime = "10:00">Time Past</td>';
                            }else{
                                bookedDaySchedule += '<td class = "not-booked appointment-time" data-scheduletime = "10:00">Not Booked</td>';
                            }
                            
                        }

                        if(_isContains(result , "12:00:00")){
                            bookedDaySchedule += '<td class = "booked appointment-time" data-scheduletime = "12:00">Booked</td>';
                        }else{

                            if(dayClicked == today && currentTime > "12:00"){
                                bookedDaySchedule += '<td class = "time-past appointment-time" data-scheduletime = "12:00">Time Past</td>';
                            }else{
                                bookedDaySchedule += '<td class = "not-booked appointment-time" data-scheduletime = "12:00">Not Booked</td>';
                            }

                        }

                        if(_isContains(result , "14:00:00")){
                            bookedDaySchedule += '<td class = "booked appointment-time" data-scheduletime = "14:00">Booked</td>';
                        }else{

                            if(dayClicked == today && currentTime > "14:00"){
                                bookedDaySchedule += '<td class = "time-past appointment-time" data-scheduletime = "14:00">Time Past</td>';
                            }else{
                                bookedDaySchedule += '<td class = "not-booked appointment-time" data-scheduletime = "14:00">Not Booked</td>';
                            }
        
                        }

                        if(_isContains(result , "16:00:00")){
                            bookedDaySchedule += '<td class = "booked appointment-time" data-scheduletime = "16:00">Booked</td>';
                        }else{
                            
                            if(dayClicked == today && currentTime > "16:00"){
                                bookedDaySchedule += '<td class = "time-past appointment-time" data-scheduletime = "14:00">Time Past</td>';
                            }else{
                                bookedDaySchedule += '<td class = "not-booked appointment-time" data-scheduletime = "16:00">Not Booked</td>';
                            }
                            
                        }
                        bookedDaySchedule += '</tr></table>';
                        
                        document.getElementById("booking-time-animation").style.display = "block";
                        document.getElementById("booking-times").innerHTML = bookedDaySchedule;
                        document.getElementById("booking-times").style.display = "block";
                        listenForBookableTimes();
                        
                        if(previouslyClickedMonth != null && previouslyClickedMonthDay != null){//Then we know sumting was prev clicked
                            var previuoslyClickedDate = document.body.querySelector('.month-day[data-month="'+previouslyClickedMonth+'"][data-day="'+previouslyClickedMonthDay+'"]');
                            previuoslyClickedDate.style.background = 'white';
                        }

                        var currentlyClickedDate = document.body.querySelector('.month-day[data-month="'+month+'"][data-day="'+day+'"]');
                        currentlyClickedDate.style.backgroundImage = "linear-gradient(to bottom right,rgba(255 , 192 , 203 , 1) , rgba(255 , 255 , 255 , 1))";
                        previouslyClickedMonth = month;
                        previouslyClickedMonthDay = day;
            
                        //Disable the schedule button coz time not yet selected
                        const scheduleBtn = document.getElementById("schedule-btn");
                        scheduleBtn.style.background = "gray";
                        scheduleBtn.disabled = true;

                    }
                    

               },
               error:function(response){
                   //$("#postCommentButton").prop('disabled', false);
                   console.log('Something went wrong.');
               }
               
           });

       });
       
   }
   
}

function _isContains(json, value) {
   let contains = false;
   Object.keys(json).some(key => {
       contains = typeof json[key] === 'object' ? _isContains(json[key], value) : json[key] === value;
        return contains;
   });
   return contains;
}

function listenForBookableTimes(){

   const bookableTimes = document.getElementsByClassName("not-booked");

   for (let index = 0; index < bookableTimes.length; index++) {

       bookableTimes[index].addEventListener("click" , function(){

           let scheduledTime = this.getAttribute("data-scheduletime");//Currently clicked time Value
           
           $.ajaxSetup({

               headers:{
                   'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
               }

           });

           $.ajax({

               url:'/bookingsession/getTimeSession',
               method:'GET',
               data:{

                   bookedtime:scheduledTime

               },
               success: function(result){

                   if(trackPreviousAppointmentTime != null){//Then we know sumting was prev clicked
                       var previouslyClickedTime = document.body.querySelector('.appointment-time[data-scheduletime="'+trackPreviousAppointmentTime+'"]');
                       previouslyClickedTime.style.background = 'lightgray';
                   }
       
                   var currentlyClickedTime = document.body.querySelector('.appointment-time[data-scheduletime="'+scheduledTime+'"]');
                   currentlyClickedTime.style.backgroundImage = "linear-gradient(to bottom right,rgba(255 , 192 , 203 , 1) , rgba(255 , 255 , 255 , 1))";
                   trackPreviousAppointmentTime = scheduledTime;
       
                   //Enable the schedule button coz time not yet selected
                   const scheduleBtn = document.getElementById("schedule-btn");
                   scheduleBtn.style.backgroundImage = "linear-gradient(to bottom right,rgba(255 , 192 , 203 , 1) , rgba(249 , 246 , 190 , 1))";
                   scheduleBtn.disabled = false;
                   
               },
               error:function(response){
                   //$("#postCommentButton").prop('disabled', false);
                   console.log('Something went wrong.');
               }
               
           });
           
           
       });

   }    
}

function customizationPeriodListener(){

    const customizationPeriodElements = document.getElementsByClassName('customization-period');

    for(let index = 0; index < customizationPeriodElements.length; index++){

        customizationPeriodElements[index].addEventListener("click" , function(){

            const dialogContainer = document.getElementById('customization-period-dailog-container');
            dialogContainer.style.display = "block";

        });

    }

}

function closecustomizationPeriodDialog(){
    const customizationPeriodDialogbtn = document.getElementById('customization-period-dailog-btn');
    if(customizationPeriodDialogbtn){
        customizationPeriodDialogbtn.addEventListener("click" , function(){
            const dialogContainer = document.getElementById('customization-period-dailog-container');
            dialogContainer.style.display = "none";
        });
    }
}