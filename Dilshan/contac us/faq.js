// Function to load the FAQ content dynamically
function loadFAQ() 
{
  const faqContent = document.getElementById('faq-content-para');
  faqContent.innerHTML = `
    <h3>1. What is the parking duration limit?</h3>
    <p>The parking duration is limited to 3 hours for non-residents. Longer durations require a permit.</p>

    <h3>2. How do I get a parking permit?</h3>
    <p>You can apply for a parking permit at the office or through the online application form available on the parking page.</p>

    <h3>3. What are the parking fees?</h3>
    <p>Parking fees vary depending on the duration and the type of vehicle. Please contact the office for specific rates.</p>

    <h3>4. Is parking available for larger vehicles like trucks or vans?</h3>
    <p>Yes, but there are designated areas for larger vehicles. Please inquire at the parking office for details.</p>

    <h3>5. Who do I contact for further inquiries?</h3>
    <p>For additional questions, you can contact the parking office via email at parking@domain.com or call us at 123-456-7890.</p>
  `;
}

