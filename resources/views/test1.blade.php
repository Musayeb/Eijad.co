@extends('master')

@section('content')
<div class="row justify-content-center" style="padding-top:200px">
<div class="col-md-5">
    <form action="{{url('upload')}}" method="post" enctype="multipart/form-data" onsubmit="prevent.default()">
        @csrf
        <input type="file" name="myfile"><br>
        <input type="submit" value="Upload File to Server">
    </form>
    
    <div class="progress">
        <div class="bar"></div >
        <div class="percent">0%</div >
    </div>
    
    <div id="status"></div>
    
</div>
</div>
@endsection

@section('jquery')
    <script>
$(function() {

var bar = $('.bar');
var percent = $('.percent');
var status = $('#status');

$('form').ajaxForm({
    beforeSend: function() {
        status.empty();
        var percentVal = '0%';
        bar.width(percentVal);
        percent.html(percentVal);
    },
    uploadProgress: function(event, position, total, percentComplete) {
        var percentVal = percentComplete + '%';
        bar.width(percentVal);
        percent.html(percentVal);
    },
    complete: function(xhr) {
        status.html(xhr.responseText);
    }
});
}); 
    </script>
@endsection