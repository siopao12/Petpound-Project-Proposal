document.getElementById('toggleSignupPassword').addEventListener('click', function () {
    const input = document.getElementById('passwordone'); // Corrected to match the new ID
    const icon = this.querySelector('i');

    if (input.type === 'password') {
        input.type = 'text';
        icon.classList.remove('bi-eye');
        icon.classList.add('bi-eye-slash');
    } else {
        input.type = 'password';
        icon.classList.remove('bi-eye-slash');
        icon.classList.add('bi-eye');
    }
});



// Toggle visibility for Password
document.getElementById('toggleCreatePassword').addEventListener('click', function () {
    const passwordInput = document.getElementById('Thirdpassword'); // Corrected to match the new ID
    const passwordIcon = this.querySelector('i');
    
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        passwordIcon.classList.remove('bi-eye');
        passwordIcon.classList.add('bi-eye-slash');
    } else {
        passwordInput.type = 'password';
        passwordIcon.classList.remove('bi-eye-slash');
        passwordIcon.classList.add('bi-eye');
    }
});


// Toggle visibility for Confirm Password
document.getElementById('toggleConfirmPassword').addEventListener('click', function () {
    const confirmPasswordInput = document.getElementById('confirmPassword'); // Correct ID
    const confirmPasswordIcon = this.querySelector('i');
    
    if (confirmPasswordInput.type === 'password') {
        confirmPasswordInput.type = 'text';
        confirmPasswordIcon.classList.remove('bi-eye');
        confirmPasswordIcon.classList.add('bi-eye-slash');
    } else {
        confirmPasswordInput.type = 'password';
        confirmPasswordIcon.classList.remove('bi-eye-slash');
        confirmPasswordIcon.classList.add('bi-eye');
    }
});

