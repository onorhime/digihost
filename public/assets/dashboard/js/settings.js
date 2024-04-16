const passwordform = document.getElementById('passwordform')
passwordform.addEventListener("submit", (e) => {
    e.preventDefault()

    const formData = new FormData(e.target);

    // Convert FormData to JSON
    const jsonObject = {};
    formData.forEach((value, key) => {
        jsonObject[key] = value;
    });

    if (jsonObject["newpassword"] != jsonObject["confirm_password"]) {
        Swal.fire({
            title: "Password Error!",
            text: "Passwords do not match",
            icon: "error"
          });
          return
    }
    
    
    // Convert JSON object to string
    const jsonData = JSON.stringify(jsonObject);

    console.log(jsonData)

    // Send JSON data to Symfony backend controller
    
            fetch('/dashboard/settings', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: jsonData,
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                console.log('Success:', data);
                // Handle success response from backend
                if (data.status != 'success') {
                    Swal.fire({
                        title: "Request Failed!",
                        text: "Incorrect Password",
                        icon: "error"
                      });
                      return
                }
                Swal.fire({
                    title: "Password Changed!",
                    text: "Password Was Changed Successfully",
                    icon: "success"
                  });
                  setTimeout(() => {
                    window.location.href = "/dashboard"
                  }, 2000);
            })
            .catch(error => {
                console.error('Error:', error);
                // Handle error
            });
        })
        