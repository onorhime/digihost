const swiftform = document.getElementById("swiftform")
const cryptoform = document.getElementById("cryptoform")
const paypalform = document.getElementById("paypalform")
const internalform = document.getElementById("internalform")

swiftform.addEventListener("submit", (e) => {
    e.preventDefault()

    const formData = new FormData(e.target);

    // Convert FormData to JSON
    const jsonObject = {};
    formData.forEach((value, key) => {
        jsonObject[key] = value;
    });

    jsonObject["withdrawalmethod"] = "swift"
    
    // Convert JSON object to string
    const jsonData = JSON.stringify(jsonObject);

    console.log(jsonData)

    // Send JSON data to Symfony backend controller
    fetch('/dashboard/withdrawal', {
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
        Swal.fire({
            title: `Withdrawal ${data.status}!`,
            text: `${data.message}`,
            icon: `${data.status}`
          });
        // Handle success response from backend
    })
    .catch(error => {
        console.error('Error:', error);
        // Handle error
    });
})


cryptoform.addEventListener("submit", (e) => {
    e.preventDefault()

    const formData = new FormData(e.target);

    // Convert FormData to JSON
    const jsonObject = {};
    formData.forEach((value, key) => {
        jsonObject[key] = value;
    });

    jsonObject["withdrawalmethod"] = "crypto"
    
    // Convert JSON object to string
    const jsonData = JSON.stringify(jsonObject);

    console.log(jsonData)

    // Send JSON data to Symfony backend controller
    
            fetch('/dashboard/withdrawal', {
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
                Swal.fire({
                    title: `Withdrawal ${data.status}!`,
                    text: `${data.message}`,
                    icon: `${data.status}`
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

internalform.addEventListener("submit", (e) => {
    e.preventDefault()

    const formData = new FormData(e.target);

    // Convert FormData to JSON
    const jsonObject = {};
    formData.forEach((value, key) => {
        jsonObject[key] = value;
    });

    jsonObject["withdrawalmethod"] = "internal"
    
    // Convert JSON object to string
    const jsonData = JSON.stringify(jsonObject);

    console.log(jsonData)

    // Send JSON data to Symfony backend controller
    
            fetch('/dashboard/withdrawal', {
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
                Swal.fire({
                    title: `Withdrawal ${data.status}!`,
                    text: `${data.message}`,
                    icon: `${data.status}`
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

paypalform.addEventListener("submit", (e) => {
    e.preventDefault()

    const formData = new FormData(e.target);

    // Convert FormData to JSON
    const jsonObject = {};
    formData.forEach((value, key) => {
        jsonObject[key] = value;
    });

    jsonObject["depositmethod"] = "paypal"
    
    // Convert JSON object to string
    const jsonData = JSON.stringify(jsonObject);

    console.log(jsonData)

    // Send JSON data to Symfony backend controller
    Swal.fire({
        title: "Have You Made Payments?",
        text: "Make sure to complete your payment before clicking continue !",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, Continue!"
      }).then((result) => {
        if (result.isConfirmed) {
            fetch('/dashboard/deposit', {
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
                Swal.fire({
                    title: "Deposit Successful!",
                    text: "Your Deposit was Received and awaiting Confirmation",
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
        }
      });


})