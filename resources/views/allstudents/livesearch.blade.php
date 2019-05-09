@extends('layouts.dasheadfoot')
@section('content') 
<input type = "text" name="search" id="search" class="form-control" placeholder="Search datas">
<h3><span id="total_records"></span></h3>
<table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Roll No</th>
            <th scope="col">Image</th>
          <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Class</th>
            
            
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table>
      <script type="text/javascript">
      $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
</script>
      
      <script>
        $(document).ready(function(){
            fetch_student_data();
            //returns data if query is executed
            function fetch_student_data(query = ''){
                $.ajax({
                    //sent to action method in Livesearchcontroller
                    url:"{{route('livesearch.action')}}",
                    method:'GET',
                    //the data which we send to server
                    data:{query:query},
                    dataType:'json',
                    //success callback fucntion.. will be called when request is successful
                    success:function(data){
                        $('tbody').html(data.table_data);
                        $('#total_records').text(data.total_data)
                    }

                });
            }
            $(document).on('keyup', '#search', function(){
                //it will fetch the search text box and store in the varialble
                    var query = $(this).val();
                    //filter data according to this query
                    fetch_student_data(query);
            });
        });
      </script>
      


      
      @endsection







