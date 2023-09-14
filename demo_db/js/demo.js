document.addEventListener("DOMContentLoaded", function () {
    const displaySection = document.getElementById("display");

    // Function to fetch and display student data
    function fetchAndDisplayStudentData() {
        // Fetch student data from select.php
        fetch("app/select.php")
            .then(response => response.text())
            .then(data => {
                // Display the retrieved data in the displaySection
                displaySection.innerHTML = data;
            })
            .catch(error => {
                console.error("Error:", error);
            });
    }

    // Initial fetch and display when the page loads
    fetchAndDisplayStudentData();

    const form = document.getElementById("insert-form");

    form.addEventListener("submit", function (event) {
        event.preventDefault();

        const name = document.getElementById("name").value.trim();
        const age = document.getElementById("age").value.trim();
        const address = document.getElementById("address").value.trim();
        const contact = document.getElementById("contact").value.trim();

        if (name === "" || age === "" || address === "" || contact === "") {
            alert("All fields must be filled out.");
            return;
        }

        const formData = new FormData();
        formData.append("name", name);
        formData.append("age", age);
        formData.append("address", address);
        formData.append("contact", contact);

        fetch("app/insert.php", {
            method: "POST",
            body: formData,
        })
        .then(response => response.text())
        .then(data => {
            // Display a success message or handle any response from the server here
            console.log(data);
            // Fetch and display updated student data
            fetchAndDisplayStudentData();
        })
        .catch(error => {
            console.error("Error:", error);
        });

        form.reset();
    });
});


