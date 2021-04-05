<div>

    <h3>appointment Details</h3>

    <p>Service: {{$service}}</p>
    <p>Date: {{$date}}</p>
    <p>Time: {{$time}}</p>
    <p>Client Name: {{$clientName}}</p>
    @if ($price == 0.00)
        <p>Total R0.00 (Client's first appointment.)</p> 
    @else
        <p>Total {{$price}} (Paid After appointment)</p>  
    @endif


</div>