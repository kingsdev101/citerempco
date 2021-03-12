@extends('layouts.custome')

@section('content')
<div class="applicationform">
    @include('fix.profilesection')
    <div class="applicationform-content">

        <div class="applicationforadds">

            <div class="ap-form-wrapper">
                <form action="">

                    <h1>Application for Accident and Dismerment
                        Security Scheme</h1>
                    <div class="apform-holder">

                        @include('appforadds.step1')
                        @include('appforadds.step2')

                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
<script>
const apform= document.querySelector(".applicationforadds");
const ap_form_holder = document.querySelector(".apform-holder");
const astep2 = document.querySelector(".astep2-wrapper");

const apnextbtn1 = document.querySelector(".apnextbtn1");

const apprevbtn1 = document.querySelector(".apprevbtn1");


apnextbtn1.addEventListener("click", function() {
    ap_form_holder.style.marginLeft = "-100%";
    apform.style.height = "100%";
    astep2.style.opacity = 1;
});



apprevbtn1.addEventListener("click", function() {
    ap_form_holder.style.marginLeft = "0";
    apform.style.height = "700px";
    astep2.style.opacity = 0;
});


</script>
@endsection