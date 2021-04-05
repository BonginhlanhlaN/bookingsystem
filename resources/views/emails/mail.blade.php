<div>
    <img src="{{url('/storage/berveybookingsIcons/BerveyLogo.svg')}}" alt = "bervey appointments logo" style = "width:160px; height: 160px;">
</div>


<h2>Thank you for booking an appointment with us.</h2>

<div>

    <h3>appointment Details</h3>

    <p>Service: {{$service}}</p>
    <p>Date: {{$date}}</p>
    <p>Time: {{$time}}</p>
    <p>Location: 58 Musgrave Botanic Gardens Road</p>

    @if ($price == 0.00)
        <p>Total R0.00 (This is your first appointment.)</p> 
    @else
        <p>Total {{$price}} (Paid After appointment)</p>  
    @endif
    

</div>

