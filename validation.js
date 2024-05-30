document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault();

    const form = document.getElementById("contactForm");
    const formData = new FormData(form);

    // Check if any input is empty
    let isFormValid = true;
    formData.forEach(function(value) {
        if (value.trim() === '') {
            isFormValid = false;
        }
    });

    if (!isFormValid) {
        Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: 'Please fill in all fields.',
            confirmButtonText: 'OK'
        });
        return;
    }

    Swal.fire({
        icon: 'warning',
        title: 'Are you sure?',
        text: 'Do you want to submit this form?',
        showCancelButton: true,
        confirmButtonText: 'Yes, submit it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            fetch(form.action, {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())  // Get text response
            .then(data => {
                if (data.includes('Pesan telah terkirim dan data tersimpan!')) { // Perbaiki pengecekan ini
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'Your form has been submitted successfully.',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        form.reset(); // Resets the form
                        document.querySelectorAll('#contactForm input').forEach(input => input.placeholder = '');
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: data,
                        confirmButtonText: 'OK'
                    });
                }
            })
            .catch(error => {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'There was an error submitting your form. Please try again later.',
                    confirmButtonText: 'OK'
                });
                console.error('Error:', error);
            });
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            Swal.fire({
                icon: 'info',
                title: 'Cancelled',
                text: 'Your form submission has been cancelled.',
                confirmButtonText: 'OK'
            });
        }
    });
});
