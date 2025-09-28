$(document).ready(function () {
    $('.spinner-container').hide();
    $("#contact-form").submit(function (e) {

        e.preventDefault();

        //Validate form fields before submission
        var username = $("#txtUserName").val().trim();
        var email = $("#txtUserEmail").val().trim();
        var mobileno = $("#txtUserMobileNo").val().trim();
       // var state = $("#txtUserState").val().trim();
        var company = $("#txtUserCompany").val().trim();
        var message = $("#txtUserMessage").val().trim();

        if (username === "" || email === "" || mobileno === "") {
            Swal.fire("Fill All the required Fields!");
            return;
        }
        //var formData = $(this).serialize();
        var formData = {
            "username": username,
            "email": email,
            "mobileno": mobileno,
          //  "state": state,
            "company": company,
            "message": message
        }
        $('.spinner-container').show();
        $.ajax({
    type: "POST",
    url: "send-email.php",
    data: formData,
    dataType: "json",
    success: function (response) {
        console.log(response);
        if (response.status === "success") {
            $('.spinner-container').hide();
            Swal.fire('Thank you!', 'Your message has been successfully sent.', 'success');
            $("#contact-form")[0].reset();
        } else {
            $('.spinner-container').hide();
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Cannot Submit Form!'
            });
        }
    },
    error: function (jqXHR, textStatus, errorThrown) {
        $('.spinner-container').hide();

        console.error("AJAX Error Details:");
        console.error("Status Code:", jqXHR.status);           // e.g. 404, 500
        console.error("Response Text:", jqXHR.responseText);   // Any server error message
        console.error("Text Status:", textStatus);             // 'timeout', 'error', etc.
        console.error("Error Thrown:", errorThrown);           // 'Not Found', 'Internal Server Error'

        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: `Request failed: ${textStatus} - ${errorThrown}`
        });
    }
});

    });
});