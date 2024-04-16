const verifyform = document.getElementById("verifyform")

const registerBtn = document.getElementById('registerbtn')

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

verifyform.addEventListener('submit', function(event) {
    event.preventDefault();
  
    const formData = new FormData(verifyform);

    const pin = formData.get('pin');
  
    
    
    const data = {
      pin
    };
  
    registerBtn.innerHTML = "Verifying Account ..."
    registerBtn.setAttribute("disabled" , true)
    const xhr = new XMLHttpRequest();
    xhr.open('POST', '/verify');
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onload = function() {
      if (xhr.status === 200) {
          const data = JSON.parse(xhr.responseText);
          switch (data.status) {
              case 'success':
                  notify(data.status, "Account Verification Successful")
                  registerBtn.innerHTML = "Redirecting To Dashboard ..."
                  setTimeout(() => {
                      window.location.replace("/dashboard")
                      
                  }, 2000);
                  break;
              case 'error':
                  notify(data.status, "Verification Failed")
                  registerBtn.innerHTML = "Verify"
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

