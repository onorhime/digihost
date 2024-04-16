const regForm = document.getElementById('regform');
const registerBtn = document.getElementById('registerbtn')

regForm.addEventListener('submit', function(event) {
  event.preventDefault();

  const formData = new FormData(regForm);

  const firstname = formData.get('firstname');
  const lastname = formData.get('lastname');
  const username = formData.get('username');
  const email = formData.get('email');
  const mobile = formData.get('mobile');
  const city = formData.get('city');
  const country = formData.get('country');
  const zip = formData.get('zip');
  const address = formData.get('address');
  const password = formData.get('password');
  const confirmPassword = formData.get('password_confirmation');
  const pin = formData.get('pin');

  if (password  !== confirmPassword) {
    notify("error", "Passwords Do Not Match");
    return
  }
  
  const data = {
    firstname,
    lastname,
    username,
    email,
    mobile,
    country,
    city,
    zip,
    address,
    password,
    confirmPassword,
    pin
  };

  registerBtn.innerHTML = "Creating Account ..."
  registerBtn.setAttribute("disabled" , true)
  const xhr = new XMLHttpRequest();
  xhr.open('POST', '/register');
  xhr.setRequestHeader('Content-Type', 'application/json');
  xhr.onload = function() {
    if (xhr.status === 200) {
        const data = JSON.parse(xhr.responseText);
        switch (data.status) {
            case 'success':
                notify(data.status, data.message)
                registerBtn.innerHTML = "Redirecting To Dashboard ..."
                setTimeout(() => {
                    window.location.replace("/verify")
                    
                }, 2000);
                break;
            case 'error':
                notify(data.status, data.message)
                registerBtn.innerHTML = "Sign Up"
                registerBtn.removeAttribute("disabled")
                break;
            default:
                notify('info', 'Something went wrong on the server')
                registerBtn.innerHTML = "Sign Up"
                registerBtn.removeAttribute("disabled")
                break;
        }
    } else {
      console.log('Error registering user');
    }
  };
  xhr.send(JSON.stringify(data));
});

function notify(status, message) {
    if(typeof message == 'string'){
        iziToast[status]({
            message: message,
            position: "topRight"
        });
    }else{
        $.each(message, function(i, val) {
            iziToast[status]({
                message: val,
                position: "topRight"
            });
        });
    }

}


