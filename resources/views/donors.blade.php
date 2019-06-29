@extends('layouts.myapp')

@section('content')
<section class="container">
    
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Blood Donors</h2>
            <div class="card-tools">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#donorModal">Add Donor</button>
            </div>

        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered table-hover" >
                <thead>
                <tr>
                  <th> Id </th> 
                  <th> Name </th>
                  <th> District </th>
                  <th> State </th>
                  <th> Phone Number</th>
                  <th> Blood Group</th>
                  <th> Number of Donations</th>
                  <th> Status</th>
                  <th> Actions </th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($donors as $dns)
                 { ?>
                <tr>
                    <td> {{ $dns->id }} </td> 
                    <td> {{ $dns->name }} </td>
                    <td> {{ $dns->district }} </td>
                    <td> {{ $dns->state }} </td>
                    <td> 444</td> 
                    <td> f</td>
                    <td> 3</td>
                    <td> active</td>
                    <td> Edit/Delete</td>
                </tr>
                <?php }
                 ?>
                
                

                </tbody>

            </table>

        </div>
    </div>

    <!-- New Donor Modal Window -->
    <div class="modal fade" id="donorModal" tableindex=" -1" role="dialog" aria-hidden ="true">
        <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                  <h3 class="modal-title"> Add Donor Details </h3>
                  <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>

                  </button>
               
               </div>
               <form id="donorform" role="form">
                    <div class="modal-body">
                         <div class="form-group">

                            <label for="name">Name :  </label>
                            <input type="text" class="form-control" id="name" name="name">
                         
                         </div>
                         <div class="form-group">

                            <label for="district">District  </label>
                            <input type="text" class="form-control" id="district" name="district">
                         
                         </div>
                         <div class="form-group">

                            <label for="state">State </label>
                            <input type="text" class="form-control" id="state" name="state">
                         
                         </div>
                         <div class="form-group">

                            <label for="phnum">Phone Number</label>
                            <input type="text" class="form-control" id="phnum" name="phnum">
                         
                         </div>
                         <div class="form-group">

                            <label for="phnum">Phone Number</label>
                            <input type="text" class="form-control" id="phnum" name="phnum">
                         
                         </div>
                         <div class="form-group">

                            <label for="blood">Blood Group</label>
                            <input type="text" class="form-control" id="blood" name="blood">
                         
                         </div>    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" id="submitForm">Save</button>

                    
                    </div>

               </form>
            
            </div>

        </div>            
                    
    
    </div>

</section>


@endsection


@section('script')
<script>
    $('body').on('click','submitForm',function(e)){
        e.preventDefault();
        var donorForm = $("donorForm");
        var formData = donorFrom.serialize();
         
        $.ajax({
            url:'/donors',
            type:'POST',
            data:formData,
            success:function(data){
                console.log(data);
            },
            error:function(jqXHR,textStatus,errorThrown){
                console.log(jqXHR.status)
            }


        })
        
    }
</script>
@endsection
