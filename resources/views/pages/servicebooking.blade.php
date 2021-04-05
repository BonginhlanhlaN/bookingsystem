@extends('layouts.app')
@php

    $viewableMonths = $calenderHalper->determineViewableMonths();
    $totalDays = 1;

@endphp

@section('content')
    <div id = "customization-period-dailog-container" class = "customization-period-dialog-container">

        <div id = "customization-period-dailog" class = "customization-period-dialog">
            <img src="/storage/berveybookingsIcons/infoIcon.svg" alt="bervey-infoIcon">
            <p>The current day and the day that follows are considered to be the customization period. As a result,
                booking within these two days is not permitted using this platform.
            </p>
            <p>However, should you want to book either of these days please contact Bervey directly. Extra charges maybe incurred for same day bookings.</p>
            <button id = "customization-period-dailog-btn">Okay</button>
        </div>
       
    </div>
    <img src="{{url('/storage/berveybookingsIcons/berveyNextMonth.svg')}}" alt="next-month" id = "next-month-btn">
    
    <div class = "booking-month-container" id = "month-one">
        
        <div class = "month-details">
            <img src="{{url('/storage/berveybookingsIcons/mujiAppointments.svg')}}" alt="muji-Appointments" id = "muji-Appointments">
            
            <p>{{$viewableMonths[0]->getYear()}}</p>
            <p class = "month-name">{{$viewableMonths[0]->getMonthName()}}</p>
           
        </div>
    
        <table class = "calendar-table">
    
            <tr>
                <th>Sun</th>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>
            </tr>
           
            @for ($i = 0; $i < 6; $i++)
                
                @if ($i == 0)
    
                    <tr>

                        @if ($viewableMonths[0]->getStartDay() == 0)
    
                            <td class = "{{($calenderHalper->getTodaysDay() - 1 == 0 || $calenderHalper->getTodaysDay() - 1 == 1) ? 'customization-period' : (($calenderHalper->getTodaysDay() > 1) ? '' : 'month-day')}}" data-year = "{{$viewableMonths[0]->getYear()}}" data-month = "{{$viewableMonths[0]->getMonthNumber()}}" data-day = "1">1</td>
                            <td class = "{{($calenderHalper->getTodaysDay() - 2 == 0 || $calenderHalper->getTodaysDay() - 2 == 1) ? 'customization-period' : (($calenderHalper->getTodaysDay() > 2) ? '' : 'month-day')}}" data-year = "{{$viewableMonths[0]->getYear()}}" data-month = "{{$viewableMonths[0]->getMonthNumber()}}" data-day = "2">2</td>
                            <td class = "{{($calenderHalper->getTodaysDay() - 3 == 0 || $calenderHalper->getTodaysDay() - 3 == 1) ? 'customization-period' : (($calenderHalper->getTodaysDay() > 3) ? '' : 'month-day')}}" data-year = "{{$viewableMonths[0]->getYear()}}" data-month = "{{$viewableMonths[0]->getMonthNumber()}}" data-day = "3">3</td>
                            <td class = "{{($calenderHalper->getTodaysDay() - 4 == 0 || $calenderHalper->getTodaysDay() - 4 == 1) ? 'customization-period' : (($calenderHalper->getTodaysDay() > 4) ? '' : 'month-day')}}" data-year = "{{$viewableMonths[0]->getYear()}}" data-month = "{{$viewableMonths[0]->getMonthNumber()}}" data-day = "4">4</td>
                            <td class = "{{($calenderHalper->getTodaysDay() - 5 == 0 || $calenderHalper->getTodaysDay() - 5 == 1) ? 'customization-period' : (($calenderHalper->getTodaysDay() > 5) ? '' : 'month-day')}}" data-year = "{{$viewableMonths[0]->getYear()}}" data-month = "{{$viewableMonths[0]->getMonthNumber()}}" data-day = "5">5</td>
                            <td class = "{{($calenderHalper->getTodaysDay() - 6 == 0 || $calenderHalper->getTodaysDay() - 6 == 1) ? 'customization-period' : (($calenderHalper->getTodaysDay() > 6) ? '' : 'month-day')}}" data-year = "{{$viewableMonths[0]->getYear()}}" data-month = "{{$viewableMonths[0]->getMonthNumber()}}" data-day = "6">6</td>
                            <td class = "{{($calenderHalper->getTodaysDay() - 7 == 0 || $calenderHalper->getTodaysDay() - 7 == 1) ? 'customization-period' : (($calenderHalper->getTodaysDay() > 7) ? '' : 'month-day')}}" data-year = "{{$viewableMonths[0]->getYear()}}" data-month = "{{$viewableMonths[0]->getMonthNumber()}}" data-day = "7">7</td>
    
                            @php
                                $totalDays = 8;
                            @endphp
                            
                        @elseif($viewableMonths[0]->getStartDay() == 1)
    
                            <td colspan="1"></td>
                            <td class = "{{($calenderHalper->getTodaysDay() - 1 == 0 || $calenderHalper->getTodaysDay() - 1 == 1) ? 'customization-period' : (($calenderHalper->getTodaysDay() > 1) ? '' : 'month-day')}}" data-year = "{{$viewableMonths[0]->getYear()}}" data-month = "{{$viewableMonths[0]->getMonthNumber()}}" data-day = "1">1</td>
                            <td class = "{{($calenderHalper->getTodaysDay() - 2 == 0 || $calenderHalper->getTodaysDay() - 2 == 1) ? 'customization-period' : (($calenderHalper->getTodaysDay() > 2) ? '' : 'month-day')}}" data-year = "{{$viewableMonths[0]->getYear()}}" data-month = "{{$viewableMonths[0]->getMonthNumber()}}" data-day = "2">2</td>
                            <td class = "{{($calenderHalper->getTodaysDay() - 3 == 0 || $calenderHalper->getTodaysDay() - 3 == 1) ? 'customization-period' : (($calenderHalper->getTodaysDay() > 3) ? '' : 'month-day')}}" data-year = "{{$viewableMonths[0]->getYear()}}" data-month = "{{$viewableMonths[0]->getMonthNumber()}}" data-day = "3">3</td>
                            <td class = "{{($calenderHalper->getTodaysDay() - 4 == 0 || $calenderHalper->getTodaysDay() - 4 == 1) ? 'customization-period' : (($calenderHalper->getTodaysDay() > 4) ? '' : 'month-day')}}" data-year = "{{$viewableMonths[0]->getYear()}}" data-month = "{{$viewableMonths[0]->getMonthNumber()}}" data-day = "4">4</td>
                            <td class = "{{($calenderHalper->getTodaysDay() - 5 == 0 || $calenderHalper->getTodaysDay() - 5 == 1) ? 'customization-period' : (($calenderHalper->getTodaysDay() > 5) ? '' : 'month-day')}}" data-year = "{{$viewableMonths[0]->getYear()}}" data-month = "{{$viewableMonths[0]->getMonthNumber()}}" data-day = "5">5</td>
                            <td class = "{{($calenderHalper->getTodaysDay() - 6 == 0 || $calenderHalper->getTodaysDay() - 6 == 1) ? 'customization-period' : (($calenderHalper->getTodaysDay() > 6) ? '' : 'month-day')}}" data-year = "{{$viewableMonths[0]->getYear()}}" data-month = "{{$viewableMonths[0]->getMonthNumber()}}" data-day = "6">6</td>
    
                            @php
                                $totalDays = 7;
                            @endphp
    
                        @elseif($viewableMonths[0]->getStartDay() == 2)
    
                            <td colspan="2"></td>
                            <td class = "{{($calenderHalper->getTodaysDay() - 1 == 0 || $calenderHalper->getTodaysDay() - 1 == 1) ? 'customization-period' : (($calenderHalper->getTodaysDay() > 1) ? '' : 'month-day')}}" data-year = "{{$viewableMonths[0]->getYear()}}" data-month = "{{$viewableMonths[0]->getMonthNumber()}}" data-day = "1">1</td>
                            <td class = "{{($calenderHalper->getTodaysDay() - 2 == 0 || $calenderHalper->getTodaysDay() - 2 == 1) ? 'customization-period' : (($calenderHalper->getTodaysDay() > 2) ? '' : 'month-day')}}" data-year = "{{$viewableMonths[0]->getYear()}}" data-month = "{{$viewableMonths[0]->getMonthNumber()}}" data-day = "2">2</td>
                            <td class = "{{($calenderHalper->getTodaysDay() - 3 == 0 || $calenderHalper->getTodaysDay() - 3 == 1) ? 'customization-period' : (($calenderHalper->getTodaysDay() > 3) ? '' : 'month-day')}}" data-year = "{{$viewableMonths[0]->getYear()}}" data-month = "{{$viewableMonths[0]->getMonthNumber()}}" data-day = "3">3</td>
                            <td class = "{{($calenderHalper->getTodaysDay() - 4 == 0 || $calenderHalper->getTodaysDay() - 4 == 1) ? 'customization-period' : (($calenderHalper->getTodaysDay() > 4) ? '' : 'month-day')}}" data-year = "{{$viewableMonths[0]->getYear()}}" data-month = "{{$viewableMonths[0]->getMonthNumber()}}" data-day = "4">4</td>
                            <td class = "{{($calenderHalper->getTodaysDay() - 5 == 0 || $calenderHalper->getTodaysDay() - 5 == 1) ? 'customization-period' : (($calenderHalper->getTodaysDay() > 5) ? '' : 'month-day')}}" data-year = "{{$viewableMonths[0]->getYear()}}" data-month = "{{$viewableMonths[0]->getMonthNumber()}}" data-day = "5">5</td>
    
                            @php
                                $totalDays = 6;
                            @endphp
    
                        @elseif($viewableMonths[0]->getStartDay() == 3)
    
                            <td colspan="3"></td>
                            <td class = "{{($calenderHalper->getTodaysDay() - 1 == 0 || $calenderHalper->getTodaysDay() - 1 == 1) ? 'customization-period' : (($calenderHalper->getTodaysDay() > 1) ? '' : 'month-day')}}" data-year = "{{$viewableMonths[0]->getYear()}}" data-month = "{{$viewableMonths[0]->getMonthNumber()}}" data-day = "1">1</td>
                            <td class = "{{($calenderHalper->getTodaysDay() - 2 == 0 || $calenderHalper->getTodaysDay() - 2 == 1) ? 'customization-period' : (($calenderHalper->getTodaysDay() > 2) ? '' : 'month-day')}}" data-year = "{{$viewableMonths[0]->getYear()}}" data-month = "{{$viewableMonths[0]->getMonthNumber()}}" data-day = "2">2</td>
                            <td class = "{{($calenderHalper->getTodaysDay() - 3 == 0 || $calenderHalper->getTodaysDay() - 3 == 1) ? 'customization-period' : (($calenderHalper->getTodaysDay() > 3) ? '' : 'month-day')}}" data-year = "{{$viewableMonths[0]->getYear()}}" data-month = "{{$viewableMonths[0]->getMonthNumber()}}" data-day = "3">3</td>
                            <td class = "{{($calenderHalper->getTodaysDay() - 4 == 0 || $calenderHalper->getTodaysDay() - 4 == 1) ? 'customization-period' : (($calenderHalper->getTodaysDay() > 4) ? '' : 'month-day')}}" data-year = "{{$viewableMonths[0]->getYear()}}" data-month = "{{$viewableMonths[0]->getMonthNumber()}}" data-day = "4">4</td>
    
                            @php
                                $totalDays = 5;
                            @endphp
    
                        @elseif($viewableMonths[0]->getStartDay() == 4)
    
                            <td colspan="4"></td>
                            <td class = "{{($calenderHalper->getTodaysDay() - 1 == 0 || $calenderHalper->getTodaysDay() - 1 == 1) ? 'customization-period' : (($calenderHalper->getTodaysDay() > 1) ? '' : 'month-day')}}" data-year = "{{$viewableMonths[0]->getYear()}}" data-month = "{{$viewableMonths[0]->getMonthNumber()}}" data-day = "1">1</td>
                            <td class = "{{($calenderHalper->getTodaysDay() - 2 == 0 || $calenderHalper->getTodaysDay() - 2 == 1) ? 'customization-period' : (($calenderHalper->getTodaysDay() > 2) ? '' : 'month-day')}}" data-year = "{{$viewableMonths[0]->getYear()}}" data-month = "{{$viewableMonths[0]->getMonthNumber()}}" data-day = "2">2</td>
                            <td class = "{{($calenderHalper->getTodaysDay() - 3 == 0 || $calenderHalper->getTodaysDay() - 3 == 1) ? 'customization-period' : (($calenderHalper->getTodaysDay() > 3) ? '' : 'month-day')}}" data-year = "{{$viewableMonths[0]->getYear()}}" data-month = "{{$viewableMonths[0]->getMonthNumber()}}" data-day = "3">3</td>
    
                            @php
                                $totalDays = 4;
                            @endphp
    
                        @elseif($viewableMonths[0]->getStartDay() == 5)
    
                            <td colspan="5"></td>
                            <td class = "{{($calenderHalper->getTodaysDay() - 1 == 0 || $calenderHalper->getTodaysDay() - 1 == 1) ? 'customization-period' : (($calenderHalper->getTodaysDay() > 1) ? '' : 'month-day')}}" data-year = "{{$viewableMonths[0]->getYear()}}" data-month = "{{$viewableMonths[0]->getMonthNumber()}}" data-day = "1">1</td>
                            <td class = "{{($calenderHalper->getTodaysDay() - 2 == 0 || $calenderHalper->getTodaysDay() - 2 == 1) ? 'customization-period' : (($calenderHalper->getTodaysDay() > 2) ? '' : 'month-day')}}" data-year = "{{$viewableMonths[0]->getYear()}}" data-month = "{{$viewableMonths[0]->getMonthNumber()}}" data-day = "2">2</td>
    
                            @php
                                $totalDays = 3;
                            @endphp
    
                        @elseif($viewableMonths[0]->getStartDay() == 6) 
    
                            <td colspan="6"></td>
                            <td class = "{{($calenderHalper->getTodaysDay() - 1 == 0 || $calenderHalper->getTodaysDay() - 1 == 1) ? 'customization-period' : (($calenderHalper->getTodaysDay() > 1) ? '' : 'month-day')}}" data-year = "{{$viewableMonths[0]->getYear()}}" data-month = "{{$viewableMonths[0]->getMonthNumber()}}" data-day = "1">1</td>
                            
                            @php
                                $totalDays = 2;
                            @endphp
                        
                        @endif
                    </tr>
    
                @else
                
                    <tr>
    
                        @for ($j = 0; $j < 7; $j++)
                            
                            @if ($totalDays == $viewableMonths[0]->getLastDay())
                                <td class = "{{($totalDays - $calenderHalper->getTodaysDay() == 0 || $totalDays - $calenderHalper->getTodaysDay() == 1) ? 'customization-period' : (($calenderHalper->getTodaysDay() > $totalDays) ? '' : 'month-day')}}" data-year = "{{$viewableMonths[0]->getYear()}}" data-month = "{{$viewableMonths[0]->getMonthNumber()}}" data-day = "{{$totalDays}}">{{$totalDays}}</td>
                                @break
                            @else
                                <td class = "{{($totalDays - $calenderHalper->getTodaysDay() == 0 || $totalDays - $calenderHalper->getTodaysDay() == 1) ? 'customization-period' : (($calenderHalper->getTodaysDay() > $totalDays) ? '' : 'month-day')}}" data-year = "{{$viewableMonths[0]->getYear()}}" data-month = "{{$viewableMonths[0]->getMonthNumber()}}" data-day = "{{$totalDays}}">{{$totalDays}}</td>
                                @php
                                    $totalDays += 1;
                                @endphp
                            @endif
    
                        @endfor
    
                    </tr>    
                   
                @endif
                @if ($totalDays == $viewableMonths[0]->getLastDay())
                    @break
                @endif
            @endfor
           
        </table>
        @php
            $totalDays = 1;
        @endphp

    </div>
    

    <div class="booking-month-container booking-month-dissapear" id = "month-two">

        <div class = "month-details">

            <img src="{{url('/storage/berveybookingsIcons/mujiAppointments.svg')}}" alt="muji-Appointments" id = "muji-Appointments">
            
            <p>{{$viewableMonths[1]->getYear()}}</p>
            <p class = "month-name">{{$viewableMonths[1]->getMonthName()}}</p>
        
        </div>
    
        <table class = "calendar-table">
            <tr>
                <th>Sun</th>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>
            </tr>
           
    
            @for ($i = 0; $i < 6 ; $i++)
                
                @if ($i == 0)
    
                    <tr>
                        @if ($viewableMonths[1]->getStartDay() == 0)
    
                            <td class = "month-day" data-year = "{{$viewableMonths[1]->getYear()}}" data-month = "{{$viewableMonths[1]->getMonthNumber()}}" data-day = "1">1</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[1]->getYear()}}" data-month = "{{$viewableMonths[1]->getMonthNumber()}}" data-day = "2">2</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[1]->getYear()}}" data-month = "{{$viewableMonths[1]->getMonthNumber()}}" data-day = "3">3</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[1]->getYear()}}" data-month = "{{$viewableMonths[1]->getMonthNumber()}}" data-day = "4">4</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[1]->getYear()}}" data-month = "{{$viewableMonths[1]->getMonthNumber()}}" data-day = "5">5</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[1]->getYear()}}" data-month = "{{$viewableMonths[1]->getMonthNumber()}}" data-day = "6">6</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[1]->getYear()}}" data-month = "{{$viewableMonths[1]->getMonthNumber()}}" data-day = "7">7</td>
        
                            @php
                                $totalDays = 8;
                            @endphp
                            
                        @elseif($viewableMonths[1]->getStartDay() == 1)
    
                            <td colspan="1"></td>
                            <td class = "month-day" data-year = "{{$viewableMonths[1]->getYear()}}" data-month = "{{$viewableMonths[1]->getMonthNumber()}}" data-day = "1">1</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[1]->getYear()}}" data-month = "{{$viewableMonths[1]->getMonthNumber()}}" data-day = "2">2</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[1]->getYear()}}" data-month = "{{$viewableMonths[1]->getMonthNumber()}}" data-day = "3">3</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[1]->getYear()}}" data-month = "{{$viewableMonths[1]->getMonthNumber()}}" data-day = "4">4</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[1]->getYear()}}" data-month = "{{$viewableMonths[1]->getMonthNumber()}}" data-day = "5">5</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[1]->getYear()}}" data-month = "{{$viewableMonths[1]->getMonthNumber()}}" data-day = "6">6</td>
    
                            @php
                                $totalDays = 7;
                            @endphp
    
    
                        @elseif($viewableMonths[1]->getStartDay() == 2)
    
                            <td colspan="2"></td>
                            <td class = "month-day" data-year = "{{$viewableMonths[1]->getYear()}}" data-month = "{{$viewableMonths[1]->getMonthNumber()}}" data-day = "1">1</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[1]->getYear()}}" data-month = "{{$viewableMonths[1]->getMonthNumber()}}" data-day = "2">2</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[1]->getYear()}}" data-month = "{{$viewableMonths[1]->getMonthNumber()}}" data-day = "3">3</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[1]->getYear()}}" data-month = "{{$viewableMonths[1]->getMonthNumber()}}" data-day = "4">4</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[1]->getYear()}}" data-month = "{{$viewableMonths[1]->getMonthNumber()}}" data-day = "5">5</td>
    
                            @php
                                $totalDays = 6;
                            @endphp
    
                        @elseif($viewableMonths[1]->getStartDay() == 3)
    
                            <td colspan="3"></td>
                            <td class = "month-day" data-year = "{{$viewableMonths[1]->getYear()}}" data-month = "{{$viewableMonths[1]->getMonthNumber()}}" data-day = "1">1</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[1]->getYear()}}" data-month = "{{$viewableMonths[1]->getMonthNumber()}}" data-day = "2">2</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[1]->getYear()}}" data-month = "{{$viewableMonths[1]->getMonthNumber()}}" data-day = "3">3</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[1]->getYear()}}" data-month = "{{$viewableMonths[1]->getMonthNumber()}}" data-day = "4">4</td>
    
                            @php
                                $totalDays = 5;
                            @endphp
    
                        @elseif($viewableMonths[1]->getStartDay() == 4)
    
                            <td colspan="4"></td>
                            <td class = "month-day" data-year = "{{$viewableMonths[1]->getYear()}}" data-month = "{{$viewableMonths[1]->getMonthNumber()}}" data-day = "1">1</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[1]->getYear()}}" data-month = "{{$viewableMonths[1]->getMonthNumber()}}" data-day = "2">2</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[1]->getYear()}}" data-month = "{{$viewableMonths[1]->getMonthNumber()}}" data-day = "3">3</td>
    
                            @php
                                $totalDays = 4;
                            @endphp
    
                        @elseif($viewableMonths[1]->getStartDay() == 5)
    
                            <td colspan="5"></td>
                            <td class = "month-day" data-year = "{{$viewableMonths[1]->getYear()}}" data-month = "{{$viewableMonths[1]->getMonthNumber()}}" data-day = "1">1</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[1]->getYear()}}" data-month = "{{$viewableMonths[1]->getMonthNumber()}}" data-day = "2">2</td>
    
                            @php
                                $totalDays = 3;
                            @endphp
    
                        @elseif($viewableMonths[1]->getStartDay() == 6) 
    
                            <td colspan="6"></td>
                            <td class = "month-day" data-year = "{{$viewableMonths[1]->getYear()}}" data-month = "{{$viewableMonths[1]->getMonthNumber()}}" data-day = "1">1</td>
                            
                            @php
                                $totalDays = 2;
                            @endphp
                        
                        @endif
                    </tr>
    
                @else
                
                    <tr>
    
                        @for ($j = 0; $j < 7; $j++)
                            
                            @if ($totalDays == $viewableMonths[1]->getLastDay())
                                <td class = "month-day" data-year = "{{$viewableMonths[1]->getYear()}}" data-month = "{{$viewableMonths[1]->getMonthNumber()}}" data-day = "{{$totalDays}}">{{$totalDays}}</td>
                                @break
                            @else
                                <td class = "month-day" data-year = "{{$viewableMonths[1]->getYear()}}" data-month = "{{$viewableMonths[1]->getMonthNumber()}}" data-day = "{{$totalDays}}">{{$totalDays}}</td>
                                @php
                                    $totalDays += 1;
                                @endphp
                            @endif
  
                        @endfor
    
                    </tr>    
    
                @endif
                @if ($totalDays == $viewableMonths[1]->getLastDay())
                    @break
                @endif
            @endfor
           
        </table>
        @php
            $totalDays = 1;
        @endphp 
    
    </div>

    
    <div class = "booking-month-container booking-month-dissapear" id = "month-three">

        <div class = "month-details">
            
            <img src="{{url('/storage/berveybookingsIcons/mujiAppointments.svg')}}" alt="muji-Appointments" id = "muji-Appointments">
            

            <p>{{$viewableMonths[2]->getYear()}}</p>
            <p class = "month-name">{{$viewableMonths[2]->getMonthName()}}</p>
    
        </div>
    
        <table class = "calendar-table">
            <tr>
                <th>Sun</th>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>
            </tr>
           
    
            @for ($i = 0; $i < 6 ; $i++)
                
                @if ($i == 0)
    
                    <tr>
                        @if ($viewableMonths[2]->getStartDay() == 0)
    
                        <td class = "month-day" data-year = "{{$viewableMonths[2]->getYear()}}" data-month = "{{$viewableMonths[2]->getMonthNumber()}}" data-day = "1">1</td>
                        <td class = "month-day" data-year = "{{$viewableMonths[2]->getYear()}}" data-month = "{{$viewableMonths[2]->getMonthNumber()}}" data-day = "2">2</td>
                        <td class = "month-day" data-year = "{{$viewableMonths[2]->getYear()}}" data-month = "{{$viewableMonths[2]->getMonthNumber()}}" data-day = "3">3</td>
                        <td class = "month-day" data-year = "{{$viewableMonths[2]->getYear()}}" data-month = "{{$viewableMonths[2]->getMonthNumber()}}" data-day = "4">4</td>
                        <td class = "month-day" data-year = "{{$viewableMonths[2]->getYear()}}" data-month = "{{$viewableMonths[2]->getMonthNumber()}}" data-day = "5">5</td>
                        <td class = "month-day" data-year = "{{$viewableMonths[2]->getYear()}}" data-month = "{{$viewableMonths[2]->getMonthNumber()}}" data-day = "6">6</td>
                        <td class = "month-day" data-year = "{{$viewableMonths[2]->getYear()}}" data-month = "{{$viewableMonths[2]->getMonthNumber()}}" data-day = "7">7</td>
    
                            @php
                                $totalDays = 8;
                            @endphp
                            
                        @elseif($viewableMonths[2]->getStartDay() == 1)
    
                            <td colspan="1"></td>
                            <td class = "month-day" data-year = "{{$viewableMonths[2]->getYear()}}" data-month = "{{$viewableMonths[2]->getMonthNumber()}}" data-day = "1">1</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[2]->getYear()}}" data-month = "{{$viewableMonths[2]->getMonthNumber()}}" data-day = "2">2</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[2]->getYear()}}" data-month = "{{$viewableMonths[2]->getMonthNumber()}}" data-day = "3">3</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[2]->getYear()}}" data-month = "{{$viewableMonths[2]->getMonthNumber()}}" data-day = "4">4</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[2]->getYear()}}" data-month = "{{$viewableMonths[2]->getMonthNumber()}}" data-day = "5">5</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[2]->getYear()}}" data-month = "{{$viewableMonths[2]->getMonthNumber()}}" data-day = "6">6</td>
    
                            @php
                                $totalDays = 7;
                            @endphp
    
    
                        @elseif($viewableMonths[2]->getStartDay() == 2)
    
                            <td colspan="2"></td>
                            <td class = "month-day" data-year = "{{$viewableMonths[2]->getYear()}}" data-month = "{{$viewableMonths[2]->getMonthNumber()}}" data-day = "1">1</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[2]->getYear()}}" data-month = "{{$viewableMonths[2]->getMonthNumber()}}" data-day = "2">2</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[2]->getYear()}}" data-month = "{{$viewableMonths[2]->getMonthNumber()}}" data-day = "3">3</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[2]->getYear()}}" data-month = "{{$viewableMonths[2]->getMonthNumber()}}" data-day = "4">4</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[2]->getYear()}}" data-month = "{{$viewableMonths[2]->getMonthNumber()}}" data-day = "5">5</td>
    
                            @php
                                $totalDays = 6;
                            @endphp
    
                        @elseif($viewableMonths[2]->getStartDay() == 3)
    
                            <td colspan="3"></td>
                            <td class = "month-day" data-year = "{{$viewableMonths[2]->getYear()}}" data-month = "{{$viewableMonths[2]->getMonthNumber()}}" data-day = "1">1</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[2]->getYear()}}" data-month = "{{$viewableMonths[2]->getMonthNumber()}}" data-day = "2">2</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[2]->getYear()}}" data-month = "{{$viewableMonths[2]->getMonthNumber()}}" data-day = "3">3</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[2]->getYear()}}" data-month = "{{$viewableMonths[2]->getMonthNumber()}}" data-day = "4">4</td>
    
                            @php
                                $totalDays = 5;
                            @endphp
    
                        @elseif($viewableMonths[2]->getStartDay() == 4)
    
                            <td colspan="4"></td>
                            <td class = "month-day" data-year = "{{$viewableMonths[2]->getYear()}}" data-month = "{{$viewableMonths[2]->getMonthNumber()}}" data-day = "1">1</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[2]->getYear()}}" data-month = "{{$viewableMonths[2]->getMonthNumber()}}" data-day = "2">2</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[2]->getYear()}}" data-month = "{{$viewableMonths[2]->getMonthNumber()}}" data-day = "3">3</td>
    
                            @php
                                $totalDays = 4;
                            @endphp
    
                        @elseif($viewableMonths[2]->getStartDay() == 5)
    
                            <td colspan="5"></td>
                            <td class = "month-day" data-year = "{{$viewableMonths[2]->getYear()}}" data-month = "{{$viewableMonths[2]->getMonthNumber()}}" data-day = "1">1</td>
                            <td class = "month-day" data-year = "{{$viewableMonths[2]->getYear()}}" data-month = "{{$viewableMonths[2]->getMonthNumber()}}" data-day = "2">2</td>
    
                            @php
                                $totalDays = 3;
                            @endphp
    
                        @elseif($viewableMonths[2]->getStartDay() == 6) 
    
                            <td colspan="6"></td>
                            <td class = "month-day" data-year = "{{$viewableMonths[2]->getYear()}}" data-month = "{{$viewableMonths[2]->getMonthNumber()}}" data-day = "1">1</td>
                            
                            @php
                                $totalDays = 2;
                            @endphp
                        
                        @endif
                    </tr>
    
                @else
                
                    <tr>
    
                        @for ($j = 0; $j < 7; $j++)

                            @if ($totalDays == $viewableMonths[2]->getLastDay())
                                <td class = "month-day" data-year = "{{$viewableMonths[2]->getYear()}}" data-month = "{{$viewableMonths[2]->getMonthNumber()}}" data-day = "{{$totalDays}}">{{$totalDays}}</td>
                                @break
                            @else
                                <td class = "month-day" data-year = "{{$viewableMonths[2]->getYear()}}" data-month = "{{$viewableMonths[2]->getMonthNumber()}}" data-day = "{{$totalDays}}">{{$totalDays}}</td>
                                @php
                                    $totalDays += 1;
                                @endphp
                            @endif
    
                        @endfor
    
                    </tr>    
    
                @endif
                @if ($totalDays == $viewableMonths[2]->getLastDay())
                    @break
                @endif
            @endfor
               
        </table>

    </div>

    <hr>

    <div class = "booking-time-animation" id = "booking-time-animation">
        <img src="{{url('/storage/berveybookingsIcons/berveyTimeSchedule.svg')}}" alt="bervey-time">

        <p>Let's see how this day looks.</p>

    </div>

    <div class = "booking-time-container" id = "booking-times">   
    </div>

    <div class = "service-details-container">
         <div class = "service-details">

            <section>
                <div class = "service-image-container">
                    <img src="{{url('/storage/berveybookingsImages/'.$service->image_url)}}" alt="service-image" class = "service-img">
                </div>
                <div class = "service-name-starate-conatiner">
                    <div class = "star-service-img-container">
                        <img src="{{url('/storage/berveybookingsIcons/berveyStarService.svg')}}" alt="star-service" class = "star-service-icon">
                   </div>
                   <p>{{$service->name}}</p>
                </div>
            </section>

            @if ($service->availability == 'Available')
                <h4 class = "service-available">{{$service->availability}}</h4> 
            @else
                <h4 class = "service-unavailable">{{$service->availability}}</h4> 
            @endif
            
            
            <h3>Service Description</h3>
            <p>{{$service->description}}</p>

            

            @if (Session::get('appointment')->getPrice() == 0.00)
                <nav class = "appointment-price"><p>R0.00</p></nav>
                <p>Given that this is you first booking. The appointment will be absolutely free.</p>
            @else
                <nav class = "appointment-price"> <p>R{{$service->price}}</p></nav>
                <p>Don't worry, this amount will be paid after the apointment. Cash.</p>
            @endif
            

        </div>
    </div>
   

    <form action="{{url('/bookings')}}" method = "POST" enctype = "multipart/form-data" class = "appoint-appointment-form">
        {{csrf_field()}}
        
        <input type="submit" value="Schedule" id = "schedule-btn" disabled>
    </form>

    <div class = "bottom-appointment-icon-container">
        <img src="{{url('/storage/berveybookingsIcons/bottomAppointIcon.svg')}}" alt="" class = "bottom-appointment-icon">
        <p>Choose the date using the calendar then choose a time slot.</p>
    </div>

@endsection

