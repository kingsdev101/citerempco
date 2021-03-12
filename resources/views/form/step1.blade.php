<div class="step1">

<div class="group1 flex justify-around">
    <div class="text-center">
        <span class="block text-center font-bold">Application For</span>
        <select name="step1[applicationfor]" class="mt-1" id="step1_applicationfor">
            <option value="">Type of loan</option>
            <option value="busineness">Business loan</option>
            <option value="starting">Starting loan</option>
        </select>
    </div>

    <div>
        <span class="block text-center font-bold">Type of Loan</span>
        <div class="checkbox-wrapper mt-1">
            <label class="checkbox-container">New
                <input type="checkbox" checked="checked" value="new" name="step1[typeofloan]" id="step1_typeofloan">
                <span class="checkmark"></span>
            </label>

            <label class="checkbox-container">Renewal
                <input type="checkbox" value="renewal" name="step1[typeofloan]">
                <span class="checkmark"></span>
            </label>
        </div>
    </div>
</div>

<div class="group2 mt-0">
    <div class="applicant p-2">
        <p class="font-bold mb-1">Applicant</p>
        <div class="inputs flex">
            <div class="inputs w-full">
                <div class="flex-gow-1 flex items-center justify-center  ">
                    <span class="block pr-0 ">First Name</span><input type="text"
                        class="form-control ins" placeholder="First Name" name="step1[applicant][firstname]" id="applicant_firstname">
                </div>
                <div class="flex-gow-1 flex items-center justify-center ">
                    <span class="block pr-0 ">Middle Name</span><input type="text"
                        class="form-control ins" placeholder="Middle Name" name="step1[applicant][middlename]" id="applicant_middlename">
                </div>
                <div class="flex-gow-1 flex items-center justify-center">
                    <span class="block pr-0 ">Family Name</span><input type="text"
                        class="form-control ins" placeholder="Family Name"  name="step1[applicant][familyname]" id="applicant_familyname">
                </div>
            </div>
            <div class="dateapplied flex flex-col p-2 justify-start items-center w-full">
                <div class="flex">
                    <span class="block ">Date Applied</span><input type="date"
                        class="form-control ins" name="step1[applicant][dateapplied]" id="applicant_dateapplied">
                </div>
                <div class="mt-2 flex appliedage">
                    <span class="inline-block ">Age</span> <input type="text"
                        class="form-control appliedage ins" name="step1[applicant][age]" id="applicant_age">
                </div>
            </div>
        </div>

    </div>

    <div class="spouse p-2">
        <p class="font-bold">Spouse</p>
        <div class="inputs flex">
            <div class="inputs w-full">
                <div class="flex-gow-1 flex items-center justify-center  ">
                    <span class="block pr-0 ">First Name</span><input type="text"
                        class="form-control ins" placeholder="First Name" name="step1[spouse][firstname]" id="spouse_familyname">
                </div>
                <div class="flex-gow-1 flex items-center justify-center ">
                    <span class="block pr-0 ">Middle Name</span><input type="text"
                        class="form-control ins" placeholder="Middle Name" name="step1[spouse][middename]" id="spouse_middlename">
                </div>
                <div class="flex-gow-1 flex items-center justify-center ">
                    <span class="block pr-0 ">Family Name</span><input type="text"
                        class="form-control ins" placeholder="Family Name" name="step1[spouse][familyname]" id="spouse_familyname">
                </div>
                <div class="flex-gow-1 flex items-center justify-center ">
                    <span class="block pr-0 ">Occupation</span><input type="text"
                        class="form-control ins" placeholder="Occupation" name="step1[spouse][occupation]" id="spouse_occupation">
                </div>
            </div>


            <div class="dateapplied flex flex-col p-2 justify-start items-center w-full">
                
                <div class="mt-2 flex appliedage">
                    <span class="inline-block ">Age</span> <input type="text"
                        class="form-control appliedage ins" name="step1[spouse][age]" id="spouse_age">
                </div>
            </div>
        </div>


    </div>
    <div class="group3 p-2">

        <div class=" ">
            <span class="block font-bold mb-0">Office Address </span><input type="text"
                class="form-control ins" placeholder="Occopation" name="step1[officaddress]" id="step1_officeaddress">
        </div>
        <div class="flex">
            <div class="w-full flex items-center">
                <span class="block p-1 mr-1">City/Province:</span> <input type="text"
                    class="form-control ins" name="step1[cityprovince]" id="step1_cityprovince">
            </div>
            <div class="w-full flex items-center justify-center">
                <span class="inline-block p-1">State</span> <select name="step1[state]" id="step1_state">
                    <option value="">Choose State</option>
                    <option value="Philippines">Philippines</option>
                </select>
            </div>
        </div>


    </div>
    <div class="btns">

        <div class="dots">
            <div class="activates"></div>
            <div class=""></div>
            <div class=""></div>
            <div class=""></div>
        </div>
        <div>
            <button type="button" class="btn btn-default next1">Next</button>
        </div>
    </div>
</div>



</div>