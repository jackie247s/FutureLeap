var clearForm = function(){
  $("#name").val('');
  $("#email").val('');
  $("#phone").val('');
  $("#message").val('');
};

var collectFormData = function(){
  var name = $("#name").val();
  var email = $("#email").val();
  var phone = $("#phone").val();
  var message = $("#message").val();

  var formData = {
    'name' : name,
    'email' : email,
    'phone' : phone,
    'message' : message
  };

  return formData;
};

var sendFormData = function(formData){
  console.log(formData);
};
