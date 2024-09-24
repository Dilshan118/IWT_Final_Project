// Ensure the DOM is fully loaded before executing
document.addEventListener("DOMContentLoaded", function () {
  // Initially hide the preview section
  document.getElementById('preview').style.display = 'none';

  // Handle form submission and show preview
  document.getElementById("inquiry-form").addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent form submission for preview

    // Get the values from the form fields
    const firstName = document.getElementById('first-name').value;
    const lastName = document.getElementById('last-name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const vehicle = document.getElementById('vehicle').value;
    const date = document.getElementById('date').value;
    const time = document.getElementById('time').value;
    const comments = document.getElementById('comments').value;

    // Update the preview section with the form data
    document.getElementById('preview-first-name').value = firstName;
    document.getElementById('preview-last-name').value = lastName;
    document.getElementById('preview-email').value = email;
    document.getElementById('preview-phone').value = phone;
    document.getElementById('preview-vehicle').value = vehicle;
    document.getElementById('preview-date').value = date;
    document.getElementById('preview-time').value = time;
    document.getElementById('preview-comments').value = comments;

    // Show the preview section
    document.getElementById('preview').style.display = 'block';

    // Hide the finalize message in case it was previously shown
    document.getElementById('finalize-message').style.display = 'none';
  });
});

// Edit form values
function editForm() {
  // Get the values from the preview fields and set them back to the form fields
  document.getElementById('first-name').value = document.getElementById('preview-first-name').value;
  document.getElementById('last-name').value = document.getElementById('preview-last-name').value;
  document.getElementById('email').value = document.getElementById('preview-email').value;
  document.getElementById('phone').value = document.getElementById('preview-phone').value;
  document.getElementById('vehicle').value = document.getElementById('preview-vehicle').value;
  document.getElementById('date').value = document.getElementById('preview-date').value;
  document.getElementById('time').value = document.getElementById('preview-time').value;
  document.getElementById('comments').value = document.getElementById('preview-comments').value;

  // Hide the preview section after editing
  document.getElementById('preview').style.display = 'none';
}

// Delete the form values
function deleteForm() {
  // Clear the form fields
  document.getElementById('inquiry-form').reset();

  // Clear the preview section
  document.getElementById('preview-details').querySelectorAll('input').forEach(input => input.value = '');

  // Hide the preview section after deleting
  document.getElementById('preview').style.display = 'none';

  // Hide the finalize message if it was shown
  document.getElementById('finalize-message').style.display = 'none';
}

// Finalize the inquiry
function finalizeInquiry() {
  // Disable all form fields to lock the data
  const formFields = document.getElementById('inquiry-form').querySelectorAll('input, textarea');
  formFields.forEach(field => field.disabled = true);

  // Show a finalization message
  document.getElementById('finalize-message').style.display = 'block';

  // Hide the edit and delete buttons after finalizing
  document.querySelector('.edit-btn').style.display = 'none';
  document.querySelector('.delete-btn').style.display = 'none';
  document.querySelector('.finalize-btn').style.display = 'none';
}
