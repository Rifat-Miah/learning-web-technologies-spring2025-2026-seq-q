function ajaxSearch() {
    let term = document.getElementById('search').value;
    let xhttp = new XMLHttpRequest();

    // Point to the dedicated search controller
    xhttp.open('GET', '../controller/search.php?term=' + term, true);
    xhttp.send();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let employees = JSON.parse(this.responseText);
            let table = document.getElementById('employeeTable');
            
            // Clear existing rows except header
            table.innerHTML = "<tr><th>Name</th><th>Contact</th><th>Username</th><th>Action</th></tr>";
            
            employees.forEach(emp => {
                table.innerHTML += `<tr>
                    <td>${emp.name}</td>
                    <td>${emp.contact}</td>
                    <td>${emp.username}</td>
                    <td>Edit | Delete</td>
                </tr>`;
            });
        }
    }
}