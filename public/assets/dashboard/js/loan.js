const loanform = document.getElementById("loanform")

loanform.addEventListener("submit", (e) => {
    e.preventDefault()

    const formData = new FormData(e.target);

    // Convert FormData to JSON
    const jsonObject = {};
    formData.forEach((value, key) => {
        jsonObject[key] = value;
    });

    if(parseInt(jsonObject['amount']) > 2000){
        Swal.fire({
            title: "Error Getting Loan",
            text: "Your Loan Credit Limit Is Below $2000 .",
            icon: "info"
          });
        return
    }

    
    // Convert JSON object to string
    const jsonData = JSON.stringify(jsonObject);

    console.log(jsonData)

    // Send JSON data to Symfony backend controller
    document.getElementById("loanbtn").setAttribute("disabled", true)
    fetch('/dashboard/loan', {
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
        if (data.status==='success') {
            setTimeout(() => {
                window.location.href =  "/dashboard"
            }, 2000);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        // Handle error
    });
})
