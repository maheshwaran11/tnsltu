function required(form) {
    var currentForm = form;
    const formData = new FormData(currentForm);
    const form_values = Object.fromEntries(formData);
    // form_values.photoName = form_values.photo.name;
    // form_values.photoSize = form_values.photo.size;
    // form_values.photoType = form_values.photo.type;
    const all_values = JSON.stringify(form_values);
    console.log(all_values);
}