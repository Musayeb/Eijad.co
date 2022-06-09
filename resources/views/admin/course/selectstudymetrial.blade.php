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
        <div class="card-title pull-left">Course file manager</div>
    </div>
    <div class="card-body">
        <ul id="lightgallery" class="list-unstyled row">
            <form method="post" action="{{url('admin/course/media/select/file')}}">
                @csrf
            @foreach ($upload as $row ) 
            @if(strcasecmp($row->type,"pdf")==0||strcasecmp($row->type,"docx")==0||strcasecmp($row->type,"doc")==0||strcasecmp($row->type,"xls")==0)
          
            <label for="{{$row->upload_id}}">
                <li class="list text-center"  data-id="{{$row->upload_id}}" >
                  <span ><i class="fa fa-file fa-5x"></i></span>
                  <p  >{{ $row->file_name }}</p>
                  <p  >{{  round($fileSize = \Storage::size($row->path)/1000000,3)."MB"}}</p>
                  <a href="{{url('storage/app')}}/{{$row->path}}"><button class="btn btn-warning prev" type="button" >Preview</button></a>
               </li>
               </label>
              <input type="radio" name="select" value="{{$row->upload_id}}" required id="{{$row->upload_id}}">
              <input type="hidden" name="topic" value="{{$topic_id}}">
          
          @endif
         
          @endforeach
       
        </ul>
        <button type="submit" class="btn btn-success float-right">Submit</button>
    </form>
    </div>
</div>


@endsection
@section('jquery')
<script>

    
</script>
@endsection