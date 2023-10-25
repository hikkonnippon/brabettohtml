function togglePasswordVisibility() {
    // Get password input element
    const passwordInput = document.getElementById('password');

    // Get toggle button element
    const toggleButton = document.getElementById('toggleButton');

    // Add click event listener to toggle button
    toggleButton.addEventListener('click', function () {
        // Check if password input type is 'password'
        if (passwordInput.type === 'password') {
            // Change password input type to 'text'
            passwordInput.type = 'text';
        } else {
            // Change password input type back to 'password'
            passwordInput.type = 'password';
        }
    });
}

// Call the function to initialize the toggle button functionality
togglePasswordVisibility();