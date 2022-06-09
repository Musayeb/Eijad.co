<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://vjs.zencdn.net/7.10.2/video-js.css" rel="stylesheet" />
</head>
<body>

    
    <video id="my-video" class="video-js vjs-default-skin" controls preload="auto" width="800" height="464"
    poster="{{ asset('storage/app') }}/{{ $photo[0]->path }}"
    data-setup='{"example_option":true}'>
    <source src="{{url('media_show')}}/@php echo base64_encode($video[0]->path)@endphp" type="video/mp4" />
    </video>
        <script src="https://localhost/new/public/assist/js/jquery.js"></script>
        <script src="https://vjs.zencdn.net/7.10.2/video.min.js"></script>
        {{-- <script src="{{asset('public/assist/vedio.js/videojs-playback-aduster.js')}}"></script> --}}
        {{-- <script src="{{asset('public/assist/vedio.js/vediojs-contrib.js')}}"></script> --}}

<script>

        jQuery('#my-video').bind('contextmenu',function() { return false; });
        // (function(window, videojs) {
        //   var player = window.player = videojs('my-video', {
        //     playbackRates: [0.5, 1, 1.25,1.5, 2]
        //   });
    
        // }(window, window.videojs));
      </script>

</body>
</html>