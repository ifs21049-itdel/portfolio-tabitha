// Multiple text typing
var typed1 = new Typed(".multiple-text", {
  strings: ["Frontend Development"],
  typeSpeed: 100,
  backSpeed: 100,
  backDelay: 100,
  loop: true,
});

// Clear form before unload
window.onbeforeunload = () => {
  for (const form of document.getElementsByTagName("form")) {
    form.reset();
  }
};

const menuIcon = document.getElementById("burger");
const menuList = document.getElementById("menu-list");

menuIcon.addEventListener("click", () => {
  menuList.classList.toggle("hidden");
});

// contact validations
const form = document.getElementById("form");
const inputName = document.getElementById("name");
const email = document.getElementById("email");
const message = document.getElementById("message");

form.addEventListener("submit", (e) => {
  e.preventDefault();

  validateInputs();
});

const setError = (element, message) => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector(".error");

  errorDisplay.innerText = message;
  inputControl.classList.add("error");
  inputControl.classList.remove("success");
};

const setSuccess = (element) => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector(".error");

  errorDisplay.innerText = "";
  inputControl.classList.add("success");
  inputControl.classList.remove("error");
};

const validateInputs = () => {
  const nameValue = inputName.value.trim();
  const emailValue = email.value.trim();
  const messageValue = message.value.trim();

  if (nameValue === "") {
    setError(inputName, "Name is required");
  } else {
    setSuccess(inputName);
  }

  if (emailValue === "") {
    setError(email, "Email is required");
  } else if (!emailValue.includes("@")) {
    setError(email, "Provide a valid email address");
  } else {
    setSuccess(email);
  }

  if (messageValue === "") {
    setError(message, "Message is required");
  } else {
    setSuccess(message);
  }
};
