//Returns a contactFormHandler Module
var contactFormHandler = {

  formData : {},

  init : function(){
    this.cacheDOM();
    this.bindEvents();
  },

  cacheDOM : function(){
    this.$el = $("#contact-form");
    this.$name = this.$el.find("#name");
    this.$email = this.$el.find("#email");
    this.$phone = this.$el.find("#phone");
    this.$message = this.$el.find("#message");
    this.$success = $("#form-success");
  },

  bindEvents : function(){
    this.$el.submit(this.submitForm.bind(this));
  },

  submitForm : function(e){
    e.preventDefault();
    this.collectFormData();
    this.clearForm();
    this.sendFormData();
  },

  //Collects Data from Contact Form compiles it into JSON Object and returns it as formData
  collectFormData : function(){
    this.formData.name = this.$name.val();
    this.formData.email = this.$email.val();
    this.formData.phone = this.$phone.val();
    this.formData.message = this.$message.val();
  },

  //Clears the form values
  clearForm : function(){
    this.$name.val('');
    this.$email.val('');
    this.$phone.val('');
    this.$message.val('');
  },

  //Sends the Form Data to the Script
  sendFormData : function(){
    $.post('/scripts/send-contact-data.php',formData,function(){
      this.$success.show(500);
      setTimeout(function(){
        contactFormHandler.$success.hide(500);
      },7000);
    });
  }

};
