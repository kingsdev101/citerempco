<div class="astep2">
<div class="astep2-wrapper">

    <h2 class="my-2">Beneficiaries</h2>
    
    <div class="asection mt-2">
        <p>Primary</p>
        <div class="asection-group">
            <div class="asection-box">
                <p>First Name:</p>
                <div><input type="text" name="step2[beneficiaries][primary][firstname]"></div>
            </div>
            <div class="asection-box">
                <p>Middle Name:</p>
                <div><input type="text" name="step2[beneficiaries][primary][middlename]"></div>
            </div>
            <div class="asection-box">
                <p>Family Name:</p>
                <div><input type="text" name="step2[beneficiaries][primary][familyname]"></div>
            </div>
            <div class="asection-box">
                <p>Relationship:</p>
                <div><input type="text" name="step2[beneficiaries][primary][relationship]"></div>
            </div>
            <div class="as-age">
                <p>age</p>
                <div><input type="text" name="step2[beneficiaries][primary][age]"></div>
            </div>
        </div>
    </div>
    <div class="asection mt-2">
        <p>Secondary</p>
        <div class="asection-group">
            <div class="asection-box">
                <p>First Name:</p>
                <div><input type="text" name="step2[beneficiaries][secondary][firstname]"></div>
            </div>
            <div class="asection-box">
                <p>Middle Name:</p>
                <div><input type="text" name="step2[beneficiaries][secondary][middlename]"></div>
            </div>
            <div class="asection-box">
                <p>Family Name:</p>
                <div><input type="text" name="step2[beneficiaries][secondary][familyname]"></div>
            </div>
            <div class="asection-box">
                <p>Relationship:</p>
                <div><input type="text" name="step2[beneficiaries][secondary][relationship]"></div>
            </div>
            <div class="as-age">
                <p>age</p>
                <div><input type="text" name="step2[beneficiaries][secondary][age]"></div>
            </div>
        </div>
    </div>
    
    <div class="asection2 mt-3">
        <div class="asection-box flex  items-end">
            If minor, name of trustee :
        </div>
        <div class="asection-box">
            <p>First Name:</p>
            <div><input type="text" name="step2[trustess][firstname]"></div>
        </div>
        <div class="asection-box">
            <p>Middle Name:</p>
            <div><input type="text" name="step2[trustess][middlename]"></div>
        </div>
        <div class="asection-box">
            <p>Family Name:</p>
            <div><input type="text" name="step2[trustess][familyname]"></div>
        </div>
        
    </div>
    <div class="asection3 mt-3">
        <div class="asection-box3 pr-2">
            If the applicant is a minor, parental consent is required :
        </div>
        <div class="asection-box3 as2-in text-center">
            <div><input type="text" name="step2[parentalsignature]"></div>
            <p>Signature Over Printed Name:</p>
        </div>
        
        
    </div>
    
    <div class="family-m">
        <p>
            
            Are you a family member or a worker of a farmer who has an existing insurance
            coverage with the Philippine Crop Insurance Corporation (PCIC)? <select name="step2[memberofexistinginsureance][select]" id="">
                <option value="yes">YES</option>
                <option value="no">NO</option>
            </select>
        </p>
    </div>
    
    <div class="asection mt-3">
        <div class="asection-group">
            <div class="asection-box">
                <p>First Name:</p>
                <div><input type="text" name="step2[memberofexistinginsureance][firstname]"></div>
            </div>
            <div class="asection-box">
                <p>Middle Name:</p>
                <div><input type="text" name="step2[memberofexistinginsureance][middlename]"></div>
            </div>
            <div class="asection-box">
                <p>Family Name:</p>
                <div><input type="text" name="step2[memberofexistinginsureance][familyname]"></div>
            </div>
            <div class="asection-box">
                <p>Relationship:</p>
                <div><input type="text" name="step2[memberofexistinginsureance][relationship]"></div>
            </div>
            
        </div>
    </div>
    
    <div class="asection-ad mt-2">
        
        <div class="asectionad-box1 ">
            <p>Address:</p>
            <div><input type="text" name="step2[memberofexistinginsureance][address]"></div>
        </div>
        <div class="asecti-wrap ">
            <div class="as-box ml-2">
                <p>City</p>
                <div><input type="text" name="step2[memberofexistinginsureance][city]"></div>
            </div>
            <div class="as-box ml-2">
                <p>State</p>
                <div><input type="text" name="step2[memberofexistinginsureance][state]"></div>
            </div>
        </div>
        
    </div>
    
    <div class="aihere">
        <p>I here by certify that the fore going information is true and correct , signed in person. if the
            aplication shall be approved , the insurance shall be deemed based upon the information contained herein. I
            further agree that PCIC reserves the right to reject and/or void the insurance if found that there will be
            fraud, concealment or misrepresentation on his information.
        </p>
    </div>
    
    
    <div class="ap-sign-at">
        <p>Signed at <input type="text" name="step2[signat]">, on this <input type="date" name="step2[onthis]"></p>
    </div>
    
    <div class="name-sig">
        <div class="name-box">
            <input type="text" name="step2[signaturewitness]">
            <div>Name & Signature of Witness</div>
        </div>
        <div class="name-box">
            <input type="text" name="step2[signatureapplicant]">
            <div>Signature of Applicant</div>
        </div>
        
    </div>
    
    <div class="apinfo">
        <div class="circle-wrapper">
            <div></div>
            <div class="active"></div>
            
        </div>
        <div class="stepbutton">
            <button type="button" class="apprevbtn1">previous</button>
            <button type="submit" >submit</button>
        </div>
    </div>
</div>
</div>