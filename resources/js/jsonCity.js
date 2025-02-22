document.addEventListener("DOMContentLoaded", function() {
    fetch("/api/cities")
        .then(response => response.json())
        .then(data => {
            let select = document.getElementById("loation");
            select.innerHTML = '<option value="" disabled selected>Select a city</option>';
            data.forEach(city => {
                let option = document.createElement("option");
                option.value = city;
                option.textContent = city;
                select.appendChild(option);
            });
        })
        .catch(error => console.error("Error fetching cities:", error));
});