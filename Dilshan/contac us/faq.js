function loadFAQ() 
{
  var faqs = {};  
  faqs["01.How can I reserve a parking spot?"] = "You can reserve a spot through our online booking system.";
  faqs["02.What if I need to cancel my reservation?"] = "You can cancel your reservation 24 hours in advance without any charges.";
  faqs["03.Are there electric vehicle charging stations available?"] = "Yes, we have charging stations for electric vehicles.";
  faqs["04.Is there a monthly parking subscription?"] = "Yes, we offer varius subscription packages.";
  faqs["05.What are your parking facility hours?"] = "We are open 24/7 for parking services.";
  faqs["06.Can I reserve multiple parking spots at once?"] = "Yes, you can reserve multiple spots depending on availability.";
  faqs["07.Do you offer valet parking?"] = "Yes, valet parking services are available from 8 AM to 10 PM.";
  faqs["08.What is the maximum vehicle height allowed?"] = "The maximum vehicle height allowed is 2.1 meters.";
  faqs["09.Is there security for the parking lot?"] = "Yes, our parking lot is monitored 24/7 with CCTV and security personnel.";

  var list = "";  

  for (var question in faqs) 
  {
    list += "<strong>" + question + "</strong><br>" + faqs[question] + "<br><br>"; 
  }

  document.getElementById("faq-content-para").innerHTML=list;
}


//functions for checking the privacy and tearms check box
function checkLength(input)
{
  const phoneError = document.getElementById('phone-error');
  if (input.value.length > 10)
  {
    phoneError.textContent = 'Maximum length is 10 characters.';
  }
  else
  {
    phoneError.textContent='';
  }
}

