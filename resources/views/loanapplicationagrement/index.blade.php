@extends('layouts.custome')

@section('content')
<div class="applicationform">
    @include('fix.profilesection')
    <div class="applicationform-content">

        <div class="loanapplicationagreement">

            <div class="loan-agreementform-wrapper">

                <form action="{{route('citerempco.loanagreement.apply')}}" method="POST">
                @csrf
                    <h1>Loan Application Agreement</h1>

                    <div class="loan-agreement-holder">


                        <div class="loan-section1">
                            <p>Please Click The Circle:</p>
                            <div class="loan-boxes1">
                                <div class="loan-box">
                                    <label for="clothing">
                                        <div class="lbl">Clothing</div>
                                        <div><input type="radio" name="selectcircle" id="clothing"></div>

                                    </label>
                                </div>
                                <div class="loan-box">
                                    <label for="midyearbonus">
                                        <div class="lbl">Mid year Bonus:</div>
                                        <div><input type="radio" name="selectcircle" id="midyearbonus"></div>

                                    </label>
                                </div>
                                <div class="loan-box">
                                    <label for="yearendbunos">
                                        <div class="lbl">Year End Bonus:</div>
                                        <div><input type="radio" name="selectcircle" id="yearendbunos"></div>

                                    </label>
                                </div>
                                <div class="loan-box">
                                    <label for="others">
                                        <div class="lbl">Others:</div>
                                        <div><input type="text" name="others" id="others"></div>

                                    </label>
                                </div>
                            </div>
                            <div class="loan-boxes2">
                                <div class="loan-box">

                                    <p>Date:</p>
                                    <div>
                                        <input type="date" name="date">
                                    </div>

                                </div>
                                <div class="loan-box">

                                    <p>Telephone No:</p>
                                    <div>
                                        <input type="text" name="telephone">
                                    </div>
                                    <div>
                                        <select name="mobile" id="">
                                            <option value="">mobile </option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="loan-section2">
                            <p class="loanap">Applicant</p>

                            <div class="loan-boxes1">
                                <div class="loan-box">
                                    <p>First Name:</p>
                                    <div><input type="text" name="applicant[firstname]"></div>
                                </div>
                                <div class="loan-box mx-1">
                                    <p>Middle Name:</p>
                                    <p><input type="text" name="applicant[middlename]"></p>
                                </div>
                                <div class="loan-box mr-1">
                                    <p>Family Name:</p>
                                    <div><input type="text" name="applicant[familyname]"></div>
                                </div>
                                <div class="loan-box flex flex items-end">
                                    <p class="pr-2">Date:</p>
                                    <div class="loan-a-date "><input type="date" name="applicant[date]"></div>
                                </div>

                            </div>

                            <div class="loan-boxes3">
                                <div class="loan-box ">
                                    <p>School Address: </p>
                                    <div class="l3b1">
                                        <div class="loan3-address">

                                            <input type="text" placeholder="Address" name="applicant[scholladdress]">
                                        </div>
                                        <div class="loan3-city ml-1"><input type="text" placeholder="City" name="applicant[city]"></div>
                                        <div class="loan3-select ml-1"><select name="applicant[state]" id="">
                                                <option value="">State</option>
                                                <option value="">State</option>
                                            </select></div>
                                    </div>
                                </div>
                                <div class="loan-box">
                                    <p>Application No.:</p>
                                    <div><input type="text" name="applicant[applicantnumber]"></div>
                                </div>
                            </div>

                            <div class="loan-boxes4">
                                <div class="loan-box">
                                    <p>Present Possition:</p>
                                    <div class="loan4-address"><input type="text" placeholder="Address" name="applicant[presentposition]"></div>
                                </div>
                                <div class="loan-box ml-1">
                                    <p>Net Take Home Pay:</p>
                                    <div class="loan4-nethome"><input type="text" name="applicant[nettakehomepay]"></div>
                                </div>
                            </div>

                            <div class="loan-boxes5">
                                <div class="loan-box">
                                    <p>Co- Maker: Name of Spouse:</p>
                                    <div class="loan5-spouse">
                                        <div><input type="text" placeholder="First Name" name="co[spouse][firstname]"></div>
                                        <div class="mx-1"><input type="text" placeholder="Middle Name" name="co[spouse][middlename]"></div>
                                        <div><input type="text" placeholder="Family Name" name="co[spouse][familyname]"></div>
                                    </div>
                                </div>

                                <div class="loan-box">
                                    <p>Amount of Loan Granted:</p>
                                    <div class="l5-amountgranted">
                                        <input type="text" name="co[spouse][amountloangranted]">
                                    </div>
                                </div>


                            </div>
                        </div>


                        <div class="iloan-a-section">
                            <p>I <input type="text" class="l-a-in-name" placeholder="Name" name="applicant[paragrap][firstname]"> .loanapplicationagreement
                                .loan-boxes5 .loan-box
                                .loan5-spouse CENTRAL ISULAN TEACHERS, EMPLOYEE AND RETIREES MULTI - PURPOSE COOPERATIVE
                                (CITEREMPCO) hereby apply for the Emergency Loan in the amount of <input type="text"
                                    class="l-a-in" placeholder="Amount" name="applicant[paragrap][amount]"> <input type="text" class="l-a-amount"
                                    placeholder="Php" name="applicant[paragrap][php]"> I agree to abide and comply with the terms and condition sets
                                forth
                                below. Pay the monthly interest of three (3%) and pay for only for six
                            </p>

                            <p>I hereby pledge to: <span> value</span></p>

                            <p> Pay the monthly interest of three (3%) and pay for only for six (6) months, in
                                installment
                                or in full, hereby to pay to the CITEREMPCO Treasurer.
                            </p>
                            <p>In witness whereof i here unto affix my signature this <input class="l-in-date"
                                    type="date" name="applicant[paragrap][date]">
                            </p>
                        </div>

                        <div class="l-applicant-borrower">
                            <div class="l-br-wrap">
                                <div><input type="text" name="signature[applicantborrower]"></div>
                                <div>Applicant / Barrower</div>
                            </div>
                        </div>
                        <div class="l-applicant-borrower">
                            <div class="l-br-wrap">
                                <div><input type="text" name="signature[nameofspouse]"></div>
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