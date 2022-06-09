@extends('layouts.master')
@section('title', 'Quiz')
@section('css')
<style>
    div.timer-quick>div {
        display: inline !important;
        font-size: 1rem;
    }

    p {
        line-height: 0.8em;
    }

    .modal-body h6 {
        font-weight: 700;
    }
    .not-allowed {
     pointer-events: auto! important;
     cursor: not-allowed! important;
    }


</style>
@endsection
@section('content')
<!-- Page Title -->
<section class="page-title">
    <div class="auto-container pb-5">
        <h2 class="heading">Quiz</h2>
        <!-- Search Boxed -->
    </div>
</section>
<!--End Page Title-->

<!-- Pricing Section -->
<section class="pricing-section price-page-section pt-5">
    <div class="auto-container">
        <div class="pricing-tabs tabs-box">
            <!--Tabs Container-->
            <div class="tabs-content">

                <!--Tab-->
                <div class="tab active-tab" id="prod-monthly">
                    <div class="content">

                        <div class="row justify-content-center clearfix">
                            <div class="col-md-9 col-sm-9 col-12">
                                <div class="sec-title style-two">
                                    <h3 id="quiz_name">{{ $quiz[0]->quize_name }}</h3>
                                </div>

                                <form method="post" id="question_form">
                                    @csrf
                                    <div class="card  w-100" id="question_card">
                                        <div class="card-header">

                                            <div class="row" id="question">
                                                <div class="col-md-12">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body pl-4">
                                            <div id="hiddens"></div>
                                            <div class="form-check mt-3" id="answer">

                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex">
                                                <div class="text-left d-flex w-50">
                                                    <strong>
                                                    <span class="card-title custom-font ">Q</span>&nbsp;
                                                    <span class="no card-title custom-font "></span>
                                                    <span class="card-title custom-font ">/</span>
                                                    <span class="card-title custom-font "id="total"></span>

                                                    </strong>
                                                    
                                                    <div class="timer-quick pl-3" data-minutes-left="{{$quiz[0]->time}}"></div>

                                                </div>
                                                <div class="text-right w-50">
                                                    <button type="submit" id="submit"
                                                        class="btn not-allowed" style="background-color: #ed5154;color:#ffff" disabled>Next</button>
                                                </div>
                  
                                            </div>


                                        </div>
                                    </div>


                                </form>
                      
                            </div>

                        </div>
                
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- End Pricing Section -->

<!-- Modal -->
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">


            <div class="headermodal">
                <div class="logo text-center pt-5">
                    <img src="{{ asset('public/assist/images/logo.png') }}" style="height: 30px" alt="">
                </div>
                <div class="quiz_name text-center p-3">
                    <h6>{{ $quiz[0]->quize_name }}</h6>
                </div>
            </div>
            <hr>
            <div class="modal-body p-4">
                <div class="sec1">
                    <h6>Before you begin</h6><br>
                    <p>Each quiz must be completed in one session; make sure you're finished before exiting.</p>
                    <p>if you don't pass, your course  status won't progress and your not eligable to receive course certificate</p>
                </div>
                <div class="sec12 mt-5">
                    <h6>Overview</h6><br>
                    <p><i class="fa fa-clock-o fa-lg"></i>&nbsp;<strong>~ {{$quiz[0]->time}} minutes</strong> duration</p>
                    <p><i class="fa fa-edit fa-lg"></i>&nbsp;<strong>~ 70th precentile</strong> require to pass</p>
                    <input type="hidden" id="quiz_id_first" value="{{$quiz[0]->quize_id}}">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" onclick="window.history.go(-1)" id="submit_button" class="btn btn-default btn-sm"
                    >Cancel</button>
                <button type="button" id="submit_button" class="btn quiz_start btn-sm"
                    style="background-color: #ed5154;color:#ffff">Start</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade " id="SuccessModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="headermodal">
                <div class="logo text-center pt-5">
                    <img src="{{ asset('public/assist/images/logo.png') }}" style="height: 30px" alt="">
                </div>
                <div class="quiz_name text-center p-3">
                    <h6>{{ $quiz[0]->quize_name }}</h6>
                </div>
            </div>
            <hr>
            <div class="modal-body p-4">
                <div class="sec1 text-center">
                    <i class="fa fa-check-circle fa-5x text-success"></i>
                    <h3 class="mb-2">Congratulation !</h3>
                    
                    <h3>Nice work, you passed</h3>
                    <h5>Above 70th precentile</h5>
                    <p><a href="/dashboard">Learn more</a> about how your score calculatad</p>
                </div>
                <div class="sec12 mt-5">
                    <h6 class="mb-1">{{$quiz[0]->quize_name}}</h6>
                    <p><i class="fa fa-edit fa-lg"></i>&nbsp; Passed: Eijad Quiz</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" onclick="window.history.go(-1)" id="submit_button" class="btn btn-default btn-sm"
                    >Go to dashboard</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade " id="FailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="headermodal">
                <div class="logo text-center pt-5">
                    <img src="{{ asset('public/assist/images/logo.png') }}" style="height: 30px" alt="">
                </div>
                <div class="quiz_name text-center p-3">
                    <h6>{{ $quiz[0]->quize_name }}</h6>
                </div>
            </div>
            <hr>
            <div class="modal-body p-4">
                <div class="sec1 text-center">
                    <i class="fa fa-times-circle fa-5x text-danger"></i>
                    <h3 class="mb-2">Failled !</h3>
                    
                    <h3>You didn't pass</h3>
                    <h5>Your score is in the bottom 70%. Score in the top 70% to pass.</h5>
                    <p><a href="#" onclick="window.history.go(-1)">Learn more</a> about how your score calculatad</p>
                </div>
                <div class="sec12 mt-5">
                    <h6 class="mb-1">{{$quiz[0]->quize_name}}</h6>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" onclick="window.history.go(-1)" id="submit_button" class="btn btn-default btn-sm"
                    >Go to dashboard</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade " id="TimerFailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="headermodal">
                <div class="logo text-center pt-5">
                    <img src="{{ asset('public/assist/images/logo.png') }}" style="height: 30px" alt="">
                </div>
                <div class="quiz_name text-center p-3">
                    <h6>{{ $quiz[0]->quize_name }}</h6>
                </div>
            </div>
            <hr>
            <div class="modal-body p-4">
                <div class="sec1 text-center">
                    <i class="fa fa fa-hourglass-o fa-5x text-danger"></i>
                    <h3 class="mb-2 mt-2">Failled !</h3>
                    
                    <h3>You didn't pass</h3>
                    <h5>Your have reached the time limit set for the quiz</h5>
                </div>
       
            </div>
            <div class="modal-footer">
                <button type="button" onclick="window.history.go(0)" id="submit_button" class="btn btn-danger btn-sm"
                    >Retry !</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('jquery')
<script src="{{ asset('public/Simple-Countdown/jquery.simple.timer.js') }}"></script>
<script>
    var number = 1;
    var control = 0;
    var quiz_number = 0;
    var course_id;
</script>

<script>
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function() {
        // load_data(number);
        $('#result_card').css('display', 'none');
        $('#failed_card').css('display', 'none');
        $('#result').css('display', 'none');

        $('#exampleModal').modal({
            backdrop: 'static',
            keyboard: false,
            toggle: true
        });

    });
</script>

<script>
    $('body').on('click', '.quiz_start', function() {
        $.ajax({
            url: "{{ url('dashboard/course/quiz/start/get_question') }}/" +$('#quiz_id_first').val(),
            type: 'get',
            dataType: 'json',
            success: function(data) {
                $('#question_card').css('display', 'block');
                $('#exampleModal').modal('toggle');
                load_data(number);
                time();
            },
            error: function(data) {
            }
        });

      
    });
</script>



<script>
    function time() {
        $('.timer-quick').startTimer({
            onComplete: function() {
                $('#TimerFailModal').modal({
                    backdrop: 'static',
                    keyboard: false,
                    toggle: true
                });
            },
        });
    }
</script>
<script>
    $("#question_form").submit(function(e) {
        
        $('#submit').html('loading...');
        $("#submit").attr('disabled',true);

        e.preventDefault();
        var formData = new FormData(this);
        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': '@php echo csrf_token() @endphp '} });
        $.ajax({
            url: "{{ url('/dashboard/course/quiz/start/submit_question') }}",
            type: 'post',
            data: formData,
            success: function(data) {
                $('#question_form')[0].reset();
                $('#submit').html('Next');
               $("#submit").attr('disabled',false);
                number++;
                if (number <= control) {
                    load_data(number);
                } else {
                    load_result(); 
                }
            },
            error: function(data) {
                console.log('Server Error');
            },
            cache: false,
            contentType: false,
            processData: false
        });
    });


    function load_result(){
        $.ajax({
            url: "{{ url('dashboard/course/quiz/start/complete') }}",
            type: 'get',
            success: function(data) {
            if (!$.trim(data.success)){  
            $('#FailModal').modal({
                backdrop: 'static',
                keyboard: false,
                toggle: true
            });
            $('.timer-quick').trigger('pause');

            }
            if (!$.trim(data.fail)){  
             $('#SuccessModal').modal({
                backdrop: 'static',
                keyboard: false,
                toggle: true
            });
            $('.timer-quick').trigger('pause');
            
            }   
            },
            error: function(data) {
                console.log('Server Error');

            },
        });
    }
</script>

<script>
    function load_data(number) {
        if (number > 0) {
            // AJAX POST request
            $.ajax({
                url: '{{ url("dashboard/course/quiz/start/load_question") }}',
                type: 'get',
                data: {
                    _token: CSRF_TOKEN,
                    number: number,
                    quiz_id:'{{$quiz[0]->quize_id}}'
                },
                dataType: 'json',
                success: function(response) {
                    createForm(response);
                    $('#submit').addClass('not-allowed');
                    $("#submit").attr('disabled',true);
                },
                error: function(error) {
                    console.log('no data received');
                }
            });
        }
    }
</script>

<script>
    $('body').on('change','.form-check-input',function(){
        $('#submit').removeClass('not-allowed');
        $("#submit").attr('disabled',false);
    });

</script>

<script>
    //Create table form
    function createForm(response) {
        var len = 0;
        control = response['n_o_q'];

        if (response['data'] != null) {
            len = response['answers'].length;
            $('#quiz_name').text(response['data'].name);
            course_id = response['data'].course_id;
            $('#total').text(response['n_o_q']);
            $('#question div').empty();
            $('.no').empty();
            $('#answer').empty();
            $('#hiddens').empty();
            quiz_number = response['data'].quiz_no;
            // console.log(len);
        }

        if (len > 0) {
            $('.no').text(number);
            $("#question div").append("<h6>" + response['data'].text + "</h6>");

            if (number == control) {
                $('#hiddens').append("<input type='hidden' name='last' value='1'>");
            }
            for (var i = 0; i < len; i++) {
                $('#answer').append(
                    "<label class='form-check-label'><input type='radio' class='form-check-input' name='answer_id' value='" +
                    response.answers[i].answer_id + "'/>" + response.answers[i].text + "</label><br>"
                );
            }
        } else {
            $('#answer').append("<h3>no question available</h3>");
        }
    }
</script>

@endsection
