const messageform = document.getElementById("messageform")

messageform.addEventListener("submit", (e) => {
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
    document.getElementById("messagebtn").setAttribute("disabled", true)
    fetch('/dashboard/contact', {
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
            title: "Message Sent!",
            text: "Message was received successfully, You Will receive a feedback shortly.",
            icon: "success"
          });
        // Handle success response from backend
    })
    .catch(error => {
        console.error('Error:', error);
        // Handle error
    });
})
