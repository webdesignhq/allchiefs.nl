/* jQuery(document).ready(function($) {
  // $('#applyForm').submit(function(e) {
    // e.preventDefault();
    // sendApplication(this);
  // });
  function sendApplication(form) {
    // get form data from form 
    const formData = $(form).serializeArray();

  
    // process the application using the api and ajax
    $.ajax({
      url: "../wp-content/themes/allchiefs.nl/koppeling/api.php",
      type: "POST",
      data: formData,
      async: false,
      success: function(data) {
        console.log(data);
        alert('Application sucessfully sent!');
      }
    });
    // return some visual indicator that the application has been sent (or has failed)
  }
}); */