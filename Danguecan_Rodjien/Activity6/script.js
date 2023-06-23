$(document).ready(function() {
    $('#loginBtn').click(function(event) {
      event.preventDefault();
      var username = $('#username').val();
      var password = $('#password').val();
  
      if (username.trim() == '' || password.trim() == '') {
        $('#errorMessage').html('Please enter both email address and password.').show();
      } else {
    
      }
    });
  
    $('.close').click(function() {
      $(this).parent().hide();
    });
  });