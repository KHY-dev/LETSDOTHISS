@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col">
            <div class="card bg-dark text-white">
                <div id="title" class="card-header">Scenario</div>

                <div class="card-body">
                    <p class="scene_text">안녕하세요.</p>
                    <input type="text" readonly class="user_text_output"></input>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <input id="user_text_input" type="text" class="form-control">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    strArray = ['반갑습니다.', '그렇습니까.', '다행입니다.' ,'좋은 하루 보내시길 바랍니다.'];

    $(document).on('change', '#user_text_input', function() {
        $('.user_text_output').val($('#user_text_input').val());
        setTimeout(function(){
            ans = strArray[Math.floor(Math.random() * strArray.length)];
            $('.scene_text').text(ans);
        }, 400);
    });

</script>
@endsection
