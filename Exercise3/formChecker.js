function validateForm()
{
    let quantityValidation = false;
    let passwordValidation = false;
    let shippingValidation = false;
    let usernameValidation = false;
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let faceQuant = document.getElementById("facialWashQuantity").value;
    let hairQuant = document.getElementById("hairWashQuantity").value;
    let bodyQuant = document.getElementById("bodyWashQuantity").value;
    let free = document.getElementById("free");
    let overnight = document.getElementById("overnight");
    let threeday = document.getElementById("threeday");

    if(faceQuant >= 0 || hairQuant >=0 ||bodyQuant >= 0)
    {
        quantityValidation = true;
    }
    else
    {
        alert("no products have been selected to purchase.");
    }

    if(password === "")
    {
        passwordValidation = false;
    }
    else
    {
        console.log("password is blank.");
        passwordValidation = true;
    }

    if(free.checked || overnight.checked || threeday.checked)
    {
        shippingValidation = true;
    }
    else
    {
        alert("no shipping option selected.")
    }

    ValidateEmail(username);
    if(usernameValidation == true)
    {
        //continue to proccess order
    }
    else
    {
        alert("invalid email address");
    }
}

function ValidateEmail(username) 
{
 if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(form.username.value))
  {
    usernameValidation = true;
  }
  else
  {
    alert("invalid email address");
  }
}

resetForm()
{
    document.location.reload();
    quantityValidation = false;
    passwordValidation = false;
    shippingValidation = false;
    usernameValidation = false;
}