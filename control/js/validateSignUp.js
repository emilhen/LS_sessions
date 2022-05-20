$.validator.setDefaults( {
    submitHandler: function (form) {
       form.submit();
    }
 });
 
 $(document).ready(function(){

   $.validator.addMethod("alpha", function (value, element) {
      var pattern = /^[\w]+$/i;
      return this.optional(element) || pattern.test(value);
    }, "");
  
     $.validator.addMethod("formEmail", function (value, element) {
        var pattern = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
        return this.optional(element) || pattern.test(value);
    }, "");


    $('#signUpForm').validate({
       rules: {
          user: {
             required: true,
             minlength: 3,
             alpha: true
          },
          password: {
             required: true,
             minlength: 5,
             alpha: true
          },
          confirm_password: {
             required: true,
             equalTo: "#passwordS"
          },
          email: {
             required: true,
             formEmail: true
          },
          
       },
       messages: {           
          user: {
             required: '<span class="alert error">*Campo obligatorio</span>',
             minlength: '<span class="alert error">*Minimo 5 caracteres</span>',
             alpha: '<span class="alert error">*Caracteres no permitidos</span>'
          },
          password: {
             required: '<span class="alert error">*Campo obligatorio</span>',
             minlength: '<span class="alert error">*Minimo 5 caracteres</span>',
             alpha: '<span class="alert error">*Caracteres no permitidos</span>'
          },
          confirm_password: {
             required: '<span class="alert error">*Campo obligatorio</span>',
             equalTo: '<span class="alert error">*Las contraseñas no coinciden</span>'
          },
          email:{
              required: '<span class="alert error">*Campo obligatorio</span>',
              formEmail: '<span class="alert error">*Correo electronico no valido</span>'
          } 
          
       },
       errorElement: "span"
    });
 });
