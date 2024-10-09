function loadData(role) {
    const teamInfo = document.getElementById('team-info'); 

    let data = '';

    switch (role) {
        case 'admin':
            data = `
                <h3>Administrator Team</h3>
                <img src="images/admin1.jpeg" class="team-photo" alt="John Doe">
                <p><b>Name:</b> John Doe<br>
                   <b>Email:</b> john.doe@example.com<br>
                   <b>Phone:</b> (123) 456-7890</p>

                <img src="images/admin2.jpeg" class="team-photo" alt="Jane Smith">
                <p><b>Name:</b> Jane Smith<br>
                   <b>Email:</b> jane.smith@example.com<br>
                   <b>Phone:</b> (987) 654-3210</p>

                <img src="images/admin3.jpeg" class="team-photo" alt="Robert Brown">
                <p><b>Name:</b> Robert Brown<br>
                   <b>Email:</b> robert.brown@example.com<br>
                   <b>Phone:</b> (555) 123-4567</p>
            `;
            break;

        case 'support':
            data = `
                <h3>Support Urgent Team</h3>
                <img src="images/urgent1.jpeg" class="team-photo" alt="Emily White">
                <p><b>Name:</b> Emily White<br>
                   <b>Email:</b> emily.white@example.com<br>
                   <b>Phone:</b> (123) 555-7890</p>

                <img src="images/urgent2.jpeg" class="team-photo" alt="Michael Green">
                <p><b>Name:</b> Michael Green<br>
                   <b>Email:</b> michael.green@example.com<br>
                   <b>Phone:</b> (987) 555-3210</p>
            `;
            break;

        case 'operator':
            data = `
                <h3>System Operator</h3>
                <img src="images/operator1.jpeg" class="team-photo" alt="Sarah Johnson">
                <p><b>Name:</b> Sarah Johnson<br>
                   <b>Email:</b> sarah.johnson@example.com<br>
                   <b>Phone:</b> (555) 789-4567</p>
            `;
            break;

        default:
            data = '<p>Please select a valid team.</p>';
    }

    teamInfo.innerHTML = data;
    teamInfo.style.display = 'block'; 
}
