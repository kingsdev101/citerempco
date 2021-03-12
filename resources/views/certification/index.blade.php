@extends('layouts.custome')

@section('content')
<div class="applicationform">
    @include('fix.profilesection')
    <div class="applicationform-content">

        <div class="certification">

            <h1>Certification</h1>

            <div class="cetificate-input">  
                <div>
                    <p>This is to certify that <input type="text" class="cinput1"> has a total deduction of <input type="text" class="cinput2">(Please see attached Authorized payroll / payslip for itemized deduction ) and a net take home pay of <input type="text" class="cinput3"> in which sufficient for the payment of his/her monthly loan ammortization.</p>
                </div>
            </div>

            <div class="hisbest">
                his / her best this <input type="date" class="cinput4">
            </div>

            <div class="manager-signature">

                <div>
                    <p>MARCELA M. LAGUMEN</p>
                    <div class="line-manager">
                        Manager
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection

@section('scripts')

@endsection