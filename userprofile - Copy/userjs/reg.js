function checkPassword()
{
    if (document.getElementById("pw").value != document.getElementById("repw").value)//check pw not match
    {
        alert("Password Mismatch!");
        return false;
    }

    else{
        alert("Success!");
        return true;
    }
}

function enableButton()
{
    if(document.getElementById("privacy").checked)
    {
        document.getElementById("Submit").disabled = false;
    }

    else    
    {
        document.getElementById("Submit").disabled = true;
    }
}