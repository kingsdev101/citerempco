@extends('layouts.custome')

@section('content')
<div class="applicationform">
    @include('fix.profilesection')
    <div class="applicationform-content">


        <div class="applicationforcredit">
            <h1>Application for Credit Life Insurance Coverage
                of the Land Bank of the Philippines Barrowers</h1>

            <section class="credit-inputs">
                <div class="credit-groups">
                    <div>
                        <p>Loan Value</p>
                        <input type="text" class="form-control">
                    </div>
                    <div>
                        <p>Term Load:</p>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="credit-groups">
                    <div>
                        <p>Date Released:</p>
                        <input type="date" class="form-control">
                    </div>
                    <div>
                        <p>Premium AMT</p>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </section>

            <section class="section crdits-tables">

                
                <p class="personaldata">Personal Data</p>
                <div class="groups-table">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <td>Given Name</td>
                                <td>Middle Name</td>
                                <td>Family Name</td>
                            </tr>
                        </thead>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                    
                    <div class="groups-table-wraps">
                        <table class="table table-bordered table-hover mr-2 tbdateofbirth">
                            <thead class="thead-dark">
                                <tr>
                                    <td>Date of Birth</td>
                                </tr>
                            </thead>
                            <tr>
                                <td><input type="date" class="form-control"></td>
                            </tr>
                        </table>
                        <table class="table table-bordered table-hover ml-2">
                            <thead class="thead-dark">
                                <tr>
                                    <td>Place of Birth</td>
                                </tr>
                            </thead>
                            <tr>
                                <td></td>
                            </tr>
                        </table>
                        
                    </div>
                    
                    <div class="groups-table-wraps">
                        <table class="table table-bordered table-hover tbadress">
                            <thead class="thead-dark">
                                <tr>
                                    <td>Home Address</td>
                                </tr>
                            </thead>
                            <tr>
                                <td></td>
                            </tr>
                        </table>
                        <table class="table table-bordered table-hover mx-3">
                            <thead class="thead-dark">
                                <tr>
                                    <td>City</td>
                                </tr>
                            </thead>
                            <tr>
                                <td></td>
                            </tr>
                        </table>
                        <table class="table table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <td>State</td>
                                </tr>
                            </thead>
                            <tr>
                                <td></td>
                            </tr>
                        </table>
                        
                    </div>
                    <div class="groups-table-wraps">
                        <table class="table table-bordered table-hover tbadress">
                            <thead class="thead-dark">
                                <tr>
                                    <td>Office Address</td>
                                </tr>
                            </thead>
                            <tr>
                                <td></td>
                            </tr>
                        </table>
                        <table class="table table-bordered table-hover mx-3">
                            <thead class="thead-dark">
                                <tr>
                                    <td>City</td>
                                </tr>
                            </thead>
                            <tr>
                                <td></td>
                            </tr>
                        </table>
                        <table class="table table-bordered table-hover ">
                            <thead class="thead-dark">
                                <tr>
                                    <td>State</td>
                                </tr>
                            </thead>
                            <tr>
                                <td></td>
                            </tr>
                        </table>
                        
                    </div>
                </div>
                
            </section>
            <section class="last-table">
                
                <p class="personaldata">Name of Beneficiaries</p>

                <div class="groups-table">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <td>Given Name</td>
                                <td>Middle Name</td>
                                <td>Family Name</td>
                            </tr>
                        </thead>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </section>


            <section class="credit-text-section">

                <p class="healthdeclaire"> Health Declaration</p>


                <p> I hereby warranty that on the date of release of my loan, I posses sound health, and am
                    Able to perform the normal activities in the pursuit of my livelihood. </p>

                    <p>Issued and signed at<input type="text" class="form-control">this
                        <input type="date" class="form-control">
                    </p>
            </section>

            <section class="credit-signature">
                <div class="creditname">
                    <p>Witnessed and Issue by:</p>
                    <div>
                        <div class="witness">MARCELA M. LAGUMEN</div>
                        <div class="line-signature"></div>
                    </div>
                </div>
            </section>

            <section class="applicant-signature">
                <div class="applicant-sig">
                    <p>Applicant Signature</p>
                </div>
            </section>


        </div>


    </div>
</div>
@endsection