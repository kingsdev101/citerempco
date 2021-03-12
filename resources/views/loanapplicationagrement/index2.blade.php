@extends('layouts.custome')

@section('content')
<div class="applicationform">
    @include('fix.profilesection')
    <div class="applicationform-content">

        <div class="loanapplicationagreement">

            <div class="loan-agreementform-wrapper">

                <form action="">
                    <h1>Loan Application Agreement</h1>

                    <div class="loan-agreement-holder">

                        <div class="loan-n2-section1">
                            <p class="n2-ap">Applicant</p>
                            <div class="n2-group">

                                <div class="n2-boxes">
                                    <div class="n2-box n2-box-n1">
                                        <div class="n2-b">
                                            <p>First Name:</p>
                                            <div><input type="text" placeholder="First Name"></div>
                                        </div>
                                        <div class="n2-b">
                                            <p>Middle Name:</p>
                                            <div><input type="text" placeholder="Middle Name"></div>
                                        </div>
                                        <div class="n2-b">
                                            <p>Family Name:</p>
                                            <div><input type="text" placeholder="Family Name"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="n2-boxes">
                                    <div class="n2-box n2-box-n2">
                                        <div class="n2-b ndate">
                                            <p>Date:</p>
                                            <div><input type="date"></div>
                                        </div>
                                        <div class="n2-b">
                                            <p>Application No:</p>
                                            <div><input type="text"></div>
                                        </div>
                                        <div class="n2-b">
                                            <p>Net Take Home Pay:</p>
                                            <div><input type="text"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="loan-boxes3">
                                <div class="loan-box ">
                                    <p>School Address: </p>
                                    <div class="l3b1">
                                        <div class="loan3-address">

                                            <input type="text" placeholder="Address">
                                        </div>
                                        <div class="loan3-city ml-1"><input type="text" placeholder="City"></div>
                                        <div class="loan3-select ml-1"><select name="" id="">
                                                <option value="">State</option>
                                                <option value="">State</option>
                                            </select></div>
                                    </div>
                                </div>
                                <div class="loan-box">
                                    <p>Application No:</p>
                                    <div><input type="text"></div>
                                </div>
                            </div>
                        </div>



                        <div class="iloan-a-section">
                            <p>I <input type="text" class="l-a-in-name" placeholder="Name"> .loanapplicationagreement
                                .loan-boxes5 .loan-box
                                .loan5-spouse CENTRAL ISULAN TEACHERS, EMPLOYEE AND RETIREES MULTI - PURPOSE COOPERATIVE
                                (CITEREMPCO) hereby apply for the Emergency Loan in the amount of <input type="text"
                                    class="l-a-in" placeholder="Amount"> <input type="text" class="l-a-amount"
                                    placeholder="Php"> I agree to abide and comply with the terms and condition sets
                                forth
                                below. Pay the monthly interest of three (3%) and pay for only for six
                            </p>

                            <p>I hereby pledge to: <span> value</span></p>

                            <p> Pay the monthly interest of three (3%) and pay for only for six (6) months, in
                                installment
                                or in full, hereby to pay to the CITEREMPCO Treasurer.
                            </p>
                            <p>In witness whereof i here unto affix my signature this <input class="l-in-date"
                                    type="date">
                            </p>
                        </div>

                        <div class="l-applicant-borrower">
                            <div class="l-br-wrap">
                                <div><input type="text"></div>
                                <div>Applicant / Barrower</div>
                            </div>
                        </div>
                        <div class="l-applicant-borrower">
                            <div class="l-br-wrap">
                                <div><input type="text"></div>
                                <div>Name of the Spouse</div>
                            </div>
                        </div>

                        <div class="lsignature-areas">

                            <div class="sig-boxes">
                                <p>Recommending Approval:</p>
                                <div class="sig-box">
                                    <div>MARCELA M. LAGUMEN</div>
                                    <div class="sigline">Manager</div>
                                </div>
                            </div>
                            <div class="sig-boxes">
                                <p>Approved By:</p>
                                <div class="sig-box">
                                    <div>MARCELA M. LAGUMEN</div>
                                    <div class="sigline">BDO Chairman </div>
                                </div>
                            </div>
                        </div>
                        <div class="lsignature-areas">

                            <div class="sig-boxes">

                                <div class="sig-box">
                                    <div>Disbursing officer:</div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="sig-boxes">
                                <p></p>
                                <div class="sig-box">
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                        </div>

                        <div class="ltreasure">
                            <div class="trboxes">
                                <div>CORAZON G. NALANG</div>
                                <div class="trline"> Treasurer</div>
                            </div>
                        </div>
                        <div class="btn-submit">
                            <button type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>




    </div>
</div>
@endsection