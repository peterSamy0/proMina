function addImageForm(event) {
    event.preventDefault()
    // Clone the first image form
    const clonedForm = document.querySelector('#imageForms .d-flex').cloneNode(true);

    // Clear input values in the cloned form
    clonedForm.querySelectorAll('input').forEach(input => input.value = '');

    // Append the cloned form to the #imageForms container
    document.getElementById('imageForms').appendChild(clonedForm);
}