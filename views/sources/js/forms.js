/*-------------------------------------------------
SCRIPT PARA VALIDACIÓN DE BOOTSTRAP (4-5)
-------------------------------------------------*/
(function () {
  "use strict";

  window.addEventListener("load", function () {
    var forms = document.getElementsByClassName("needs-validation");

    Array.prototype.filter.call(forms, function (form) {
      form.addEventListener(
        "submit",
        function (event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add("was-validated");
        },
        false
      );
    });
  });
})();

/*=================================================
Validar formularios
=================================================*/
function validarJs(campo, tipoValidacion) {
  const input = campo.target;
  const $parent = $(input).parent();
  const $invalid = $parent.children(".invalid-feedback");

  // Validar EMAIL
  if (tipoValidacion === "email") {
    const patronEmail =
      /^(?=.{1,254}$)(?=.{1,64}@)[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;

    if (!patronEmail.test((input.value || "").trim())) {
      input.classList.remove("is-valid");
      input.classList.add("is-invalid");
      $invalid.text("El correo electrónico está mal escrito");
      return;
    } else {
      input.classList.remove("is-invalid");
      input.classList.add("is-valid");
      $invalid.text("");
    }
  }

  // Validar PASSWORD
  if (tipoValidacion === "password") {
    const patronPwd = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/;

    if (!patronPwd.test((input.value || "").trim())) {
      input.classList.remove("is-valid");
      input.classList.add("is-invalid");
      $invalid.text(
        "La contraseña debe tener mínimo 8 caracteres e incluir mayúsculas, minúsculas y números."
      );
      return;
    } else {
      input.classList.remove("is-invalid");
      input.classList.add("is-valid");
      $invalid.text("");
    }
  }
}

/*=================================================
Recordar email en el login
=================================================*/
function recordarEmail(event) {
  const emailInput = document.querySelector('[name=emailAdmin]');
  const rememberCheckbox = event.target;

  if (rememberCheckbox.checked) {
    localStorage.setItem("emailAdmin", emailInput.value.trim());
    localStorage.setItem("checked", "true");
  } else {
    localStorage.removeItem("emailAdmin");
    localStorage.removeItem("checked");
  }
}

/*=================================================
Recuperar email en el login
=================================================*/
function getEmail() {
  const emailStored = localStorage.getItem("emailAdmin");
  const rememberState = localStorage.getItem("checked");

  if (emailStored) {
    document.querySelector('[name=emailAdmin]').value = emailStored;
  }

  if (rememberState) {
    document.querySelector('#remember').checked = true;
  }
}

getEmail();
