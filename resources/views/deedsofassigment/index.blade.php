@extends('layouts.custome')

@section('content')
<div class="applicationform">
    @include('fix.profilesection')
    <div class="applicationform-content">

        <div class="deedofassigment">

            <section class="uppersection">
                <div class="pco-img">
                    <img src="{{asset('img/king.ico')}}" alt="cierepmcolog">
                </div>

                <div class="upper-text">
                    <p class="central">
                        CENTRAL ISULAN TEACHERS, EMPLOYEE AND RETIREES MULTI - PUPOSE COOPERATIVE
                        NATIONAL HIGHWAY, KALAWAG II, ISULAN SULTAN KUDARAT
                    </p>
                    <div class="text-code">
                        <p>RN-9520-12000570
                            CIN NO. 0103120101
                            TIN NO. 004- 407- 443
                            TEL NO. 064- 201- 5149
                        </p>
                    </div>

                    <div class="stourney-text"> DEED OF ASSIGNMENT WITH SPECIAL POWER OF ATTORNEY</div>
                </div>

            </section>

            <section class="letter-section">
                <p class="intro">KNOW TO ALL MEN THESE PRESENT:</p>

                <p class="second-text">
                    I <input type="text" class="form-control"> , CITEREMPCO MEMBER/BORROWER, of legal age, single/ married/ widower,
                    Filipino, a Deped teacher based at <input type="text" class="form-control"> for and in a consideration of the amount .
                    Granted to me as salary/emergency loan/ bonus loan by the
                    Central Isulan Teachers Employees and Retirees , Multi - Purpose Cooperative (CITIREMPCO),
                    Isulan, Sultan Kudarat , by these presents, do the Department of Education , Sultan Kudarat
                    Division in favor of CITEREMPCO.
                </p>
                <p> ATTORNEY-FACT to claim or received my ATM card from DepEd Division or Developmetn Bank
                    of the Phillipines </p>

                <p>execute papers and documents therein , and to turn over the excess of my salary unto me
                    until my loan with CITEREMPCO shall have been fully paid/ settled.</p>

                <p>
                    all and every act necessary to carry into effect the foregoing authority, as fully to all interests
                    and purpose as I might or could lawfully do it personally present , with full power of substitution
                    and revocation, and hereby ratifying and confirming all that my said Attorney-In-Fact of her/his
                    substitute shall lawfully do or cause to be done by virtue hereof.
                </p>

                <p class="intwitness">
                    IN WITNESS WHEREOF, I have here unto set my hands this <input type="date" class="form-control"> at Isulan Sultan Kudarat.
                </p>

                <div class="deedinputs">
                    <div class="deedgroup1">
                        <div class="dinput">
                            <div><input type="text" name="" id="" class="form-control"></div>
                            <div class="">Borrower</div>
                        </div>

                    </div>
                    <div class="deedgroup2">
                        <div class="dinput">
                            <div> 1.  <input type="text" name="" id="" class="form-control"></div>
                            <div>(Witness)</div>
                        </div>
                        <div class="dinput">
                            <div> 2. <input type="text" name="" id="" class="form-control"></div>
                            <div>(Witness)</div>
                        </div>
                    </div>

                </div>


            </section>

            <section class="Aknowledgement-section">
                <div class="aknowledgment-text"> AKNOWLEDGEMENT</div>
                <p>BEFORE ME this <input type="text" class="form-control"> at the Isulan, Sultan Kudarat The above mention appeared <input
                        type="text" class="form-control"> with CTC/School I.D no. issued on <input type="text" class="form-control"> at <input type="text" class="form-control"> known
                    to me
                    to be the same person who execute the foregoing instrument and he/she acknowledge
                    to me that the same is his/her own free act deed. </p>

                <p >WITNEESS my hand and seal on the day, year , and place above written.</p>
            </section>

            <section class="deeddownsection">
                <ul>
                    <li>Doc No._________________</li>
                    <li>Page No.________________</li>
                    <li>Book No.________________</li>
                    <li>Series No._______________</li>
                </ul>
                <div class="notrary">
                        <p>NOTARY PUBLIC</p>
                </div>
            </section>
        </div>

    </div>
</div>
@endsection