
document.querySelector('form').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent the form from submitting normally

    // Get the value entered in the search box
    var action = document.querySelector('input[name="search"]').value;

    // Perform further actions based on the entered value
    if (action === 'specific-action') {
        // Redirect to action.php
        window.location.href = 'action.php';
    }
    // Add more conditions for different actions if needed
});

