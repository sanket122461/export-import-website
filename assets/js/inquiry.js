document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("form");
  if (!form) return;

  form.addEventListener("submit", function (event) {
    let name = document.querySelector("[name='name']").value.trim();
    let email = document.querySelector("[name='email']").value.trim();
    let mobile = document.querySelector("[name='mobile']").value.trim();
    let service = document.querySelector("[name='service']").value;
    let message = document.querySelector("[name='message']").value.trim();

    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    let mobilePattern = /^[0-9]{10,15}$/;

    if (
      name === "" ||
      !emailPattern.test(email) ||
      !mobilePattern.test(mobile) ||
      service === "" ||
      message === ""
    ) {
      event.preventDefault();
      bootbox.alert({
        title: "⚠️ Validation Error",
        message:
          "Please fill in all fields correctly before submitting.<br><br>Make sure your email and mobile number are valid.",
        centerVertical: true,
        size: "small",
        backdrop: true,
      });
    }
  });
});
