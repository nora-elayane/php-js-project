document.addEventListener('DOMContentLoaded', () => {
    const editBtn = document.getElementById('edit-profile-btn');
    const nameText = document.getElementById('profile-name');
    const emailText = document.getElementById('profile-email');

    // إضافة حدث عند الضغط على زر التعديل
    editBtn.addEventListener('click', () => {
        const newName = prompt('Enter new name:', nameText.textContent);
        if (newName && newName.trim() !== "") {
            nameText.textContent = newName.trim();
        }

        const newEmail = prompt('Enter new email:', emailText.textContent);
        if (newEmail && newEmail.trim() !== "") {
            emailText.textContent = newEmail.trim();
        }
    });
});