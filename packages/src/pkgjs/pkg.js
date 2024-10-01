function loadData(id) {

    const pkgh = document.getElementById('pkgh');
    const pkgdes1 = document.getElementById('pkgdes1');
    const pkgdes2 = document.getElementById('pkgdes2');
    const pkgimg = document.getElementById('pkgimg');

    switch (id) {
        case 'one':
            pkgh.innerHTML = "One Time Package<br/>";
            pkgdes1.innerHTML = "The One-Time Package is perfect for those who require parking for a single occasion. Whether you’re attending a special event, running errands, or simply need a spot for a quick visit, this package provides the ultimate flexibility. With easy payment options, you only pay for the time you use, making it a hassle-free solution for occasional parkers. Enjoy the convenience of knowing you have a reserved space waiting for you, no matter the reason for your visit.<br/><br/>";

            var pdetails = [];
            pdetails["Light Vehicles"] = 200;
            pdetails["Heavy Vehicles"] = 250;

            let text = "<h3>Rates Per Hour</h3><br><ul>";
            for (let x in pdetails) {
                text += "<li>" + x + ": RS." + pdetails[x] + "</li>";
            }
            text += "</ul>";

            pkgdes2.innerHTML = text;
            pkgimg.src = "pkgimages/one.jpeg"; 
            break;

        case 'week':
            pkgh.innerHTML = "Weekly Package<br/>";
            pkgdes1.innerHTML = "The Weekly Package is ideal for individuals who need parking for a short-term period but require a reserved spot for a full week. Whether you're visiting the area for a business trip, an extended stay, or simply need consistent parking for a temporary period, this package offers convenience and reliability.<br/><br/>";

            var pkgcontent = [
                "Enjoy unlimited access to a reserved parking spot for a week", 
                "Skip the hassle of daily bookings, ensuring you always have a space available.", 
                "Easily manage and modify your parking preferences throughout a week via our user-friendly online platform."
            ];

            let wcontent = "<ul>";
            for (let wc in pkgcontent) {
                wcontent += "<li>" + pkgcontent[wc] + "</li>";
            }
            wcontent += "</ul>";

            var pdetails = [];
            pdetails["Light Vehicles"] = 1000;
            pdetails["Heavy Vehicles"] = 1500;

            let Wtext = "<br/><br/><h3>Rates Per Week</h3><br><ul>";
            for (let w in pdetails) {
                Wtext += "<li>" + w + ": RS." + pdetails[w] + "</li>";
            }
            Wtext += "</ul>";

            pkgdes2.innerHTML = wcontent + Wtext;
            pkgimg.src = "pkgimages/one.jpeg";   
            break;

        case 'month':
            pkgh.innerHTML = "Monthly Package<br/>";
            pkgdes1.innerHTML = "The Monthly Package is ideal for individuals who need parking for an entire month, providing a reserved spot without the hassle of daily bookings. This package offers flexibility and cost-effectiveness over an extended period.<br/><br/>";

            var pkgcontent = [
                "Enjoy unlimited access to a reserved parking spot for a month", 
                "Skip the hassle of daily bookings.", 
                "Easily manage your parking preferences via our user-friendly online platform."
                

            ];

            let Mcontent = "<ul>";
            for (let mc in pkgcontent) {
                Mcontent += "<li>" + pkgcontent[mc] + "</li>";
            }
            Mcontent += "</ul>";

            var pdetails = [];
            pdetails["Light Vehicles"] = 12000;
            pdetails["Heavy Vehicles"] = 18000;

            let Mtext = "<br/><br/><h3>Rates Per Month</h3><br><ul>";
            for (let m in pdetails) {
                Mtext += "<li>" + m + ": RS." + pdetails[m] + "</li>";
            }
            Mtext += "</ul>";

            pkgdes2.innerHTML = Mcontent + "<br/>" + Mtext;
            pkgimg.src = "pkgimages/one.jpeg"; 

            break;

        case '3month':
            pkgh.innerHTML = "3 Months Package<br/>";
            pkgdes1.innerHTML = "The 3-Month Package is ideal for those seeking a longer-term parking solution without committing to an entire year. This package provides uninterrupted parking access for 90 days.<br/><br/>";

            var pkgcontent = [
                "Enjoy unlimited access to a reserved parking spot for 3 months.", 
                "Skip the hassle of daily bookings.", 
                "Easily manage your parking preferences through our online platform."
            ];

            let M3content = "<ul>";
            for (let m3 in pkgcontent) {
                M3content += "<li>" + pkgcontent[m3] + "</li>";
            }
            M3content += "</ul>";

            var pdetails = [];
            pdetails["Light Vehicles"] = 4000;
            pdetails["Heavy Vehicles"] = 6000;

            let M3text = "<br/><br/><h3>Rates Per 3 Months</h3><br/><ul>";
            for (let mt3 in pdetails) {
                M3text += "<li>" + mt3 + ": RS." + pdetails[mt3] + "</li>";
            }
            M3text += "</ul>";

            pkgdes2.innerHTML = M3content + "<br/>" + M3text;
            pkgimg.src = "pkgimages/one.jpeg";   

            break;

        case 'yearly':
            pkgh.innerHTML = "Yearly Package<br/>";
            pkgdes1.innerHTML = "Our Yearly Package is the ultimate solution for drivers seeking both convenience and exceptional value. Secure a dedicated parking space for the entire year.<br/><br/>";

            var pkgcontent = [
                "Significant Savings.", 
                "Guaranteed Availability.", 
                "Flexibility.", 
                "Seamless Experience", 
                "Exclusive Member Perks"
            ];

            let year = "<ul>";
            for (let y in pkgcontent) {
                year += "<li>" + pkgcontent[y] + "</li>";
            }
            year += "</ul>";

            var pdetails = [];
            pdetails["Light Vehicles"] = 14400;
            pdetails["Heavy Vehicles"] = 21600;

            let ytext = "<br/><br/><h3>Rates Per Year</h3><br/><ul>";
            for (let yt in pdetails) {
                ytext += "<li>" + yt + ": RS." + pdetails[yt] + "</li>";
            }
            ytext += "</ul>";

            pkgdes2.innerHTML = year + "<br/>" + ytext;
            pkgimg.src = "pkgimages/one.jpeg"; 

            break;
    }
}
