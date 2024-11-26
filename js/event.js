$(document).ready(function() {
    $('.myButton').on('click', function(event) {
        

      
        var formData = new FormData();
        formData.append('full_name', $('input[name="full_name"]').val());
        formData.append('mothers_name', $('input[name="mothers_name"]').val());
        formData.append('date_of_birth', $('input[name="date_of_birth"]').val());
        formData.append('place_of_birth', $('input[name="place_of_birth"]').val());
        formData.append('passport_number', $('input[name="passport_number"]').val());
        formData.append('place_of_issue', $('input[name="place_of_issue"]').val());
        formData.append('date_of_issue', $('input[name="date_of_issue"]').val());
        formData.append('date_of_expiry', $('input[name="date_of_expiry"]').val());
        formData.append('present_nationality', $('input[name="present_nationality"]').val());
        formData.append('travel_purpose', $('input[name="travel_purpose"]:checked').val());
        formData.append('sex', $('select[name="sex"]').val());
        formData.append('marital_status', $('input[name="marital_status"]').val());
        formData.append('religion', $('input[name="religion"]').val());
        formData.append('qualification', $('input[name="qualification"]').val());
        formData.append('profession', $('input[name="profession"]').val());
        formData.append('duration_of_stay', $('input[name="duration_of_stay"]').val());
        formData.append('date_of_arrival', $('input[name="date_of_arrival"]').val());
        formData.append('date_of_departure', $('input[name="date_of_departure"]').val());
        formData.append('mode_of_payment', $('select[name="mode_of_payment"]').val());
        formData.append('carrier_name', $('input[name="carrier_name"]').val());
        formData.append('business_address_phone', $('input[name="business_address_phone"]').val());
        formData.append('dependent_name', $('input[name="dependent_name"]').val());
        formData.append('relationship', $('input[name="relationship"]').val());
        formData.append('dependent_date_of_birth', $('input[name="dependent_date_of_birth"]').val());
        formData.append('dependent_sex', $('select[name="dependent_sex"]').val());
        formData.append('previous_nationality', $('input[name="previous_nationality"]').val());
        formData.append('home_address_phone', $('input[name="home_address_phone"]').val());

        // AJAX request
        $.ajax({
            url: 'php/controller.php', 
            type: 'POST',
            data: formData,
            processData: false, 
            contentType: false, 
            success: function(response) {
                console.log('Form submitted successfully');
                if(response) {
                    $('body').html(response);
                } else {
                    $('body').html("error please return and try again");
                }
            },
            error: function(xhr, status, error) {
                console.error('An error occurred: ' + error);
            }
        });
        
        

    });
});
