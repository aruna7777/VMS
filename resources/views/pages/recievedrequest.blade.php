@extends('layouts.mainlayout')
@section('title',"RecievedRequest page")

@section('content')
        
<div class="container-fluid" style="padding-top: 30px; padding-left: 20px; padding-bottom: 30px;">
<div class="card">
  <div class="card-header" style="text-align-center">
  
  <strong> රාජකාරි ගමන් යාම සඳහා වාහනයක් ඉල්ලුම් කිරීම</strong>
      
  </div>
  <div>
    <form>
        <!-- drop down -->
        <div class="row">
        <div class="input-group mb-4" style="padding-right: 20px; padding-left: 20px; padding-top: 20px;" >
                <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                <option selected>Choose Status...</option>
                <option value="1">Pending</option>
                <option value="2">Approve</option>
                <option value="3">Reject</option>
                </select>
                <!-- <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">Button</button>
                </div> -->
        </div>
        </div>


         <!-- drop down end -->
    <div style="padding-right: 20px; padding-left: 20px;padding-bottom: 20px;">
    <button type="submit" class="btn btn-primary">Request Vehicle</button>
    </div>

    
<!--  -->
<table class="table " id="mdatatable">
      <thead class="thead-dark">
          <tr>
          <th scope="col">ID</th>
          <th scope="col">Date</th>
          <th scope="col">User</th>
          <th scope="col">Branch</th>
          <th scope="col">Location</th>
          <th scope="col">View</th>
          <th scope="col">Approve</th>
          <th scope="col">Not Approved</th>
          
          
          </tr>
      </thead>
      <tbody>
      @foreach($Data as $data)
          <tr>
          
              <td>{{$data->id}}</td>
              <td>{{$data->datetime}}</td>
              <td>{{$data->name}}</td>
              <td>{{$data->branch}}</td>
              <td>{{$data->location}}</td>
              
              <td>
                <a href="" class="btn btn-success btn-sm">View</i></a>&nbsp;
              </td>
              <td>
                <a href="" class="btn btn-primary btn-sm"></i>Approve</a>&nbsp;
              </td>
              <td>
                <a href="" class="btn btn-danger btn-sm">Not Approve</a>&nbsp;
              </td>
          </tr>
      @endforeach
      </tbody>
  </table>

<!--  -->

    </form>

    @push('scripts')
      <script>

$( document ).ready(function() {
    
    var op=" ";
   
        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        $.ajax({
        type:'POST',
        url:'{!!URL::to('view_request')!!}',
        // data: $('#CheckVoterForm').serialize(),
        success:function(data){
          alert("ok");
            for(var i=0;i<data.length;i++){
                
                op+='<tr>';
                    op+='<th>{{trans('Year')}}</th><td>'+data[i].aDisID+'</td>';
                    op+='</tr>';
                    op+='<tr>';
                    op+='<th>{{trans('SLIN')}}</th><td>'+data[i].districtNameSI+'</td>';
                    op+='</tr>';
                    op+='<tr>';
                    op+='<th>{{trans('NIC')}}</th><td>'+data[i].districtNameEN+'</td>';
                    op+='</tr>';
                    op+='<tr>';
                    op+='<th>{{trans('Full Name')}}</th><td>'+data[i].districtNameEN+'</td>';
                    op+='</tr>';
                    op+='<tr>';
                    op+='<th>{{trans('Gender')}}</th><td>'+data[i].districtNameEN+'</td>';
                    op+='</tr>';
                   

                   
            
            }
            $("#reqtable tbody").append(op);
                

        },
        error:function(){
        //   alert("no");

        }

      });
      
    });
      </script>

      @endpush
    </div>
</div>   
</div>   



@endsection

