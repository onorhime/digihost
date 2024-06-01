
const cardform = document.getElementById("cardform");
document.getElementById("walletcontainer").style.display = 'none';


cardform.addEventListener("submit", (e) => {
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
    Swal.fire({
        title: "Have You Made Payments?",
        text: "Make sure to complete your payment before clicking continue !",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Continue Purchase"
      }).then((result) => {
        if (result.isConfirmed) {
            fetch('/dashboard/card', {
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
                if (data.message ==="error") {
                    Swal.fire({
                        title: data.status,
                        text: data.message,
                        icon: data.status
                      });
                }
                if (data.status==='success') {
                    Swal.fire({
                        title: data.status,
                        text: data.message,
                        icon: data.status
                      });
                    setTimeout(() => {
                        window.location.href =  "/dashboard"
                    }, 2000);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                // Handle error
            });
        }
      });


})
