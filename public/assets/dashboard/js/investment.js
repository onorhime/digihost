const silverform = document.getElementById("silverform")
const goldform = document.getElementById("goldform")
const platinumform = document.getElementById("platinumform")


silverform.addEventListener("submit", (e) => {
    e.preventDefault()

    const formData = new FormData(e.target);

    // Convert FormData to JSON
    const jsonObject = {};
    formData.forEach((value, key) => {
        jsonObject[key] = value;
    });

    
    // Convert JSON object to string
    const jsonData = JSON.stringify(jsonObject);

    console.log(jsonData)

    // Send JSON data to Symfony backend controller
    fetch('/dashboard/investment', {
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
        Swal.fire({
            title: data.status,
            text: data.message,
            icon: data.status
          });
          if (data.status === "success") {
            setTimeout(() => {
                window.location.href = "/dashboard"
            }, 2000);
          }
        // Handle success response from backend
    })
    .catch(error => {
        console.error('Error:', error);
        // Handle error
    });
})


goldform.addEventListener("submit", (e) => {
    e.preventDefault()

    const formData = new FormData(e.target);

    // Convert FormData to JSON
    const jsonObject = {};
    formData.forEach((value, key) => {
        jsonObject[key] = value;
    });
    
    // Convert JSON object to string
    const jsonData = JSON.stringify(jsonObject);

    console.log(jsonData)

    // Send JSON data to Symfony backend controller
    
            fetch('/dashboard/investment', {
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
                    title: data.status,
                    text: data.message,
                    icon: data.status
                  });
                  if (data.status === "success") {
                    setTimeout(() => {
                        window.location.href = "/dashboard"
                    }, 2000);
                  }
            })
            .catch(error => {
                console.error('Error:', error);
                // Handle error
            });
})



platinumform.addEventListener("submit", (e) => {
    e.preventDefault()

    const formData = new FormData(e.target);

    // Convert FormData to JSON
    const jsonObject = {};
    formData.forEach((value, key) => {
        jsonObject[key] = value;
    });

    // Convert JSON object to string
    const jsonData = JSON.stringify(jsonObject);

    console.log(jsonData)

    // Send JSON data to Symfony backend controller
   
            fetch('/dashboard/investment', {
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
                Swal.fire({
                    title: data.status,
                    text: data.message,
                    icon: data.status
                  });
                  if (data.status === "success") {
                    setTimeout(() => {
                        window.location.href = "/dashboard"
                    }, 2000);
                  }
            })
            .catch(error => {
                console.error('Error:', error);
                // Handle error
            });
        })
