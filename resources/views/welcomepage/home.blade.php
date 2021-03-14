@extends('layouts.custome')

@section('content')

<div class="home">
    <!-- 
|---------------------------------------------
| image
|--------------------------------------------- -->
    <div class="home-image-wrapper">
    
        <form method="POST" action="{{ route('register') }}">
            @csrf
        
        
            <h2> Apply For Loan Now</h2>


                                <input id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" placeholder="Fullname" autocomplete="name" autofocus>

                                @error('fullname')
                                         <strong>{{ $message }}</strong>
                                 @enderror

                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="Username" autocomplete="username">

                                @error('username')
                                        <strong>{{ $message }}</strong>
                                 @enderror

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-mail" autocomplete="email">

                                @error('email')
                                         <strong>{{ $message }}</strong>
                                 @enderror



                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password" autocomplete="new-password">

                            @error('password')
                                            <strong>{{ $message }}</strong>
                                    
                            
                                @enderror
                                
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password" autocomplete="new-password">
                            @if(Auth::check())
                                <button type="button" class="btn btn-default logoutfirst">
                                        register
                                </button>
                            @else

                                <button type="submit" class="btn btn-default">
                                    Register
                                </button>
           
                            @endif
    </form>
</div>

<div class="home-content">
    <!-- 
|---------------------------------------------
| step
|--------------------------------------------- 
-->
    <div class="step row">



        <div class="box col-lg-4">
            <div class="image">
            <img src="{{asset('img/user.png')}}" alt="">
            </div>
            <div class="step-wrapper">
                <h3>Step 1</h3>
                <span>Application Form</span>
            </div>
            <p>
                you need to fill out
                all the requirements need
                for to proceed to step 2
            </p>
        </div>


        <div class="box col-lg-4">
            <div class="image">
            <img src="{{asset('img/user.png')}}" alt="">
            </div>
            <div class="step-wrapper">
                <h3>Step 2</h3>
                <span>Emergency Loan Application / Agreement</span>
            </div>
            <p>
                filling the needed form
                Purpose of loan/ Application Of Ads.
                Deeds of assesment with special power
                of attorney./promisory note.

            </p>
        </div>


        <div class="box col-lg-4">
            <div class="image">
            <img src="{{asset('img/user.png')}}" alt="">
            </div>
            <div class="step-wrapper">
                <h3>Step 3</h3>
                <span>Agreement Form</span>
            </div>  
            <p>
                In this Process fill out the
                Loan Apllication Agreement and
                Appliance Loan Applicaiton Agreement.
            </p>
        </div>
    </div>


    <!-- 
|---------------------------------------------
| our-success-loaner
|--------------------------------------------- 
-->
    <div class="our-success-loaner">

        <div class="box">
            <div class="box-image">
            <img src="{{asset('img/user.png')}}" alt="">

            </div>
            <span>Ashly Rose Mariñas</span>
            <p>
                All loans, in the eyes of honest borrowers, must eventually be repaid. All credit is debt. Proposals
                for
                an increased volume of credit, therefore, are merely another name for proposals for an increased
                burden
                of debt. They would seem considerably less inviting if they were habitually referred to by the
                second
                name instead of by the first.
            </p>
        </div>

        <div class="box">
            <div class="box-image">
            <img src="{{asset('img/user.png')}}" alt="">

            </div>
            <span>John Ross Mariñas</span>
            <p>
                All loans, in the eyes of honest borrowers, must eventually be repaid. All credit is debt. Proposals
                for
                an increased volume of credit, therefore, are merely another name for proposals for an increased
                burden
                of debt. They would seem considerably less inviting if they were habitually referred to by the
                second
                name instead of by the first.
            </p>
        </div>

        <div class="box">
            <div class="box-image">
            <img src="{{asset('img/user.png')}}" alt="">

            </div>
            <span>Ashly Rose Mariñas</span>
            <p>
                All loans, in the eyes of honest borrowers, must eventually be repaid. All credit is debt. Proposals
                for
                an increased volume of credit, therefore, are merely another name for proposals for an increased
                burden
                of debt. They would seem considerably less inviting if they were habitually referred to by the
                second
                name instead of by the first.
            </p>
        </div>
    </div>
    <!-- 
|---------------------------------------------
| contact form
|--------------------------------------------- 
-->

    <div class="contact-form">
        <p class="fp">If you haven’t been able to register or you are experiencing trouble with our site,
            fill out the form below to contact our Customer Service Department.
        </p>


        <div class="div-wrapper row">
            <!-- 
|---------------------------------------------
| box 1
|--------------------------------------------- 
-->
            <div class="contact-icons col-lg-6 col-sm-12 ">
                <div class="holder ">
                    <div class="img-wrap"><i class="fas fa-phone-alt"></i></div>
                    <div class="info-wrap">
                        <p>Phone</p>
                        <span>09265845623</span>
                    </div>
                </div>
                <div class="holder">
                    <div class="img-wrap"><i class="fab fa-facebook-f"></i></div>
                    <div class="info-wrap">
                        <p>Facebook</p>
                        <span>www.facebook.com/citermpcopage</span>
                    </div>
                </div>



                <div class="holder">
                    <div class="img-wrap"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="info-wrap">
                        <p>Location</p>
                        <span>National Highway, Kalawag II (1.25 mi)
                            Isulan, Sultan Kudarat, Philippines 9805</span>
                    </div>
                </div>
                <div class="holder">
                    <div class="img-wrap"><i class="fas fa-envelope"></i></div>
                    <div class="info-wrap">
                        <p>E-Mail
                        </p>
                        <span>CITEREMPCO@gamil.com</span>
                    </div>
                </div>
                <div class="holder">
                    <div class="img-wrap"><i class="fab fa-twitter"></i></div>
                    <div class="info-wrap">
                        <p>Twitter</p>
                        <span>www.Twitter.com /Citeremco.com</span>
                    </div>
                </div>

            </div>
            <!-- 
|---------------------------------------------
| box 2 
|--------------------------------------------- 
-->
            <div class="contact-submit-form col-lg-6 col-sm-12">
                <form action="">
                    <input type="text" class="form-control" placeholder="Name" name="name">
                    <input type="text" class="form-control" placeholder="E-mail" name="username">
                    <input type="text" class="form-control" placeholder="Contact Number/Optional" name="contactnumber">
                    <textarea name="" id="" cols="30" rows="10">Message/Inquiries
                        </textarea>


                    <button type="submit"> Submit</button>

                </form>
            </div>


        </div>
    </div>



    <!-- 
|---------------------------------------------
| end container and content div
|--------------------------------------------- 
-->

</div>
</div>
@endsection

@if(Auth::check())
<script>
window.onload =function(){

    const logf = document.querySelector(".logoutfirst");

    logf.addEventListener("click",function(){
        swal ( "Logout First" ,  "You cannot apply loan on the same acount please logout first and register again" ,  "error" )
    }       
);

}
</script>
@endif