document.getElementById('productImage').addEventListener('change', function (event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            const preview = document.createElement('img');
            preview.src = e.target.result;
            document.querySelector('.image-preview').appendChild(preview);
        };
        reader.readAsDataURL(file);
    }
});