<script>
$(document).ready(function () {

    $("#myForm").validate({

        errorClass: "lora-uniquifier",

        rules: {

            name: {
                required: true,
                minlength: 5,
                maxlength: 10
            },

            email: {
                required: true,
                email: true
            },

            phone: {
                required: true,
                digits: true,
                minlength: 11,
                maxlength: 11
            },

            password: {
                required: true,
                minlength: 8,
                maxlength: 15
            },

            confirmPassword: {
                required: true,
                equalTo: "#password"
            }

        },

        messages: {

            name: {
                required: "Please enter your username.",
                minlength: "Username must be at least 5 characters.",
                maxlength: "Username must not exceed 10 characters."
            },

            email: {
                required: "Please enter your email.",
                email: "Please enter a valid email address."
            },

            phone: {
                required: "Please enter your phone number.",
                digits: "Phone number must contain numbers only.",
                minlength: "Phone number must be 11 digits.",
                maxlength: "Phone number must be 11 digits."
            },

            password: {
                required: "Please enter your password.",
                minlength: "Password must be at least 8 characters.",
                maxlength: "Password must not exceed 15 characters."
            },

            confirmPassword: {
                required: "Please confirm your password.",
                equalTo: "Passwords do not match."
            }

        }

    });

});
</script>