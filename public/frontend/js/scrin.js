document.addEventListener("DOMContentLoaded", () => {
    const signUpButton = document.getElementById("signUp");
    const signInButton = document.getElementById("signIn");
    const container = document.getElementById("container");

    signUpButton.addEventListener("click", () => {
        container.classList.add("right-panel-active");
        window.history.replaceState({}, "Register", "/register");
    });

    signInButton.addEventListener("click", () => {
        container.classList.remove("right-panel-active");
        window.history.replaceState({}, "Login", "/login");
    });

    const target = document.getElementById("authTarget");
    if (target) {
        page = target.dataset.target;
        // console.log(page);
        if (page === "login") container.classList.remove("right-panel-active");
        else container.classList.add("right-panel-active");
    }
});
