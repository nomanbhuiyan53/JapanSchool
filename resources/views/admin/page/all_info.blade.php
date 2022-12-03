@extends('admin.mainlayout.admin_main')
@section('main_contain')
    
      <!-- Content -->
     {{-- add from start --}}
<div class="container-xxl flex-grow-1 container-p-y">
    

    <div class="row ">
        <div class="col-md-10">
            <div class="card p-4">
                <h5 class="card-header">All Data Table</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                   
                        @foreach ($alldata as $item)
                        <tr>
                            <th style="width: 15%; border-right: 1px dotted black">School Name</th>
                            <td>{{ $item->name }}</td>
                        </tr>
                        <tr>
                                <th style="width: 15%; border-right: 1px dotted black">Email</th>
                                <td>{{ $item->email }}</td>
                        </tr>
                        <tr>
                            <th style="width: 15%; border-right: 1px dotted black">Mobile</th>
                            <td>{{ $item->mobile }}</td>
                        </tr>
                         <tr>
                            <th style="width: 15%; border-right: 1px dotted black">Facebook Page</th>
                            <td>{{ $item->fb }}</td>
                        </tr>   
                        <tr>
                            <th style="width: 15%; border-right: 1px dotted black">copyright</th>
                            <td>{{ $item->copyright }}</td>
                        </tr> 
                        <tr>
                            <th style="width: 15%; border-right: 1px dotted black">Address</th>
                            <td>{!! $item->address !!}</td>
                        </tr>
                        <tr>
                                <th style="width: 15%; border-right: 1px dotted black">Logo</th>
                                <td><img style="height: 80px" src="{{ asset('uploads').'/'.$item->logo }}" alt=""></td>
                        </tr>
                        <tr>
                            <td>
                              <a href="{{ route('info.edit',$item->id) }}" class="btn btn-primary">Edit</a>
                              <a href="{{ route('info.delete',$item->id) }}" class="btn btn-danger delete-confirm" >Delete</a>
                            </td>
                        </tr>
                        <br><br>
                        @endforeach
                    
                  </table>
                </div>
              </div>
        </div>
    </div>
</div>
           {{-- add from end --}}

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $('.delete-confirm').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure?',
        text: 'This record and it`s details will be permanantly deleted!',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});
</script>


@endsection