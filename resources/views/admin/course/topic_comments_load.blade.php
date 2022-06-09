<div class="comment-form">
    <div class="group-title"><h4>Leave Comment</h4></div>
    
    <!--Comment Form-->
    <form method="POST" id="commentForm">
        @csrf
        <div class="row clearfix">
            
            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                <textarea class="" name="text" style="border:1px solid #00ab15" placeholder="Write your comment..." required></textarea>
            </div>
            <div>
                <input type="hidden" name="topic_id" value="{{$id}}">
            </div>
            
            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                <button class="theme-btn btn-style-three btn-block" type="submit" name="submit-form"><span class="txt">Submit Your Comment <i class="fa fa-angle-right"></i></span></button>
            </div>
            
        </div>
    </form>
        
</div>
<div class="comments-area">
    <div class="group-title">
        <h4>Recent Comments (Total {{$total_comment->total_comment}})</h4>
    </div>
    
    @foreach ($comments as $comment)
    <div id="comment{{$comment->comment_id}}">
        <div class="comment-box">
            <div class="comment">
                @php $path=Helper::get_avatar_image_user($comment->user_id); @endphp

                <div class="author-thumb"><img src="{{$path}}" alt="user-photo"></div>
                <div class="comment-info clearfix"><strong>{{$comment->name}}</strong><div class="comment-time">{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $comment->created_at)->format('d-m-Y')}}</div></div>
                <div class="text">{{$comment->text}}</div>
                <a data-id="{{$comment->comment_id}}"  class="theme-btn reply-btn like"><i class="{{Helper::get_status($comment->comment_id) == 'liked' ? 'fa fa-heart' : 'ti-heart'}}"></i> Like</a><span class="theme-btn ml-2 like_count">{{Helper::get_likes($comment->comment_id)}}</span>
                <a onclick="show_reply({{$comment->comment_id}})" class="theme-btn reply-btn ml-4"><i class="fa fa-reply"></i> Reply</a>
                <div class="d-none" id="reply{{$comment->comment_id}}">
                    <form method="POST" class="replyForm">
                        @csrf
                        
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <textarea class="w-100 mt-4" rows="5" name="text" required  style="border:1px solid #00ab15" placeholder="Write your reply..."></textarea>
                            </div>
                            <div>
                                <input type="hidden" name="parent_id" value="{{$comment->comment_id}}">
                                <input type="hidden" name="topic_id" value="{{$comment->topics_id}}">
                            </div>
                            
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <button class="btn btn-md btn-success" type="submit" ><span class="txt">Submit Your Reply <i class="fa fa-angle-right"></i></span></button>
                            </div>
                            
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    @foreach (Helper::get_replies($comment->topics_id, $comment->comment_id) as $reply)
    <div class="comment-box reply-comment mt-3">
        <div class="comment">
            @php $path1=Helper::get_avatar_image_user($reply->user_id); @endphp
            <div class="author-thumb"><img src="{{$path1}}" alt="user-photo"></div>
            <div class="comment-info clearfix"><strong>{{$reply->name}}</strong><div class="comment-time">{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $reply->created_at)->format('d-m-Y')}}</div></div>
            <div class="text">{{$reply->text}}</div>
            <a data-id="{{$reply->comment_id}}" class="theme-btn reply-btn like"><i class="{{Helper::get_status($reply->comment_id) == 'liked' ? 'fa fa-heart' : 'ti-heart'}}"></i> Like</a><span class="theme-btn ml-2 like_count">{{Helper::get_likes($reply->comment_id)}}</span>
            <a onclick="show_reply({{$reply->comment_id}})" class="theme-btn reply-btn ml-4"><i class="fa fa-reply"></i> Reply</a>
            <div class="d-none" id="reply{{$reply->comment_id}}">
                <form method="POST" class="replyForm">
                    @csrf
                    
                    <div class="row clearfix">
                
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <textarea class="w-100 mt-4" rows="5" name="text" required style="border:1px solid #00ab15" placeholder="Write your reply..."></textarea>
                        </div>

                        <div>
                            <input type="hidden" name="parent_id" value="{{$comment->comment_id}}">
                            <input type="hidden" name="topic_id" value="{{$comment->topics_id}}">
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <button class="btn btn-md btn-success" type="submit" ><span class="txt">Submit Your Reply <i class="fa fa-angle-right"></i></span></button>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
    


    @endforeach
  
</div>