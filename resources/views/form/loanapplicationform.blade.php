<div class="loanapplication text-lg ">
    <div class="form-outside">

        <form action="{{route('citerempco.loanappllication.store')}}" method="POST">
            @csrf
            <h2 class="text-center text-2xl">Loan Application</h2>
            <div class="holder page-slide" id="holder">



                @include('form.step1')
                @include('form.step2')
                @include('form.step3')
                @include('form.step4')



            </div>
        </form>
    </div>
</div>
<script src="{{asset('js/loanapplication.js')}}"> </script>
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