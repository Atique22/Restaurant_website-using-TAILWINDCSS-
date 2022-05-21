function SIGNUP() {
    let Name = document.getElementById('full-name');
    let Phone = document.getElementById('phone');
    let cnic = document.getElementById('CNIC');
    let email = document.getElementById('email');
    let desig =  document.getElementById('designation');
    let Password =  document.getElementById('Password');
    let Security =  document.getElementById('security');
    if(Name.value.length==0)
    {
        alert("Please enter your complete name...");
    }
    else if(Phone.value.length==0)
    {
        alert("Please enter your complete phone no...");
    }
    else if(cnic.value.length==0)
    {
        alert("Please enter your complete cnic...");
    }
    else if(Password.value.length==0)
    {
        alert("plz enter your Password!");
    }
    else if(email.value.length==0)
    {
        alert("Please enter your complete email...");
    }
    else if(desig.value=='CUSTOMER')
    {
        if(Security.value.length!=0)
        {
            alert("CUSTOMER cant use security!");
        }
        else
        {
            // alert("\n form is submitted! \n");
        }
    }
    else if(desig.value=='MANAGER' || desig.value=='CHEF' || desig.value=='CASHIER' || desig.value=='WAITER')
    {
        if(Security.value.length==0)
        {
            alert("plz enter your security!");
        }
        // alert("\n form is submitted! \n");
    }
    else
    {
        // alert("\n form is submitted! \n");
    }
}


//sign in

function SIGNIN() {

    let emailPhone = document.getElementById('emailPhone');
    let Password =  document.getElementById('password')
   if(emailPhone.value.length==0)
    {
        alert("Please enter your  email/phone no...");
    }
    else if(Password.value.length==0)
    {
        alert("Please enter your correct Security...");
    }
    else
   {
       // alert("login working...!");

   }


}
//CONTACT US

function ContactJS() {

    let Name = document.getElementById('name');
    let Email =  document.getElementById('email');
    let Message =  document.getElementById('message');
    if(Name.value.length==0)
    {
        alert("Please enter your correct Name...");
    }
    else if(Email.value.length==0)
    {
        alert("Please enter your  email/phone no...");
    }
    else if(Message.value.length==0)
    {
        alert("Please enter your COMMENT...");
    }
    else
    {
        alert("SUBMITTED!");

    }


}
