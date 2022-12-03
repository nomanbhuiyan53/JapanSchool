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
            <h5 class="mb-0">Gallery info</h5>
            <small class="text-muted float-end">Add Gallery info</small>
          </div>
          <div class="card-body">
            <form action="{{ route('gallery.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="mb-3">
                <label class="form-label" for="basic-default-fullname">Galley Title</label>
                <input type="text" name="gallery_title" class="form-control title" id="basic-default-fullname" placeholder="Galley Title">
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-default-fullname">Batch name</label>
                <input type="text" name="batch_number" required class="form-control title" id="basic-default-fullname" placeholder="batch name">
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-default-fullname">Batch Start Date</label>
                <input type="date" name="start_date" class="form-control title" required id="basic-default-fullname">
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-default-fullname">Batch End Date</label>
                <input type="date" name="end_date" class="form-control title" id="basic-default-fullname" >
              </div>
              <br>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>

    </div>
</div>
           {{-- add from end --}}

@endsection