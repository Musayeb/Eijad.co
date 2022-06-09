@extends('admin.master')    
@section('css')
    
<style>
    .list{
        padding: 10px;
        overflow: hidden;
        width: 240px;
    }
    .list  img{
        width: 100px;
        height: 100px;
        object-fit:cover;
        cursor: pointer;
    }
    .list  span{
        margin-top: 11px;
        display: block;
        padding-bottom: 20px;
        cursor: pointer;
    }
    #video{
    display:none;
    
    }
    
    #image{
     display:none;
       text-align: center; 
    }
    form{
        display: flex;
    }
    input[type=radio]{
        width: 20px;
        height: 20px;
        display: inline-block;
        vertical-align: top;
    }
    
    </style>
    
@endsection

@section('content')
<div class="demo-gallery card">
    <div class="modal-header">
        <div class="card-title pull-left">Course Gallery</div>
    </div>
    <div class="card-body">
        <ul id="lightgallery" class="list-unstyled row">
            <form method="post" action="{{url('admin/course/select/materials')}}">
                @csrf
            @foreach ($upload as $row ) 
            @if(strcasecmp($row->type,"png")==0||strcasecmp($row->type,"jpg")==0 ||strcasecmp($row->type,"jpeg")==0||strcasecmp($row->type,"gif")=="0")
        
            <label for="{{$row->upload_id}}" > 
            <li class="list text-center" data-id="{{$row->upload_id}}" >
             <input type="radio" name="select" value="{{$row->upload_id}}" required id="{{$row->upload_id}}">
             <input type="hidden" name="type" value="poster">
             <input type="hidden" name="topic" value="{{$topic_id}}">


            <img class="img-responsive" src="{{url('storage/app')}}/{{$row->path}}" alt="Thumb-1">
            <p class="text-center " >{{ $row->file_name }}</p>
            <p class="" >{{  round($fileSize = \Storage::size($row->path)/1000000,3)."MB"}}</p>
            <button class="btn btn-warning prev" type="button" data-type="image" data-responsive="{{url('storage/app')}}/{{$row->path}}">Preview</button>

          </li>
         </label>
                           
          @else
          <label for="{{$row->upload_id}}">
          <li class="list text-center" data-id="{{$row->upload_id}}" >
            <span ><i class="fa fa-film fa-5x"></i></span>
            <p  >{{ $row->file_name }}</p>
            <p  >{{  round($fileSize = \Storage::size($row->path)/1000000,3)."MB"}}</p>
            <button class="btn btn-warning prev" type="button" data-type="video"  data-responsive="{{url('storage/app')}}/{{$row->path}}" >Preview</button>
         </li>
         </label>
        <input type="radio" name="select" value="{{$row->upload_id}}" required id="{{$row->upload_id}}">
        <input type="hidden" name="type" value="vedio">
        <input type="hidden" name="topic" value="{{$topic_id}}">

          @endif
         
          @endforeach
       
        </ul>
        <button type="submit" class="btn btn-success float-right">Submit</button>
    </form>
    </div>
</div>



 <!-- LARGE MODAL -->
 <div id="largeModal" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="modal-header pd-x-20">
                <h6 class="modal-title"> Media Preview</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pd-20">
            <div  id="video">
                <video class="lg-video-object lg-html5" controls preload="none" style="height: 500px;width:100%" id="clip">
                    <source src="" type="video/mp4" id="source">
                    Your browser does not support HTML5 video.
                </video>
            </div>
            <div  id="image">
                <img src="">
            </div>
            </div><!-- modal-body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div><!-- MODAL DIALOG -->
</div>
<!-- LARGE MODAL CLOSED -->
@endsection
@section('jquery')
<script>
    $('body').on('click','.prev',function(){
        var src=$(this).attr('data-responsive');
        var type=$(this).attr('data-type');
        // alert(src);
        if(type=="image"){
               $('#image img').attr('src',src);
               $('#image').css('display','block');
               $('#largeModal').modal('show');

        }else{
            $('#video').css('display','block');
            $('#clip').get(0).pause();
            $('#source').attr('src', src);
            $('#clip').get(0).load();
            $('#clip').get(0).play();
            $('#largeModal').modal('show');
        }
    });

    $('#largeModal').on('hidden.bs.modal', function () {
        $('#clip').get(0).load();
        $('#image').css('display','none');
         $('#video').css('display','none');
    });
    
</script>
@endsection