document.addEventListener("DOMContentLoaded", () => {
    const btn_showForm = document.getElementById("btn_showForm");
    const form_login = document.getElementById("form_login");

    const btn_showFormSignIn = document.getElementById("btn_showFormSignIn");
    const form_signin = document.getElementById("form_signin");

    const showForm = () => {
        // Sembunyikan tombol utama
        btn_showForm.classList.add("d-none");
        btn_showFormSignIn.classList.add("d-none");

        // Sembunyikan form lain
        form_signin.classList.add("d-none");

        // Tampilkan form login
        form_login.classList.remove("d-none");
    };

    const showFormSignIn = () => {
        // Sembunyikan tombol utama
        btn_showForm.classList.add("d-none");
        btn_showFormSignIn.classList.add("d-none");

        // Sembunyikan form lain
        form_login.classList.add("d-none");

        // Tampilkan form sign-in
        form_signin.classList.remove("d-none");
    };

    // Tambahkan fungsi ke global scope
    window.showForm = showForm;
    window.showFormSignIn = showFormSignIn;
});
