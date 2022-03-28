@extends('booking')
@section('content')


<div>
            
<style>
*{
    margin:0;
    padding:0;
}
body {
  background-image: url('{{asset('public')}}/img/5.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
#card1{
    position: absolute;
    top: 80px;
    left: 200px;
}
#card2{
    position: relative;
    top: 210px;
    left: 200px;
}
a{
    text-decoration: None;
    color: white;
}



</style>


<div class="card mb-3" style="max-width: 540px;" id="card1">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset('public')}}/img/customer.jpg" class="img-fluid rounded-start" alt="Loading">
    </div>
    <div class="col-md-8">
      <div class="card-body bg-black">
        <h5 class="card-title"> <a href="{{url('/')}}" class="text-white" >Customers</a></h5>
        <p class="card-text text-white">For are customers who are our precious benefectors...</p>
        <button type="button" class="btn btn-dark"><a href="{{url('book/customerbooking')}}">Book Now</a></button>
        
      </div>
    </div>
  </div>
</div>

<div class="card mb-4 " style="max-width: 540px;" id="card2">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset('public')}}/img/admin.jpg" class="img-fluid rounded-start " alt="Loading">
    </div>
    <div class="col-md-8">
      <div class="card-body bg-black">
        <h5 class="card-title"><a href="{{url('admin')}}" class="text-white">Admin</a></h5>
        <p class="card-text text-white"> This is for the admin user with previleged access and permission</p>
        <button type="button" class="btn btn-dark"><a href="{{url('admin/login')}}"> Login </a></button>

      </div>
    </div>
  </div>
</div>
@endsection