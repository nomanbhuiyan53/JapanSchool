@extends('admin.mainlayout.admin_main')
@section('main_contain')
    
      <!-- Content -->
     {{-- add from start --}}
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-8">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Slider Information</h5>
            <small class="text-muted float-end">Add slider info</small>
          </div>
          <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="mb-3">
                <label class="form-label" for="basic-default-fullname">Title</label>
                <input type="text" name="title" class="form-control title" id="basic-default-fullname" placeholder="John Doe">
              </div>
              <div>
                <label for="formFileDisabled" class="form-label">Slider Image</label>
                <input class="form-control" type="file" id="image formFileDisabled" disabled="">
              </div>
              <br>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>

    </div>

    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <h5 class="card-header">Light Table head</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead class="table-light">
                      <tr>
                        <th>Sl.No</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        @foreach ($allData as $key => $value)
                            
                            <td>{{ $key+1 }}</td>
                            <td>{{ $value->title }}</td>
                            <td>{{ $value->image }}</td>
                            <td>Active</td>
                            <td>
                                <a href="" class="btn btn-primary">Edit</a>
                                <a href="" class="btn btn-danger" >Delete</a>
                            </td>

                        @endforeach
                        
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
        </div>
    </div>
</div>
           {{-- add from end --}}

    

@endsection