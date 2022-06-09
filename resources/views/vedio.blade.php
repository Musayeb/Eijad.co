{{-- 
@extends('layouts.master')
@section('css')
<link href="https://vjs.zencdn.net/7.10.2/video-js.css" rel="stylesheet" />
@endsection

@section('content')
<div class="" st></div>

    <div class="card mt-5">
        <video class="video-js" id="my-video" >
            <source src="http://video-js.zencoder.com/oceans-clip.mp4" type="video/mp4" />
            <source src="http://video-js.zencoder.com/oceans-clip.webm" type="video/webm" />
            <source src="http://video-js.zencoder.com/oceans-clip.ogv" type="video/ogg" />
          </video>


<video  id="my-video"class="video-js vjs-default-skin"
  controls preload="auto" width="640" height="264"
  poster="http://video-js.zencoder.com/oceans-clip.png"
  data-setup='{"example_option":true}'>
 <source src="http://video-js.zencoder.com/oceans-clip.mp4" type="video/mp4" />
 <source src="http://video-js.zencoder.com/oceans-clip.webm" type="video/webm" />
 <source src="http://video-js.zencoder.com/oceans-clip.ogv" type="video/ogg" />
 <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
</video>
    </div>


    <form action="{{asset('admin/course/media/upload')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" id="">
    <input type="submit">
    </form>
@endsection

@section('jquery')
    <script src="https://vjs.zencdn.net/7.10.2/video.min.js"></script>
<script src="{{asset('public/assist/vedio.js/videojs-playback-aduster.js')}}"></script>
<script src="{{asset('public/assist/vedio.js/vediojs-contrib.js')}}"></script>
<script>
    jQuery('#my-video').bind('contextmenu',function() { return false; });
    (function(window, videojs) {
      var player = window.player = videojs('my-video', {
        playbackRates: [0.5, 1, 1.25,1.5, 2]
      });

    }(window, window.videojs));

</script>
@endsection --}}


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Laravel 8 Drag And Drop Multi Files Upload Demo</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"></script>


    <style>
        .dropzone {
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
            border-radius: 14px;
            margin: 60px 0 0 0;
            background: #e3e6ff;
            border: 1px dotted #4e4e4e;            
        }

    </style>
</head>

<body>
    <div id="dropzone">
        <form action="{{ url('admin/course/media/upload') }}" class="dropzone" id="uploadFile" enctype="multipart/form-data">
            @csrf
            <div class="dz-message">
                Drag 'n' Drop Files<br>
            </div>
        </form>
    </div>


    
    <script>
        $.ajaxSetup({headers: {'X-CSRF-TOKEN':'@php echo csrf_token() @endphp '}});  


      $("#dropzone").dropzone({
        url: "{{ url('admin/course/media/upload') }}",
     maxFilesize: 209715200,
     acceptedFiles: "video/*",
     addRemoveLinks: true,
     dataType: "HTML",
     timeout: 180000,
     success: function (file, response, data) {
         // Do things on Success
     },
     error: function (file, response) {
     file.previewElement.classList.add("dz-error");
     }
});
    </script>
</body>

</html>