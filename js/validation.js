$(document).ready(function() {
   
    $('.valid1').on('click', function(event) {
        let valid = true;
        const fullName = $('[name="full_name"]').val().trim();
        const mothersName = $('[name="mothers_name"]').val().trim();
        const dob = $('[name="date_of_birth"]').val();
        const placeOfBirth = $('[name="place_of_birth"]').val().trim();
       
        if (fullName === '') {
            $('#full-name-error').text("Full Name is required.");
            valid = false;
        } else {
            $('#full-name-error').text("");
        }
        
        if (mothersName === '') {
            $('#mothers_name-error').text("Mother's Name is required.");
            valid = false;
        } else {
            $('#mothers_name-error').text("");
        }

        if (dob === '') {
            $('#dob-error').text("Date of Birth is required.");
            valid = false;
        } else {
            $('#dob-error').text("");
        }

        if (placeOfBirth === '') {
            $('#pob-error').text("Place of Birth is required.");
            valid = false;
        } else {
            $('#pob-error').text("");
        }

        if (!valid) {
            currentSlide--;
            showSlide(currentSlide);
        }
    });
    
    //slide 2
    $('.valid2').on('click', function(event) {
        let valid = true;
        const passportNumber = $('[name="passport_number"]').val().trim();
        const placeOfIssue = $('[name="place_of_issue"]').val().trim();
        const dateOfIssue = $('[name="date_of_issue"]').val();
        const dateOfExpiry = $('[name="date_of_expiry"]').val();
        const presentNationality = $('[name="present_nationality"]').val().trim();
    
        if (passportNumber === '') {
            $('#passport_number-error').text('Passport Number is required.');
            valid = false;
        } else {
            $('#passport_number-error').text('');
        }

        if (placeOfIssue === '') {
            $('#place_of_issue-error').text('Place of Issue is required.');
            valid = false;
        } else {
            $('#place_of_issue-error').text('');
        }

        if (dateOfIssue === '') {
            $('#date_of_issue-error').text('Date of Issue is required.');
            valid = false;
        } else {
            $('#date_of_issue-error').text('');
        }

        if (dateOfExpiry === '') {
            $('#date_of_expiry-error').text('Date of Expiry is required.');
            valid = false;
        } else {
            $('#date_of_expiry-error').text('');
        }

        if (presentNationality === '') {
            $('#present_nationality-error').text('Present Nationality is required.');
            valid = false;
        } else {
            $('#present_nationality-error').text('');
        }

        if (!valid) {
            currentSlide--;
            showSlide(currentSlide);
        }
    });
    
    //slide 3
    $('.valid3').on('click', function(event) {
        let valid = true;
        const maritalStatus = $('[name="marital_status"]').val().trim();
        const religion = $('[name="religion"]').val().trim();
        const qualification = $('[name="qualification"]').val().trim();
        const profession = $('[name="profession"]').val().trim();
    
        if (maritalStatus === '') {
            $('#marital_status-error').text('Marital Status is required.');
            valid = false;
        } else {
            $('#marital_status-error').text('');
        }

        if (religion === '') {
            $('#religion-error').text('Religion is required.');
            valid = false;
        } else {
            $('#religion-error').text('');
        }

        if (qualification === '') {
            $('#qualification-error').text('Qualification is required.');
            valid = false;
        } else {
            $('#qualification-error').text('');
        }

        if (profession === '') {
            $('#profession-error').text('Profession is required.');
            valid = false;
        } else {
            $('#profession-error').text('');
        }

        if (!valid) {
            currentSlide--;
            showSlide(currentSlide);
        }
    });
    
    //slide 4
    $('.valid4').on('click', function(event) {
        let valid = true;
        const durationOfStay = $('[name="duration_of_stay"]').val().trim();
        const dateOfArrival = $('[name="date_of_arrival"]').val();
        const dateOfDeparture = $('[name="date_of_departure"]').val();
        const carrierName = $('[name="carrier_name"]').val().trim();
        const businessAddressPhone = $('[name="business_address_phone"]').val().trim();
    
        if (durationOfStay === '') {
            $('#duration_of_stay-error').text('Duration of Stay is required.');
            valid = false;
        } else {
            $('#duration_of_stay-error').text('');
        }

        if (dateOfArrival === '') {
            $('#date_of_arrival-error').text('Date of Arrival is required.');
            valid = false;
        } else {
            $('#date_of_arrival-error').text('');
        }

        if (dateOfDeparture === '') {
            $('#date_of_departure-error').text('Date of Departure is required.');
            valid = false;
        } else {
            $('#date_of_departure-error').text('');
        }

        if (carrierName === '') {
            $('#carrier_name-error').text('Carrier Name is required.');
            valid = false;
        } else {
            $('#carrier_name-error').text('');
        }

        if (businessAddressPhone === '') {
            $('#business_address_phone-error').text('Business Address and Phone is required.');
            valid = false;
        } else {
            $('#business_address_phone-error').text('');
        }

        if (!valid) {
            currentSlide--;
            showSlide(currentSlide);
        }
    });

});
