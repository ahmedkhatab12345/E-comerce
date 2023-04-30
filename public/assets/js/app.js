$("#formvalidation").validate({
    
    rules:{
        name:{
            minlength: 2,
        }
    },
    messages: {
        required: "please enter your name",
        minlength: jQuery.validator.format("name at least {2} characters are necessary")
      },
    submitHandler: function(form) {
      $(form).submit();
    }
   });