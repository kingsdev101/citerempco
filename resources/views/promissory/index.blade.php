@extends('layouts.custome')

@section('content')
<div class="applicationform">
    @include('fix.profilesection')
    <div class="applicationform-content">
        <div class="promissory">
            <h1>Promissory Note</h1>

            <section class="member-details">
                <div class="member">
                    <div class="membername">John Ross Mariñas</div>
                    <div class="memberline">Member</div>
                </div>
                <div class="wraps-prom-groups">
                <div class="promiinputs">
                
                    <div class="prom-groups">
                        <p>Amount of Loan:</p>
                        <div>
                            <input type="text" class="form-control" placeholder="Amount Loan">
                        </div>
                    </div>
                    <div class="prom-groups">
                        <p>Date Released: </p>
                        <div>
                            <input type="date" class="form-control">
                        </div>
                    </div>
                </div>
                </div>
                <div class="wraps-prom-groups">
                <div class="promiinputs">
                    <div class="prom-groups">
                        <p>Due Date:</p>
                        <div>
                            <input type="date" class="form-control" placeholder="Due Date">
                        </div>
                    </div>
                    <div class="prom-groups">
                        <p>Phone Number: </p>
                        <div class="promphonenumber">
                            <input type="text" class="form-control">
                            <select name="" id="">
                                <option value="">Mobile</option>
                                <option value="">Email</option>
                            </select>
                        </div>
                    </div>
                </div>
                </div>
            </section>

            <div class="prom-text">
                <p> One thousand eighty (1,080 ) days for the value received , I/We jointly and severally Promise to pay
                    the order of the Central Isulan Teaachers, Employees and Retirees Multi Purpose Cooperative
                    (CITEREMPCO) the sum of <input type="text" class="form-control" placeholder="Amount"> <input type="text" class="form-control phpinput" placeholder="Php"> representing the Livelihood Loan granted by the cooperative subject to term and conditions. We aknowledge to have read clearly and understood . 
                </p>
                <p>We also promise to pay the said loan According to the following schedule.</p>
            </div>

            <div class="prom-table">
            <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <td>Date</td>
                            <td>OR No.</td>
                            <td>Principal</td>
                            <td>Interest</td>
                            <td>Total</td>
                            <td>Date Paid</td>
                            <td>Balance</td>
                        </tr>
                    </thead>
                    <tr>
                        <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                        <td></td>
                       <td></td>
                       <td></td>
                   </tr>
                    <tr>
                       <td></td>
                        <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                        <td></td>
                       <td></td>
                   </tr>
                    <tr>
                        <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                        <td></td>
                       <td></td>
                       <td></td>

                   </tr>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection