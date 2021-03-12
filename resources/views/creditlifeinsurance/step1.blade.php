<div class="lstep1">
                            <h2>Personal Information</h2>
                            <div class="input-bundle">
                                <div class="box seperate1">
                                    <p>Surname:</p>
                                    <input type="text" class="linput1" name="step1[personalinformation][surname]" id="personalinformation_surname">
                                    <p>Given Name:</p>
                                    <input type="text" class="linput2" name="step1[personalinformation][givenname]">
                                    <p>Middle Name:</p>
                                    <input type="text" class="linput3" name="step1[personalinformation][middlename]">

                                </div>
                                <div class="box seperate2">
                                    <p>Date of Birth:</p>
                                    <input type="date" class="linput4" name="step1[personalinformation][dateofbirth]">
                                    <p>Place of Birth:</p>
                                    <input type="text" class="linput5" name="step1[personalinformation][placeofbirth]">
                                    <p>Nationality:</p>
                                    <input type="text" class="linput6" name="step1[personalinformation][nationality]">
                                </div>
                                <div class="box seperate3">
                                    <div class="lgroup-wrap">
                                        <div class="lgroup">
                                            <p class="text-none"></p>
                                            <div> <select name="step1[personalinformation][gcisnumber]" id="" class="lselect1">
                                                    <option value="">GSIS NO.</option>
                                                    <option value="1111">11111</option>
                                                </select>
                                            </div>
                                            <div>
                                                <p class="text-none"></p>
                                                <input type="text" class="linput7" name="step1[personalinformation][]">
                                            </div>
                                        </div>  
                                        <div class="lgroup">
                                            <div>

                                                <p class="text-gender">Gender</p>
                                                <select name="step1[personalinformation][gender]" id="">
                                                    <option value="">(Choose Gender)</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                            <div>
                                                <p>Civil Status:</p>
                                                <div>
                                                    <select name="step1[personalinformation][civilstatus]" id="">
                                                        <option value="">(Choose Status)</option>
                                                        <option value="single">Single</option>
                                                        <option value="married">Married</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="input-bundle2">
                                <p class="name-employer-text">Name of Employeer </p>
                                <div class="groups1">
                                    <div class="separate box1">
                                        <p>Surname:</p>
                                        <input type="text" class="linput8" name="step1[employeer][surname]">
                                        <p>Given Name:</p>
                                        <input type="text" class="linput9" name="step1[employeer][givenname]">
                                        <p>Middle Name:</p>
                                        <input type="text" class="linput10" name="step1[employeer][middlename]">
                                        <p>Address:</p>
                                        <input type="text" class="linput10" name="step1[employeer][address]">
                                    </div>
                                    <div class="seperate box2">
                                        <p>Present Weight</p>
                                        <div class="box-group">
                                            <input type="text" class="linput11 wg" placeholder="Kg." name="step1[employeer][kg]">
                                            <input type="text" class="linput12 wg" placeholder="Lbs." name="step1[employeer][lbs]">
                                        </div>
                                        <p>Present Height</p>
                                        <div class="box-group">
                                            <input type="text" class="linput13 wg" name="step1[employeer][h]">
                                            <input type="text" class="linput14 wg" name="step1[employeer][w]">
                                            <select name="step1[employeer][inch]" id="">
                                                <option value="">Inch.</option>
                                            </select>
                                        </div>
                                        <div class="life-annualincome">

                                            <p>Anual Income</p>
                                            <div class="group-wrapper">
                                                <div class="box-group">
                                                    <div class="inside-box-group">

                                                        <div>
                                                            <p>Salary:</p> <input type="text" placeholder="Amount"
                                                                class="am" name="step1[employeer][salary]">
                                                        </div>
                                                        <div>
                                                            <p>City:</p> <input type="text" class="am" name="step1[employeer][city]">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box-group">
                                                    <div class="inside-box-group">

                                                        <div>
                                                            <p>Commision:</p> <input type="text" placeholder="Amount"
                                                                class="am" name="step1[employeer][commision]">
                                                        </div>
                                                        <div>

                                                            <p>State: </p><select name="step1[employeer][state]" id="">
                                                                <option value="">(Choose State)</option>
                                                                <option value="philippines">(Choose State)</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="groups2">

                                    <p class="my-1">Occupation</p>
                                    <div class="primary-linput">
                                        <div>
                                            <p class="mx-1">Primary</p> <input type="text" name="step1[employeer][primary]">
                                        </div>
                                        <div>
                                            <p class="mx-1">Others</p> <input type="text" name="step1[employeer][others]">
                                        </div>
                                    </div>

                                    <div class="group-wrapper">
                                        <div class="box">
                                            <p>
                                                Residence Address:
                                            </p>
                                            <div><input type="text" name="step1[employeer][residenceadress]"></div>

                                        </div>
                                        <div class="boxf">
                                            <div class="boxf-wrap">

                                                <p class="mx-2">City:</p>
                                                <div><input type="text" class="ct" name="step1[employeer][residencecity]"></div>
                                            </div>
                                        </div>
                                        <div class="boxf">
                                            <div class="boxf-wrap">

                                                <p class="mx-2">State:</p>
                                                <div><select name="step1[employeer][residencestate]" id="">
                                                        <option value="">(Choose State)</option>
                                                        <option value="uk">UK</option>
                                                    </select></div>
                                            </div>
                                        </div>
                                        <div class="box">
                                            <p>
                                                Telephone No.
                                            </p>
                                            <div><input type="text" class="tp" name="step1[employeer][telephone]"></div>

                                        </div>
                                        <div class="boxf">
                                            <div class="boxf-wrap">

                                                <div><select name="step1[employeer][residencemobile]" id="">
                                                        <option value="">(Mobile)</option>
                                                        <option value="samsung">samsung</option>
                                                    </select></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="group-wrapper">
                                        <div class="box">
                                            <p>
                                                Business Address:
                                            </p>
                                            <div><input type="text" name="step1[employeer][businessaddress]"></div>

                                        </div>
                                        <div class="boxf">
                                            <div class="boxf-wrap">

                                                <p class="mx-2">City:</p>
                                                <div><input type="text" class="ct" name="step1[employeer][businesscity]"></div>
                                            </div>
                                        </div>
                                        <div class="boxf">
                                            <div class="boxf-wrap">

                                                <p class="mx-2">State:</p>
                                                <div><select name="step1[employeer][businessstate]" id="">
                                                        <option value="">(Choose State)</option>
                                                        <option value="us">US</option>
                                                    </select></div>
                                            </div>
                                        </div>
                                        <div class="box">
                                            <p>
                                                Telephone No.
                                            </p>
                                            <div><input type="text" class="tp" name="step1[employeer][businesstelephone]"></div>

                                        </div>
                                        <div class="boxf">
                                            <div class="boxf-wrap">

                                                <div><select name="step1[employeer][businessmobile]" id="">
                                                        <option value="">(Mobile)</option>
                                                        <option value="oppo">Oppo</option>
                                                    </select></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="group-wrapper gdown">
                                        <div>
                                            <p>Highest Educational Attainment:</p>
                                            <div><input type="text" name="step1[employeer][highesteducationalattainment]"></div>
                                        </div>
                                        <div>
                                            <p>Professional Affiliation:</p>
                                            <div><input type="text" name="step1[employeer][proffesionalaffliation]"></div>
                                        </div>
                                        <div>
                                            <p>Club Membership:</p>
                                            <div><input type="text" name="step1[employeer][clubmember]"></div>
                                        </div>
                                    </div>

                                </div>
                                <div class="stepinfo">
                                    <div class="circle-wrapper">
                                        <div class="active"></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <div class="stepbutton">
                                        <button type="button" class="lnextbtn1">next</button>
                                    </div>
                                </div>
                            </div>
                        </div>