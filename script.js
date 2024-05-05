// Add event listener to login form
document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm');
    loginForm.addEventListener('submit', handleFormSubmit);
});

/**
 * Handle form submission
 * @param {Event} event Form submission event
 */
function handleFormSubmit(event) {
    event.preventDefault(); // Prevent form submission

    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value.trim();

    // Validate username and password
    if (username === '' || password === '') {
        alert('Please enter username and password');
        return;
    }

    // Submit the form if validation passes (you can replace this with AJAX call)
    loginForm.submit();
}

