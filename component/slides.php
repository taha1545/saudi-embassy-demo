<form onsubmit="return false;">

<section class="container" id="Form">

    <div class="slide slide1">
        <div class="image-div">
        </div>
        <h2>Personal Information :</h2>
        <input type="file" id="profile-img" name="profile_img" accept="image/*">
        <label for="profile-img" class="upload-label" id="upload-label"></label>
        <label>Full Name:</label>
        <input type="text" name="full_name" placeholder="Your full name" >
        <div class="error-message" id="full-name-error" style="color:red;font-size:14px;"></div>
        <label>Father's Name:</label>
        <input type="text" name="mothers_name" placeholder="Mother's name">
        <div class="error-message" id="mothers_name-error" style="color:red;font-size:14px;"></div>
        <label>Date of Birth:</label>
        <input type="date" name="date_of_birth">
        <div class="error-message" id="dob-error" style="color:red;font-size:14px;"></div>
        <label>Place of Birth:</label>
        <input type="text" name="place_of_birth" placeholder="Place of birth">
        <div class="error-message" id="pob-error" style="color:red;font-size:14px;"></div>
        <div class="ok">
        <button id="prev" style="background-color:#7f7979;">Previous</button>
        <div id="slide-counter" style="color:grey;">
           1/5
         </div>
         <button id="submit" class="valid1"  onclick="navigateSlide(1)">Continue</button>
        </div>
    </div>

    <div class="slide slide2" style="display: none;">
        <h2 style="margin-bottom:30px;">Passport Information</h2>
        <div class="image-div">
         </div>
        <label>Passport Number:</label>
        <input type="text" name="passport_number" placeholder="Passport Number">
        <div class="error-message" id="passport_number-error" style="color:red;font-size:14px;"></div>
        <label>Place of Issue:</label>
        <input type="text" name="place_of_issue" placeholder="Place of Issue">
        <div class="error-message" id="place_of_issue-error" style="color:red;font-size:14px;"></div>
        <label>Date of Issue:</label>
        <input type="date" name="date_of_issue">
        <div class="error-message" id="date_of_issue-error" style="color:red;font-size:14px;"></div>
        <label>Date of Expiry:</label>
        <input type="date" name="date_of_expiry">
        <div class="error-message" id="date_of_expiry-error" style="color:red;font-size:14px;"></div>
        <label>Present Nationality:</label>
        <input type="text" name="present_nationality" placeholder="Present nationality">
        <div class="error-message" id="present_nationality-error" style="color:red;font-size:14px;"></div>
        <div class="ok">
        <button id="prev" onclick="navigateSlide(0)">Previous</button>
        <div id="slide-counter" style="color:grey;">
           2/5
         </div>
        <button id="submit"  class="valid2" onclick="navigateSlide(2)">Continue</button>
        </div>
    </div>
    

    <div class="slide slide3" style="display: none; margin-bottom: 3px;">
    <h2>Travel detail</h2>
    <div class="image-div">
    </div>
    <label>Travel Purpose:</label>
    <label><input type="radio" name="travel_purpose" value="work"> Work</label>
    <label><input type="radio" name="travel_purpose" value="visit"> Visit</label>
    <label><input type="radio" name="travel_purpose" value="umrah"> Umrah</label>
    <label><input type="radio" name="travel_purpose" value="hajj"> Hajj</label>
    <label><input type="radio" name="travel_purpose" value="diplomacy"> Diplomacy</label>
    <br><br>
    <label>Sex:</label>
    <select name="sex">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
    <br><br>
    <label>Marital Status:</label>
    <input type="text" name="marital_status" placeholder="Marital status">
    <div class="error-message" id="marital_status-error" style="color:red;font-size:14px;"></div>
    <label>Religion:</label>
    <input type="text" name="religion" placeholder="Religion">
    <div class="error-message" id="religion-error" style="color:red;font-size:14px;"></div>
    <label>Qualification:</label>
    <input type="text" name="qualification" placeholder="Qualification">
    <div class="error-message" id="qualification-error" style="color:red;font-size:14px;"></div>
    <label>Profession:</label>
    <input type="text" name="profession" placeholder="Profession">
    <div class="error-message" id="profession-error" style="color:red;font-size:14px;"></div>
    <div class="ok">
        <button id="prev" onclick="navigateSlide(1)">Previous</button>
        <div id="slide-counter" style="color:grey;">
            3/5
        </div>
        <button id="submit" class="valid3" onclick="navigateSlide(3)">Continue</button>
    </div>
</div>


<div class="slide slide4" style="display: none;">
    <h2>Travel Details</h2>
    <div class="image-div">
    </div>
    <label>Duration of Stay in the Kingdom:</label>
    <input type="text" name="duration_of_stay" placeholder="Duration of stay">
    <div class="error-message" id="duration_of_stay-error" style="color:red;font-size:14px;"></div>
    <label>Date of Arrival:</label>
    <input type="date" name="date_of_arrival">
    <div class="error-message" id="date_of_arrival-error" style="color:red;font-size:14px;"></div>
    <label>Date of Departure:</label>
    <input type="date" name="date_of_departure">
    <div class="error-message" id="date_of_departure-error" style="color:red;font-size:14px;"></div>
    <br>
    <label>Mode of Payment:</label>
    <select name="mode_of_payment">
        <option value="free">Free</option>
        <option value="cash">Cash</option>
        <option value="cheque">Cheque</option>
    </select>
    <br><br>
    <label>Carrier's Name:</label>
    <input type="text" name="carrier_name" placeholder="Carrier's Name">
    <div class="error-message" id="carrier_name-error" style="color:red;font-size:14px;"></div>
    <label>Business Address and Phone No:</label>
    <input type="text" name="business_address_phone" placeholder="Business address and phone number">
    <div class="error-message" id="business_address_phone-error" style="color:red;font-size:14px;"></div>
    <div class="ok">
        <button id="prev" onclick="navigateSlide(2)">Previous</button>
        <div id="slide-counter" style="color:grey;">
            4/5
        </div>
        <button id="submit" class="valid4" onclick="navigateSlide(4)">Continue</button>
    </div>
    </div>

    <div class="slide slide5" style="display: none;">
        <h2>Dependents (if any)</h2>
        <div class="image-div">
         </div>
        <label>Dependent's Full Name:</label>
        <input type="text" name="dependent_name" placeholder="Dependent's Name">
        <label>Relationship:</label>
        <input type="text" name="relationship" placeholder="Relationship">
        <label>Dependent's Date of Birth:</label>
        <input type="date" name="dependent_date_of_birth">
        <br>
        <label>Dependent's Sex:</label>
        <select name="dependent_sex">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <br><br>
        <label>Previous Nationality:</label>
        <input type="text" name="previous_nationality" placeholder="Previous nationality">
        <label>Home Address and Phone No:</label>
        <input type="text" name="home_address_phone" placeholder="Home address and phone number">
     
        <div class="ok">
        <button id="prev" onclick="navigateSlide(3)">Previous</button>
        <div id="slide-counter" style="color:grey;">
           5/5
         </div>
        <button id="submit" class="myButton">Submit</button>
        </div>
      
      
       
    </div>
    </form>  

</section>
