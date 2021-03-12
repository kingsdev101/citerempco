@extends('layouts.custome')

@section('content')
<div class="applicationform">
    @include('fix.profilesection')
    <div class="applicationform-content">

        <div class="creditlifeinsurance">
            <div class="life-form-wrapper">
                <form action="{{route('citerempco.creditlifeinsurancestore.index')}}" method="post">
                @csrf
                    <div class="insureancelogo-title">
                        <div class="philam-life-image">
                            <img src="{{asset('storage/project_mages/no-image-icon-23485.png')}}" alt="logo">
                        </div>
                        <div class="h1-text">
                            <h1>Credit Life Insurance Small amount Questionaire</h1>
                        </div>
                    </div>
                    <!-- |---------------------------------------------
| holder
|---------------------------------------------   -->
                    <div id="insurance-step-holder" class="insurance-step-holder">

                        <!--
|---------------------------------------------
| step 1
|---------------------------------------------   
-->


                        @include('creditlifeinsurance.step1')

                        <!-- 
|---------------------------------------------
| step 2
|---------------------------------------------   
-->

                        @include('creditlifeinsurance.step2')

                        <!-- 
     |---------------------------------------------
     | step 3
     |---------------------------------------------   
 -->

                        @include('creditlifeinsurance.step3')

                        <!-- 
     |---------------------------------------------
     | step 4
     |---------------------------------------------   
 -->


                        @include('creditlifeinsurance.step4')




                    </div>


            </div>
            </form>
        </div>
        <!--
|---------------------------------------------
| end of form container ^
|---------------------------------------------   
-->


    </div>
</div>
</div>

<script>

const insurance_step_holder = document.querySelector(".insurance-step-holder");
const lnextbtn1 = document.querySelector(".lnextbtn1");
const lnextbtn2 = document.querySelector(".lnextbtn2");
const lnextbtn3 = document.querySelector(".lnextbtn3");

const lprevbtn1 = document.querySelector(".lprevbtn1");
const lprevbtn2 = document.querySelector(".lprevbtn2");
const lprevbtn3 = document.querySelector(".lprevbtn3");
const lsubmitbtn1 = document.querySelector(".lsubmitbtn1");

lnextbtn1.addEventListener("click", function() {
    insurance_step_holder.style.marginLeft = "-100%";

});
lnextbtn2.addEventListener("click", function() {
    insurance_step_holder.style.marginLeft = "-200%";
});
lnextbtn3.addEventListener("click", function() {
    insurance_step_holder.style.marginLeft = "-300%";
});


lprevbtn1.addEventListener("click", function() {
    insurance_step_holder.style.marginLeft = "0";
});
lprevbtn2.addEventListener("click", function() {
    insurance_step_holder.style.marginLeft = "-100%";
});
lprevbtn3.addEventListener("click", function() {
    insurance_step_holder.style.marginLeft = "-200%";
});


</script>
@endsection
@section('scripts')
<script>
$(document).ready(function(){
    swal("Friendly Reminders", "Make sure to fill in all fields before submitting your information for proper registration", "info",{
        button:{
            text:"Let's Go"
        }
    })
});
</script>
@endsection