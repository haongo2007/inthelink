"use strict";
$(function() {
    $(".needs-validation").validate({
    rules: {
      title:{
        required: true,
        minlength: 5
      },
    },
    messages: {
        title: {
            required: "Please typing a title",
            minlength: "Your title must be at least 5 characters long"
        }
    },
    submitHandler: function(form) {
      form.submit();
    }
    });
});