


<!-- Modal -->
<div class="modal fade" id="exampleModalCenteraddbus-schedule" tabindex="-1" role="dialog" 
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle" align="center">
            <i class="glyphicon glyphicon-log-in">Generate New Schedule</i></h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form method="post" action="{{ route('bus-schedule.store') }}" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <fieldset>
                      <div class="row">
                      {{-- Operator--}}
                      <div class="col-md-6">
                        <div class="form-group">
                                <!-- <label for="exampleInputPassword1">Seat No</label> -->
                                <select name="operator_id" id="operator_id" class="form-control">
                                    <option value="0" selected="true" disabled="true" >Select Operator</option>
                                    @foreach ($operators as $data)
                                    <option value="{{$data->region_id}}">{{$data->region_name}}</option>
                                    @endforeach
                                </select>
                          </div>
                        </div>
                      {{-- Buses--}}
                        <div class="col-md-6">
                        <div class="form-group">
                                <!-- <label for="exampleInputPassword1">Seat No</label> -->
                                <select name="bus_id" id="bus_id" class="form-control">
                                    <option value="0" selected="true" disabled="true" >Select Related Buses</option>      
                                
                                </select>
                          </div>
                        </div>
                      {{-- Region--}}
                        <div class="col-md-6">
                        <div class="form-group">
                                <!-- <label for="exampleInputPassword1">Seat No</label> -->
                                <select name="region_id" id="region_id" class="form-control">
                                    <option value="0" selected="true" disabled="true" >Select Region</option>
                                    @foreach ($regions as $data)
                                    <option value="{{$data->region_id}}">{{$data->region_name}}</option>
                                    @endforeach
                                </select>
                          </div>
                        </div>
                         {{-- Sub Region--}}
                         <div class="col-md-6">
                          <div class="form-group">
                                <!-- <label for="exampleInputEmail1">Bus Name</label> -->
                                <select name="sub_region_id"  id="sub_region_id" class="form-control">
                                <option value="0" selected="true" disabled="true" >Select Related Sub Region</option>
                             </select>
                          </div>
                        </div>


                           {{-- Pickup Address--}}
                      <div class="col-md-6">
                          <div class="form-group">
                                <input name="pickup_address" class="form-control"
                                 placeholder="Enter Pickup Address" type="text">
                          </div>
                        </div>
                           {{-- Dropoff Address--}}
                      <div class="col-md-6">
                          <div class="form-group">
                                <input name="dropoff_address" class="form-control"
                                 placeholder="Enter Dropoff Address" type="text">
                          </div>
                        </div>
                           {{-- Depart Date--}}
                      <div class="col-md-6">
                          <div class="form-group">
                                <!-- <label for="exampleInputEmail1">Bus Name</label> -->
                                <input name="depart_date"  id="depart_date" class="form-control" aria-describedby="emailHelp"
                                 placeholder="Enter Return Date" type="text">
                          </div>
                        </div>
                          {{-- Return Date--}}
                      <div class="col-md-6">
                          <div class="form-group">
                                <!-- <label for="exampleInputEmail1">Bus Name</label> -->
                                <input name="return_date"  id="return_date" class="form-control" aria-describedby="emailHelp"
                                 placeholder="Enter Return Date" type="text">
                          </div>
                        </div>
                        {{-- Depart Time--}}
                      <div class="col-md-6">
                          <div class="form-group">
                                <!-- <label for="exampleInputEmail1">Bus Name</label> -->
                                <input name="depart_time"  class="form-control" aria-describedby="emailHelp"
                                 placeholder="Enter Depart Time" type="time">
                          </div>
                        </div>
                          {{-- Return Time--}}
                          <div class="col-md-6">
                          <div class="form-group">
                                <!-- <label for="exampleInputEmail1">Bus Name</label> -->
                                <input name="return_time"  class="form-control" aria-describedby="emailHelp" 
                                placeholder="Enter Return Time" type="time">
                          </div>
                          </div>
                          </div>
                          {{-- SATATUS--}}
                          <div class="col-md-3">
                          <div class="form-group">
                                <input name="status"  aria-describedby="emailHelp" type="checkbox">
                                <label for="exampleInputEmail1">Active</label>
                          </div>
              </div>
                      </fieldset>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Generate Bus Schedules</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- -->
  @section('scripts')
   <script type="text/javascript">
//{{-- Show Start Date--}}

$('#region_id').on('change',function(e){
		var region_id = $(this).val();
		var sub_subregion_id= $('#sub_region_id')
		    $(sub_region_id).empty();
		$.get("{{ route('showRegion')}}",{region_id:region_id},function(data){
		
		//console.log(data);
		$.each(data,function(i,l){
		$(sub_region_id).append($('<option/>',{
			value : l.id,
			text : l.sub_region_name
		}))
	     })
	})
});

$('#operator_id').on('change',function(e){
		var operator_id = $(this).val();
		var bus_id = $('#bus_id')
		    $(bus_id).empty();
	$.get("{{ route('showOperator')}}",{operator_id:operator_id},function(data){
		
	       	//console.log(data);
		$.each(data,function(i,l){
		$(bus_id).append($('<option/>,{
			value : l.id,
			text : l.bus_name
		}))
	     })
	})
})

	</sript>
	     <script type="text/javascript">
	     $('#depart-date').datetimepicker({
	                     // changeMonth:true,
			     // changeYear:true,
			     format: 'YY-MM-DD'
			});
//{{-- Show End Date --}}
	$('#return-date').datetimepicker({
	                     // changeMonth:true,
			     // changeYear:true,
			     format: 'YY-MM-DD'
});
	$('.datepicker').datepicker()
	
	</script>

@endsection