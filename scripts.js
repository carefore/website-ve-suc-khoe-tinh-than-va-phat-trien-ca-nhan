$(document).ready(function() {
  $('#infoForm').submit(function(e) {
    e.preventDefault();
    var formData = $(this).serialize();
    
    $.ajax({
      type: 'POST',
      url: 'submit.php',
      data: formData,
      success: function(response) {
        alert('Information submitted successfully!');
        // You can add further handling here if needed
      },
      error: function(error) {
        console.error('Error:', error);
        // Handle error scenarios here
      }
    });
  });
});
