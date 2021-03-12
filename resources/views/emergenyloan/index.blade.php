@extends('layouts.custome')

@section('content')
<div class="applicationform">
    @include('fix.profilesection')
    <div class="applicationform-content">

        <div class="emergencyloan">
            <div class="ebundel">

                <div class="eform-wrapper">
                    <form action="">
                        <h1>Emergency Loan Application / Agreement</h1>
                        <div class="eholder" id="eholder">
                            
                                @include('emergenyloan.step1')
                                @include('emergenyloan.step2')
                                @include('emergenyloan.step3')

                                
                        </div>
        
        
                    </form>
                </div>
            </div>
        
        </div>



    </div>
</div>
</div>

<script>
const eform= document.querySelector(".eform-wrapper");
const emergency_step_holder = document.querySelector(".eholder");
const enextbtn1 = document.querySelector(".enextbtn1");
const enextbtn2 = document.querySelector(".enextbtn2");

const eprevbtn1 = document.querySelector(".eprevbtn1");
const eprevbtn2 = document.querySelector(".eprevbtn2");



enextbtn1.addEventListener("click", function() {
    emergency_step_holder.style.marginLeft = "-100%";
    eform.style.height = "650px";
});
enextbtn2.addEventListener("click", function() {
    emergency_step_holder.style.marginLeft = "-200%";
    eform.style.height = "100%";
});


eprevbtn1.addEventListener("click", function() {
    emergency_step_holder.style.marginLeft = "0";
    eform.style.height = "600px";
});
eprevbtn2.addEventListener("click", function() {
    emergency_step_holder.style.marginLeft = "-100%";
    eform.style.height = "650px";
});


</script>
@endsection