const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
// 01603 515007, 01223 37 57 72, +44 1603 515007, 0044 1603 515007
const phoneRegex = /^(?:\+44\s?|0044\s?|0)\d(?:[\s-]?\d){8,9}$/;

const validationRules = {
  name: {
    required: true,
    requiredMessage: "Please enter your name."
  },

  email: {
    required: true,
    regex: emailRegex,
    requiredMessage: "Please enter your email address.",
    message: "Please enter a valid email address."
  },

  telephone: {
    required: true,
    regex: phoneRegex,
    requiredMessage: "Please enter your telephone number.",
    message: "Please enter a valid phone number."
  },

  message: {
    required: true,
    minLength: 5,
    requiredMessage: "Please enter your message.",
    message: "Message must be at least 5 characters long."
  },

  default: {
    message: "This field is required!"
  }
};

export default validationRules;