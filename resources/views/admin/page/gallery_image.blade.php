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
            <h5 class="mb-0">Gallery</h5>
            <small class="text-muted float-end">Add Gallery info</small>
          </div>
          <div class="card-body">
            <form action="{{ route('image.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Image Preview</label>
                    <select  class="form-control" name="batch">
                        <option value="" selected disabled>select batch</option>
                        @foreach ($data as $value )
                            <option value="{{ $value->id }}">{{ $value->batch_number }}</option>
                        @endforeach
                    </select>
                </div>
                
              <div class="mb-3">
                <label class="form-label" for="basic-default-fullname">Image Preview</label>
                <div class="images-preview-div"> </div>
              </div>
              <div>
                <label for="formFileDisabled" class="form-label">Gallery Image Insert</label>
                <input type="file" class="form-control" name="image[]" id="images" placeholder="Choose images" multiple >              
              </div>
              <br>
              <button type="submit" class="btn btn-primary">Upload</button>
            </form>
          </div>
        </div>
      </div>

    </div>
</div>
           {{-- add from end --}}

<script >
$(function() {
// Multiple images preview with JavaScript
    var previewImages = function(input, imgPreviewPlaceholder) {
        if (input.files) {
            var filesAmount = input.files.length;
                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                    $($.parseHTML('<img style="height: 150px; object-fit:cover; margin-right: 5px">')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                    }
                    reader.readAsDataURL(input.files[i]);
                }
        }
    };
    $('#images').on('change', function() {
        previewImages(this, 'div.images-preview-div');
    });
});
</script>

@endsection