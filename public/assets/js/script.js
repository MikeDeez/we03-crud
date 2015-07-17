  // When the browser is ready...
  $(function() {

    // Setup form validation on the #register-form element
    $("#register-form").validate({
    
        // Specify the validation rules
        rules: {
            username: "required",
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 5
            },
            agree: "required"
        },
        
        // Specify the validation error messages
        messages: {
            username: "Please enter your username",,
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            email: "Please enter a valid email address"
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });