const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
// 01603 515007, 01223 37 57 72, +44 1603 515007, 0044 1603 515007
const phoneRegex = /^(?:\+44\s?|0044\s?|0)\d(?:[\s-]?\d){8,9}$/;

const validationRules = {
  name: {
    required: true,
    maxLength: 100,
    requiredMessage: "Please enter your name.",
    maxLengthMessage: "Name must be no more than 100 characters long."
  },

  company: {
    maxLength: 100,
    maxLengthMessage: "Company name must be no more than 100 characters long."
  },

  email: {
    required: true,
    maxLength: 255,
    regex: emailRegex,
    requiredMessage: "Please enter your email address.",
    maxLengthMessage: "Email must be no more than 255 characters long.",
    message: "Please enter a valid email address."
  },

  telephone: {
    required: true,
    maxLength: 30,
    regex: phoneRegex,
    requiredMessage: "Please enter your telephone number.",
    maxLengthMessage: "Phone number must be no more than 30 characters long.",
    message: "Please enter a valid phone number (01603 515007, +44 1603 515007)."
  },

  message: {
    required: true,
    minLength: 5,
    maxLength: 1000,
    requiredMessage: "Please enter your message.",
    minLengthMessage: "Message must be at least 5 characters long.",
    maxLengthMessage: "Message must be no more than 1000 characters long."
  },

  default: {
    message: "This field is required!"
  }
};

export default validationRules;