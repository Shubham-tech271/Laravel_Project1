@extends('booking')
@section('content')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"> Booking Form

                            @if($errors->any())
                                @foreach($errors->all() as $error)
                                    <p class="text-danger">{{$error}}</p>
                                @endforeach
                            @endif

                            @if(Session::has('success'))
                            <p class="text-success">{{session('success')}}</p>
                            @endif
                            <div class="table-responsive">
                                <form method="post" enctype="multipart/form-data" action="{{url('admin/customer')}}">
                                    @csrf
                                    <table class="table table-bordered" >
                                        <tr>
                                            <th>Customer name <span class="text-danger">*</span></th>
                                            <td>
                                                <input name="full_name" value="" type="text" class="form-control checkin-date" placeholder="Please Enter your name......">
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>Mobile<span class="text-danger">*</span></th>
                                            <td>
                                                <input name="mobile" type="number" class="form-control checkin-date" placeholder="Enter mobile no......" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>CheckIn Date <span class="text-danger">*</span></th>
                                            <td><input name="checkin_date" type="date" class="form-control checkin-date" /></td>
                                        </tr>
                                        <tr>
                                            <th>Avaiable Rooms <span class="text-danger">*</span></th>
                                            <td>
                                                <select class="form-control room-list" name="room_id">
                                                <option value="0">--- Select ---</option>
                                                @foreach($roomtypes as $room_id)
                                                <option value="{{$room_id->id}}">{{$room_id->title}} Price:{{$room_id->price}}</option>
                                                @endforeach

                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                        <th> Email <span class="text-danger">*</span></th>
                                        <td><input name="email" type="email" class="form-control" /></td>
                                    </tr>
                                        <tr>
                                            <th> Total Members </th>
                                            <td><input name="total_members" type="number" class="form-control" /></td>
                                        </tr>
                                        
                                        <tr>
                                            <td colspan="2">
                                                <input type="hidden" name="ref" value="front" />
                                                
                                                <input type="submit" class="btn btn-primary" />
                                            </td> 
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $(".checkin-date").on('blur',function(){
            var _checkindate=$(this).val();
            // Ajax
            $.ajax({
                url:"{{url('admin/booking')}}/available-rooms/"+_checkindate,
                dataType:'json',
                beforeSend:function(){
                    $(".room-list").html('<option>--- Loading ---</option>');
                },
                
                success:function(res){
                    var _html='json',
                    $.each(res.data,function(index,row){
                        _html+='<option value="'+row.id' " >'+row.id+'</option>';
                    });

                    $(".room-list").html(_html);

                }
            });
        });



    });
</script>
@endsection

@endsection