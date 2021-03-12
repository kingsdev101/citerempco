@extends('layouts.custome')

@section('content')
<div class="applicationform">
    @include('fix.profilesection')

    <!-- complete content-->

    <div class="applicationform-content">
        <main class="complete-content">

            <h2>Loan Application</h2>
            <section class="applicant-section">
                <aside>
                    <div class="groups">
                        <div class="groups-details">
                            <div>
                                <p>Applicant:</p><span>Brian Orbino</span>
                            </div>
                            <div>
                                <p>Age:</p><span> 21</span>
                            </div>
                            <div>
                                <p>Office Address:</p><span> Kalawag II salem st tagumapay</span>
                            </div>
                            <div>
                                <p>City/Province:</p><span> Sultab Kudarat</span>
                            </div>
                            <div>
                                <p>State:</p><span> Philippines</span>
                            </div>
                        </div>
                        <div class="groups-details">
                            <div>
                                <p>Spouse:</p><span> Kristine Turel</span>
                            </div>
                            <div>
                                <p>Age:</p><span> 22</span>
                            </div>
                            <div>
                                <p>Occupation:</p><span> House and teacher</span>
                            </div>
                        </div>


                    </div>
                    <div class="groups">
                        <div class="groups-details">
                            <div>
                                <p>Application for:</p><span>Business Loan</span>
                            </div>
                            <div>
                                <p>Loan:</p><span> Renewal</span>
                            </div>
                            <div>
                                <p>Type of loan</p><span> Loang </span>
                            </div>
                        </div>
                        <div class="groups-details">
                            <div>
                                <p>Date Applied:</p><span> 10/03/2022</span>
                            </div>
                            <div>
                                <p>Saving Deposit:</p><span> 15,000</span>
                            </div>
                            <div>
                                <p>Capital Build Up:</p><span> 10,000</span>
                            </div>
                            <div>
                                <p>Amount:</p><span> 11,000</span>
                            </div>
                            <div>
                                <p>Amount Applied:</p><span> 17,000</span>
                            </div>



                        </div>
                    </div>

                </aside>
                <aside>

                    <div class="groups">

                        <div class="ihere">
                            <p>I hereby apply for a loan: <span> value here </span> </p>
                            <p>Period of: <span> 30 days </span> days at the rate of 1.25% per month.</p>
                            <p>Puropose of loan: <span> For building a business</span></p>
                        </div>
                    </div>

                    <aside>


            </section>
            <div class="details-table">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Source of Income</th>
                            <th>Gross Income</th>
                            <th>Monthly Expenses</th>
                            <th>Net Income</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>10,000</td>
                        <td>4,000</td>
                        <td>500</td>
                        <td>200</td>
                    </tr>
                    <tr>
                        <td>10,000</td>
                        <td>4,000</td>
                        <td>500</td>
                        <td>200</td>
                    </tr>
                    <tr>
                        <td>Source of Income</td>
                        <td>Gross Income</td>
                        <td>Monthly Expenses</td>
                        <td>Net Income</td>
                    </tr>
                </table>
            </div>

            <div class="section2-details">
                <p>
                    I hereby authorize the CITEREMPCO to obtain such other information as may be required in the
                    connection with the application.</p>
                <p>
                    I am aware that the use of the proceeds of this loan purpose other than those indicated herein is
                    unlawful. That the statements declared above are true and correct to the best of my knowledge. I
                    also agree that should there be any misinterpretation discovered, CITEREMPCO may cause the outright
                    disapproval of this loan application and if the loan has already been granted, CITEREMPCO, may
                    immediately declare the loan due and demandable.
                </p>
            </div>

            <div class="details-printedname-signature">
                <div id="name_signature1">BriaN Orbino L</div>
                <div class="printedname">Printed Name & Signature of Applicant</div>
            </div>
            <div class="details-printedname-signature">
                <div id="name_signature2">BriaN Orbino L</div>
                <div class="printedname">Printed Name & Signature of Applicant</div>
            </div>

            <div class="full-details">
                <p?>


                    For value received, I promised to pay the CENTRAL ISULAN TEACHERS, EMPLOYEES AND RETIREES MULTI -
                    PURPOSE COOPERATIVE or order the bag of <span class="details-bag"></span>
                    pesos <span class="details-bag"></span> payable in <span class="details-bag"></span> installment of
                    pesos <span class="details-bag"></span> monthly until the full amount has been paid.</p>
                    <p>
                        In case dafault in payments as here in agreed, the entire balance of this note shall become
                        immediately
                        due to the payable at the option of the cooperative
                    </p>
            </div>

            <div class="signature-of-borrower">
                <div class="wrapper-signature">
                    <div>Kristine Turuel</div>
                    <div class="signature-of-borrower-tex">Signature of the Borrower</div>
                </div>
            </div>

            <div class="final-signature-section">

                <div class="prepaire-checked-section">
                    <div class="approve-wraps">
                        <p>Prepared By:</p>
                        <div class="wrapname">
                            <div>ARCELY B. PILVERA</div>
                            <div class="linesignature">Loan officer</div>
                        </div>

                    </div>
                    <div class="approve-wraps">
                        <p>Checked By:</p>
                        <div class="wrapname">
                            <div>EVELYN L. PERALTA</div>
                            <div class="linesignature">Bookeeper</div>
                        </div>

                    </div>

                </div>
                <div class="prepaire-checked-section recommended-approval-text">
                    <div class="approve-wraps">
                        <p>Recommending Approval:</p>

                    </div>
                    <div class="approve-wraps">


                    </div>
                </div>
                <div class="prepaire-checked-section">
                    <div class="approve-wraps">
                        <div class="wrapname">
                            <div>MARCELA M. LAGUMEN</div>
                            <div class="linesignature">Manager</div>
                        </div>

                    </div>
                    <div class="approve-wraps">
                        <p>Approve by</p>
                        <div class="wrapname">
                            <div>ERIC R. BALANCIO</div>
                            <div class="linesignature">BDO Chairman</div>
                        </div>

                    </div>

                </div>

            </div>




        </main>



    </div>



















</div>
@endsection