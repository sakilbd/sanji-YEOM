const c = console.log.bind(console);

c("oh yeah script connected fuck!!!!!!!!!");

const input = document.querySelector("input");
const first_name = document.querySelector("#first_name");
const last_name = document.querySelector("#last_name");
const email = document.querySelector("#email");
const pass = document.querySelector("#pass");
const confirmPass = document.querySelector("#ConfirmPass");
const message = document.querySelector("#message");

// const myInputArea = document.getElementById("first_name1");

// $('#first_name1').change(function(e) {
//     alert("fuck")
// });

if (first_name) {
    first_name.addEventListener("change", (e) => {
        const myInputText = e.target.value;
        c(myInputText);
        if (myInputText) {
            message.innerHTML = "**Type Last Name";
        } else if (!myInputText) {
            message.innerHTML = "**Please type first and last Name";
        }

        // if (first_name.value && last_name.value) {
        //     message.innerHTML = "**Insert Email";
        // }
    });
    last_name.addEventListener("change", (e) => {
        const myInputText = e.target.value;
        if (myInputText) {
            message.innerHTML = "**Insert Email";
        }
        // if (!myInputText) {
        //     message.innerHTML = "**Insert Email";
        // }
        if (first_name.value && last_name.value) {
            message.innerHTML = "**Insert Email";
        }


    });
    email.addEventListener("change", (e) => {
        const myInputText = e.target.value;
        if (myInputText) {
            message.innerHTML = "**Type Password";
        }
        if (!myInputText) {
            message.innerHTML = "**Insert Email";
        }

    });
    pass.addEventListener('click', (e) => {
        message.innerHTML = "**Password must contain 7-12 letters with at least one number";
    });
    pass.addEventListener("change", (e) => {
        var passOne = e.target.value;

        if (passOne) {
            message.innerHTML = "**Please Re-type your password";
        }
        if (!passOne) {
            message.innerHTML = "**Type Password";
        }

    });
    confirmPass.addEventListener("change", (e) => {

        var passTwo = e.target.value;
        if (passTwo) {
            if (pass.value != confirmPass.value) {
                message.innerHTML = "**Confirm password does not match with the password"
            }
        }
        if (pass.value == confirmPass.value) {
            message.innerHTML = "**Only 18+ can register"
        }
        // if (!passOne) {
        //     message.innerHTML = "**Type Password";
        // }

    });

}
// const d = $("#first_name1").val();
// alert(d)