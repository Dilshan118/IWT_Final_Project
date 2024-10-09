function checkPassword(){
    if (document.getElementById("pw").value != document.getElementById("repw").value)
    {
        alert("Password Mismatch!");
    }
    else{
        alert("Success!");
    }
}

function showAlert() {
    alert("Form submitted successfully!");
    return true; 
}

function loadData(id){

    const pkgh = document.getElementById('pkgh');
    const pkgdes1 = document.getElementById('pkgdes1');
    const pkgdes2 = document.getElementById('pkgdes2');
    const pkgimg = document.getElementById('pkgimg');

    switch(id){
        case 'one':
            pkgh.innerHTML="One Time Package";
            pkgdes1.innerHTML="The One-Time Package is perfect for those who require parking for a single occasion. Whether you’re attending a special event, running errands, or simply need a spot for a quick visit, this package provides the ultimate flexibility. With easy payment options, you only pay for the time you use, making it a hassle-free solution for occasional parkers. Enjoy the convenience of knowing you have a reserved space waiting for you, no matter the reason for your visit.";
            
            var pdetails =[];
            pdetails["Light Vehicles"] = 200 ;
            pdetails["Heavy Vehicles"] = 250 ;


            let text = "Rates Per Hour<br/><br><ul>";

            for(let x in pdetails)
            {
                text +="<li>" +  x  + ": RS." + pdetails[x] + "</li>" ;
            }

            pdetails += "<ul>";

            pkgdes2.innerHTML = text;
            pkgimg.src ="images/pkg1.webp";

            break;

        case 'week':
            pkgh.innerHTML="Weekly Package";
            pkgdes1.innerHTML="The Weekly Package is ideal for individuals who need parking for a short-term period but require a reserved spot for a full week. Whether you're visiting the area for a business trip, an extended stay, or simply need consistent parking for a temporary period, this package offers convenience and reliability.";
            
            var pkgcontent =["Enjoy unlimited access to a reserved parking spot for a week","Skip the hassle of daily bookings, ensuring you always have a space available.","Easily manage and modify your parking preferences throughout a week via our user-friendly online platform."];
            
            let wcontent = "<ul>";

            for(let wc in pkgcontent)
            {
                wcontent += "<li>" + pkgcontent[wc] + "</li>" ;
            }
            wcontent += "</ul>";

            var pdetails =[];
            pdetails["Light Vehicles"] = 1000 ;
            pdetails["Heavy Vehicles"] = 1500 ;

            let Wtext = "Rates Per Week<br/><br><ul>";

            for(let w in pdetails)
            {
                Wtext += "<li>" + w + ": RS." + pdetails[w] + "</li>" ;
            }

            Wtext += "</ul>";

            pkgdes2.innerHTML =wcontent +  Wtext;
            pkgimg.src ="images/pkg2.webp";

            break;

        case 'month':
            pkgh.innerHTML="Monthly Package";
            pkgdes1.innerHTML="The Weekly Package is ideal for individuals who need parking for a short-term period but require a reserved spot for a full week. Whether you're visiting the area for a business trip, an extended stay, or simply need consistent parking for a temporary period, this package offers convenience and reliability.<br/>This package is perfect for travelers, temporary workers, or visitors who need a parking solution that balances flexibility and cost-effectiveness over the course of a week. Experience seamless parking with PARK PAL SWIFT and avoid the worry of finding a spot every day!<br>";
            
            var pkgcontent =["Enjoy unlimited access to a reserved parking spot for a month","Skip the hassle of daily bookings, ensuring you always have a space available.","Easily manage and modify your parking preferences throughout the month via our user-friendly online platform."];
            
            let Mcontent = "<ul>";

            for(let mc in pkgcontent)
            {
                Mcontent += "<li>" + pkgcontent[mc] + "</li>" ;
            }
            Mcontent += "</ul>";

        

            var pdetails =[];
            pdetails["Light Vehicles"] = 1200 ;
            pdetails["Heavy Vehicles"] = 1800 ;


            let Mtext = "Rates Per Month<br/><br><ul>";

            for(let m in pdetails)
            {
                Mtext += "<li>" + m +": RS." + pdetails[m] + "<br/>" ;
            }

            Mtext += "</ul>";
            pkgdes2.innerHTML =Mcontent + "<br/>" + Mtext;
            pkgimg.src ="images/pkg3.webp";

            break;

        case '3month':
                    pkgh.innerHTML="3Months Package";
                    pkgdes1.innerHTML="The 3-Month Package is ideal for those seeking a longer-term parking solution without committing to an entire year. This package is perfect for seasonal workers, extended travelers, or anyone who needs a guaranteed parking spot for three months. With this package, you enjoy uninterrupted parking access for 90 days, ensuring you never have to worry about daily reservations. Benefit from the convenience of having a reserved parking space, cost savings compared to monthly rates, and full flexibility to manage your parking needs through our online platform. Choose the 3-Month Package and experience stress-free parking for the entire season!<br>";
                    
                    var pkgcontent =["Enjoy unlimited access to a reserved parking spot for 3months days.","Skip the hassle of daily bookings, ensuring you always have a space available.","Easily manage and modify your parking preferences throughout the 3months via our user-friendly online platform."];
                    
                    let M3content = "<ul>";

                    for(let m3 in pkgcontent)
                    {
                        M3content += "<li>" + pkgcontent[m3] + "</li>" ;
                    }
                    M3content += "</ul>";

                

                    var pdetails =[];
                    pdetails["Light Vehicles"] = 4000 ;
                    pdetails["Heavy Vehicles"] = 6000 ;


                    let M3text = "Rates Per Month<br/><br><ul>";

                    for(let mt3 in pdetails)
                    {
                        M3text += "<li>" + mt3 +": RS." + pdetails[mt3] + "<br/>" ;
                    }

                    M3text += "</ul>";
                    pkgdes2.innerHTML =M3content + "<br/>" + M3text;
                    pkgimg.src ="images/pkg4.webp";

                    break;


    }
}