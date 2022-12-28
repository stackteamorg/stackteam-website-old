<div class="fancy-short-banner-five pt-150 pb-150 md-pt-100 md-pb-100">
    <div class="container">
        <div class="title-style-five text-center">
            <h2>  {{ __('conversation.content.title') }} </h2>
        </div>
        <div class="row">
            <div class="col-xl-7 col-lg-8 col-md-9 m-auto">
                <p class="font-rubik sub-heading"> {{ __('conversation.content.text') }} </p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-7 col-lg-8 col-md-10 m-auto">
                <form>
                    <input type="tel" name="phonenumber" class="phonenumber" id="phonenumber-bottom" placeholder="+98 912 018 62 23">
                    <button pos="bottom" class="send"> {{ __('conversation.content.valuesubmit') }} </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
$(document).ready(function(){
    $('.send').click(function (e){
        e.preventDefault();
        var phonenumber = $("#phonenumber-" + $(this).attr('pos')).val();
        console.log(phonenumber);
        $.ajax({
            url:"/api/consultation/store",
            data: { 'phone_number' : phonenumber },
            method: "POST",
            success: function(data){
                $('.message').html(data.result);
            }
        });
    });
});
</script>