document.addEventListener("DOMContentLoaded", () => {
    const btn_showForm = document.getElementById("btn_showForm");
    const form_login = document.getElementById("form_login");
    const showForm = () => {
        btn_showForm.classList.add("d-none");
        form_login.classList.remove("d-none");

    };

    // Tambahkan ke global scope jika dipanggil langsung dari HTML
    window.showForm = showForm;
});
