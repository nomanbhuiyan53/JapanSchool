@extends('admin.mainlayout.admin_main')
@section('main_contain')
    
      <!-- Content -->
     {{-- add from start --}}
<div class="container-xxl flex-grow-1 container-p-y">


    <div class="row ">
        <div class="col-md-10">
          @if(Session::has('message'))
          <p class="alert
          {{ Session::get('alert-class', 'alert-info') }}">{{Session::get('message') }}</p>

          @endif
            <div class="card p-4">
                <h5 class="card-header">All Data Table</h5>
                <div class="table-responsive  text-nowrap">
                 
                   {{-- @if ($gimage->gallary_name_id == $gname)
                       
                   @endif --}}
                   @php
                       $id = DB::table('gallary_names')->select('id')->get();
                      //  dd($id);
                   @endphp
                  
                    <div class="d-inline">
                      @foreach ($id as $id)

                      @php
                
                          $images = getGalleryImage($id->id);
                      @endphp
                      @foreach ( $images as $key=>$item )
                            @if($key<1)  
                             <h3>Gallery - {{ $key+1 }}</h3>   
                            @endif    
                           
                          @if ($item->gallary_name_id == $id->id)   
                          
                 
                            <img style="height: 80px; margin-right:8px" src="{{ asset('uploads'.'/'.$item->image) }}" alt="">              
                     
                          @endif                        
                      @endforeach
                      @endforeach
                   
                      </div>
                    
                <br><br>
              
                     
                  
                  
                    
                
                </div>
              </div>
        </div>
    </div>
</div>
           {{-- add from end --}}

    

@endsection