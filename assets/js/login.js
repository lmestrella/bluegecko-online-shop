const adminLoginUser = document.querySelector(`input[name="user"]`);
const adminLoginPwd = document.querySelector(`input[name="pwd"]`);
const adminLoginForm = document.querySelector(`.admin-login__form`);
const adminLoginTitle = document.querySelector(`.admin-login__title`);

// prevent submit action
// check for empty fields
// check creds

window.onload = () => {
  adminLoginUser.focus();
};

adminLoginForm.addEventListener("submit", validateLoginForm);
adminLoginUser.addEventListener("input", removeErrorIndicators);
adminLoginPwd.addEventListener("input", removeErrorIndicators);

function validateLoginForm(e) {
  e.preventDefault();
  let usernameHasValue = !checkEmptyInputField(
    adminLoginUser,
    "Username cannot be empty."
  );
  let passwordHasValue = !checkEmptyInputField(
    adminLoginPwd,
    "Password cannot be empty."
  );
  if (usernameHasValue && passwordHasValue) {
    $.post(
      $(this).attr("action"),
      $(this).serialize() +
        `&${encodeURI($(".admin-login__submit").attr("name"))}`,
      function (res) {
        if (res == "correctuser") {
          window.location.replace("./products.php");
        } else {
          appendErrorMessage(
            adminLoginTitle,
            "Your username and password do not match."
          );
        }
      }
    );
  }
}

function removeErrorIndicators(e) {
  if (adminLoginTitle.nextElementSibling.classList.contains("field-error"))
    adminLoginTitle.nextElementSibling.remove();

  if (e.target.classList.contains("field-error")) {
    e.target.classList.remove("field-error");
    e.target.nextElementSibling.remove();
  }
}

function checkEmptyInputField(field, errorMessage = "") {
  const value =
    field.getAttribute("type") == "password" ? field.value : field.value.trim();
  if (value.length > 0) return false;
  appendErrorMessage(field, errorMessage);
  field.classList.add("field-error");
  field.value = "";
  return true;
}

function appendErrorMessage(field, errorMessage) {
  if (field.nextElementSibling.nodeName != "SPAN") {
    const errorMessageBox = document.createElement("SPAN");
    errorMessageBox.classList.add("field-error");
    errorMessageBox.innerHTML = errorMessage;
    field.insertAdjacentElement("afterend", errorMessageBox);
  }
}

function addClass(field, newClass) {
  field.classList.add(newClass);
}

function clearInputField(field) {
  field.value = "";
}
// function checkUsernameField(usernameField) {
//   if (usernameField.value.trim().length > 0) return true;
//   usernameField.classList.add("field-error");
//   appendErrorMessage(usernameField, "Username cannot be empty");
//   return false;
// }

// function checkPasswordField(passwordField) {
//   if (passwordField.value.length > 0) return true;
//   passwordField.classList.add("field-error");
//   appendErrorMessage(passwordField, "Password cannot be empty");
//   return false;
// }
