@extends('admin.mainlayout.admin_main')
@section('main_contain')
    
      <!-- Content -->
     {{-- add from start --}}
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-8">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Update Information</h5>
            <small class="text-muted float-end">Update information data</small>
          </div>
          <div class="card-body">
            <form action="{{ route('info.add') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="mb-3">
                <label class="form-label" for="basic-default-fullname">School Name</label>
                <input type="text" name="title" value="{{ $editData->name }}" class="form-control title" id="basic-default-fullname" placeholder="school Name">
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-default-fullname">Email</label>
                <input type="email" name="email" value="{{ $editData->email }}" required class="form-control title" id="basic-default-fullname" placeholder="email">
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-default-fullname">Mobile</label>
                <input type="number" name="mobile" value="{{ $editData->mobile }}" class="form-control title" required id="basic-default-fullname" placeholder="Mobile Number">
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-default-fullname">facebook page Link</label>
                <input type="text" name="fb" value="{{ $editData->fb }}" class="form-control title" id="basic-default-fullname" placeholder="https://facebook.com/pagename">
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-default-fullname">CopyRight</label>
                <input type="text" name="copyright" value="{{ $editData->copyright }}" class="form-control title" id="basic-default-fullname" placeholder="copyright">
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-default-fullname">Address</label>
                  <textarea name="address" id="" cols="30" rows="10"></textarea> 
              </div>
              <div>
                <label for="formFileDisabled" class="form-label">Logo</label>
                <input class="form-control" name="logo" type="file" id="formFileDisabled" >
              </div>
              <br>
              <button type="submit" class="btn btn-primary">Update</button>
            </form>
          </div>
        </div>
      </div>

    </div>
</div>
           {{-- add from end --}}

    

@endsection