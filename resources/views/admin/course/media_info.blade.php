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


</style>

@endsection
@section('content')




	<!-- GALLERY DEMO OPEN -->
    <div class="demo-gallery card">
        <div class=" p-3 border-bottom text-center">
            <div class="font-weight-bold float-left">Course Gallery</div>
             <button class="btn btn-success float-right" data-toggle="modal" data-target="#upload2" >Upload File</button>
             {{-- <button class="btn btn-success float-right mr-1" data-toggle="modal" data-target="#upload" >Upload Video </button> --}}
        </div>
        <div class="card-body">
            <ul id="lightgallery" class="list-unstyled row">
                @php $number1=1; @endphp

                @foreach ($files as $row ) 
                @if(strcasecmp($row->type,"png")==0||strcasecmp($row->type,"jpg")==0 ||strcasecmp($row->type,"jpeg")==0||strcasecmp($row->type,"gif")=="0")
             
                <li class="list text-center" data-id="{{$row->upload_id}}" data-type="image" data-responsive="{{url('storage/app')}}/{{$row->path}}">
                    <img class="img-responsive" src="{{url('storage/app')}}/{{$row->path}}" alt="Thumb-1">
                <p class="text-center " >{{ $row->file_name }}</p>
                <p class="" >{{  round($fileSize = \Storage::size($row->path)/1000000,3)."MB"}}</p>
              </li>
                               
              @elseif(strcasecmp($row->type,"pdf")==0||strcasecmp($row->type,"docx")==0||strcasecmp($row->type,"doc")==0||strcasecmp($row->type,"xls")==0)
              <li class="list text-center" data-id="{{$row->upload_id}}" data-type="video"  data-responsive="{{url('storage/app')}}/{{$row->path}}" >
                <a href="{{url('storage/app')}}/{{$row->path}}">
                <span ><i class="fa fa-file fa-5x"></i></span>
                <p  >{{ $row->file_name }}</p>
                <p  >{{  round($fileSize = \Storage::size($row->path)/1000000,3)."MB"}}</p>
             </a>
            </li>
           
                @elseif(strcasecmp($row->type,"mp4")==0||strcasecmp($row->type,"mov")==0||strcasecmp($row->type,"wmv")==0||strcasecmp($row->type,"mkv")==0)

                <li class="list text-center" data-id="{{$row->upload_id}}" data-type="video"  data-responsive="{{url('storage/app')}}/{{$row->path}}" >
                    <span ><i class="fa fa-film fa-5x"></i></span>
                    <p  >{{ $row->file_name }}</p>
                    <p  >{{  round($fileSize = \Storage::size($row->path)/1000000,3)."MB"}}</p>
                </li>
              @endif
    
              
              @endforeach
               
            </ul>
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

    <!-- LARGE MODAL CLOSED -->
    <div id="upload2" class="modal fade">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-header pd-x-20">
                    <h6 class="modal-title"> File Upload</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pd-20">
                   
                    <div id="resumable-drop" style="display: none">
                        <p> <button type="button" class="btn btn-success btn-block" id="resumable-browse" style="height: 200px" data-url="{{ url('admin/course/media/upload2') }}">Select file to upload or drag and drop here </button> 
                  
                        <p></p>
                    </div>
                    <ul id="file-upload-list" class="list-unstyled"  style="display: none">
                
                    </ul>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
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


@section('directory')
<li class="breadcrumb-item"><a href="{{url('/admin/media')}}"><small class="mb-0 breadcrump-tittle">Media</small></a></li>
<li class="breadcrumb-item"><a ><small class="mb-0 breadcrump-tittle">Media info</small></a></li>
@endsection
@section('jquery')
<script src="https://cdnjs.cloudflare.com/ajax/libs/resumable.js/1.1.0/resumable.min.js"></script>




<script>
    $('body').on('click','.list',function(){
        var src=$(this).attr('data-responsive');
        var type=$(this).attr('data-type');
        // alert(src);
        if(type=="image"){
               $('#image img').attr('src',src);
               $('#image').css('display','block');
               $('#largeModal').modal('show');

        }else if(type=="file"){
            $('#largeModal').modal('hide');

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

   
   <script>
        var $ = window.$; // use the global jQuery instance

        var $fileUpload = $('#resumable-browse');
        var $fileUploadDrop = $('#resumable-drop');
        var $uploadList = $("#file-upload-list");

        if ($fileUpload.length > 0 && $fileUploadDrop.length > 0) {
            var resumable = new Resumable({
                // Use chunk size that is smaller than your maximum limit due a resumable issue
                // https://github.com/23/resumable.js/issues/51
                chunkSize: 1 * 1024 * 1024*5, // 1MB
                simultaneousUploads: 3,
                testChunks: false,
                throttleProgressCallbacks: 1,
                // Get the url from data-url tag
                target: $fileUpload.data('url'),
                // Append token to the request - required for web routes
                query:{_token:'{{ csrf_token() }}',folder:'{{$course->course_name}}',id:'{{$course->course_id}}'},

            });

        // Resumable.js isn't supported, fall back on a different method
            if (!resumable.support) {
                $('#resumable-error').show();
            } else {
                // Show a place for dropping/selecting files
                $fileUploadDrop.show();
                resumable.assignDrop($fileUpload[0]);
                resumable.assignBrowse($fileUploadDrop[0]);

                // Handle file add event
                resumable.on('fileAdded', function (file) {
                    // Show progress pabr
                    $uploadList.show();
                    // Show pause, hide resume
                    $('.resumable-progress .progress-resume-link').hide();
                    $('.resumable-progress .progress-pause-link').show();
                    // Add the file to the list
                    $uploadList.append('<li class="resumable-file-' + file.uniqueIdentifier + '">Uploading <span class="resumable-file-name"></span> <span class="resumable-file-progress"></span>');
                    $('.resumable-file-' + file.uniqueIdentifier + ' .resumable-file-name').html(file.fileName);
                    // Actually start the upload
                    resumable.upload();
                });
                resumable.on('fileSuccess', function (file, message) {
                    // Reflect that the file upload has completed
                    $('.resumable-file-' + file.uniqueIdentifier + ' .resumable-file-progress').html('(completed)');
                    $('#lightgallery').load(document.URL + ' #lightgallery');

                });
                resumable.on('fileError', function (file, message) {
                    // Reflect that the file upload has resulted in error
                    $('.resumable-file-' + file.uniqueIdentifier + ' .resumable-file-progress').html('file could not be uploaded: try again!');
                });
                resumable.on('fileProgress', function (file) {
                    // Handle progress for both the file and the overall upload
                    $('.resumable-file-' + file.uniqueIdentifier + ' .resumable-file-progress').html(Math.floor(file.progress() * 100) + '%');
                    $('.progress-bar').css({width: Math.floor(resumable.progress() * 100) + '%'});
                });
            }

        }


</script>


@endsection