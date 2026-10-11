<script>
$(document).ready(function () {

    $("#loginForm").validate({

        errorClass: "lora-uniquifier",

        rules: {
            name: {
                required: true
            },

            password: {
                required: true
            }
        },

        messages: {
            name: {
                required: "Please enter your username."
            },

            password: {
                required: "Please enter your password."
            }
        },

        submitHandler: function (form) {

            var username = $("input[name='name']").val();
            var password = $("input[name='password']").val();

            if (username === "Jasfer" && password === "Jasfer123") {
                window.location.href = "index.php";
            } else {
                $("#loginError").text("Invalid username or password.");
            }

        }

    });

});
</script>