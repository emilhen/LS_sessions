$.validator.setDefaults( {
   submitHandler: function (form) {
      form.submit();
   }
});

$(document).ready(function(){

   $('#logInForm').validate({
      rules: {
         user: {
            required: true,
            minlength: 3
         },
         password: {
            required: true
         },
      },
      messages: {           
         user: {
            required: '<span class="alert error">*Campo obligatorio</span>',
            minlength: '<span class="alert error">*Minimo 5 caracteres</span>'
         },
         password: {
            required: '<span class="alert error">*Campo obligatorio</span>'
         }
      },
      errorElement: "span"
   });
});
