@extends('frontend.masterfile.index')
@section('section')

<div class="container">
    <div class="row mt-5">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-6 iconimage">
                    <img class="inst-img " src="{{ asset('assets/image/image-asset.png') }}" alt="">
                </div>
                <div class="col-6">
                    <p><strong>JW Marriott Phuket Resort & Spa</strong></p>
                    <p>Batch 1</p> 
                    <p>July 2015 – January 2016</p>  
                </div>
            </div>
            <div class="slidershow">
                @php
                    $image = imageGallery();
                    //dd($image);
                @endphp
             
              <img src="{{ asset('uploads/1669891196pimg1.jpeg' ) }}" class="main">
              <div class="thumbnails">
                @foreach ($image as $item)
                <img class="imgs" src="{{ asset('uploads'.'/'.$item->image ) }}">
                {{-- <img class="imgs" src="https://source.unsplash.com/O0uCm1WLnA0/800x800">
                <img class="imgs" src="https://source.unsplash.com/pV5ckb2HEVk/800x800">
                <img class="imgs" src="https://source.unsplash.com/j9QEFAQqaXc/800x800">
                <img class="imgs" src="https://source.unsplash.com/EXkbaeN05lY/800x800">
                <img class="imgs" src="https://source.unsplash.com/B2mq60Ksrsg/800x800"> --}}
                @endforeach  
            </div>
             
              
            </div> {{-- slider end --}}
            <br><br>
            <hr>
            <br><br>

            {{-- second slider  --}}

            <div class="row">
                <div class="col-6 iconimage">
                    <img class="inst-img " src="{{ asset('assets/image/image-asset.png') }}" alt="">
                </div>
                <div class="col-6">
                    <p><strong>JW Marriott Phuket Resort & Spa</strong></p>
                    <p>Batch 1</p> 
                    <p>July 2015 – January 2016</p>  
                </div>
            </div>
            <div class="slidershow">              
              <img src="https://source.unsplash.com/ufFIweqSPd4/800x800" class="main">
              <div class="thumbnails">
                <img class="imgs" src="https://source.unsplash.com/ufFIweqSPd4/800x800">
                <img class="imgs" src="https://source.unsplash.com/O0uCm1WLnA0/800x800">
                <img class="imgs" src="https://source.unsplash.com/pV5ckb2HEVk/800x800">
                <img class="imgs" src="https://source.unsplash.com/j9QEFAQqaXc/800x800">
                <img class="imgs" src="https://source.unsplash.com/EXkbaeN05lY/800x800">
                <img class="imgs" src="https://source.unsplash.com/B2mq60Ksrsg/800x800">
              </div>
            </div> {{-- slider end --}}
        </div> {{-- col-md-8 end --}}
    </div> {{-- row end --}}
</div> {{-- container end --}}


@endsection