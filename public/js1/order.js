
function addOrder() {

let names=document.getElementById("cardholderName").value;
let inputId=document.getElementById("inputId").value;
let inputAddress=document.getElementById("billingAddress").value;
let inputPhone=document.getElementById("phone").value;
let inputCity=document.getElementById("inputCity").value;
let product_id=document.getElementById("product_id").value;

    Swal.fire({
        title: 'Are you sure?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Place order!'


    }).then((result) => {
        if (result.isConfirmed) {
            fetch(`/orderSave/${names}/${inputId}/${inputCity}/${inputPhone}/${inputAddress}/${product_id}`)
                .then(res=>res.json())
                .then(ress=>console.log(ress))
            Swal.fire(
                'APPROVED!',
                'We will contact with you soon ',
                'Thank You',
        ).then(function(){
            window.location.href="/";
        })
        }

    })

}



document.getElementById("phone").onblur= function() {
    let isName = /^\d{10}$/igm.test(document.getElementById("phone").value);
    if(!isName) {
        document.getElementById("spanPhone").innerHTML="* Phone Number Must Be 10 Numbers";
    }
    else {
        document.getElementById("spanPhone").innerHTML="*";
    }
}


document.getElementById("inputId").onblur= function() {
    let isName =  /^\d{10}$/igm.test(document.getElementById("inputId").value);
    if(!isName) {
        document.getElementById("inputIds").innerHTML="* ID  Must 10 Numbers";
    }
    else {
        document.getElementById("inputIds").innerHTML="*";
    }
}



document.getElementById("billingAddress").onblur= function() {
    let isName = /^[a-zA-Z\s0-9-/,]+$/igm.test(document.getElementById("billingAddress").value);
    if(!isName) {
        document.getElementById("billingAddresss").innerHTML="* Address Must Be Letters Only";
    }
    else {
        document.getElementById("billingAddresss").innerHTML="*";
    }
}

document.getElementById("cardholderName").onblur= function() {
    let isName = /^[a-zA-Z\s]+$/igm.test(document.getElementById("cardholderName").value);
    if(!isName) {
        document.getElementById("cardholderNames").innerHTML="* Name Must Be Letters Only";
    } 
    else {
        document.getElementById("cardholderNames").innerHTML="*";
    }
}


document.getElementById("inputCity").onblur= function() {
    let isName = /^[a-zA-Z\s0-9-/,]+$/igm.test(document.getElementById("inputCity").value);
    if(!isName) {
        document.getElementById("inputCitys").innerHTML="* Address Must Be Letters and Number Only";
    }
    else {
        document.getElementById("inputCitys").innerHTML="*";
    }
}

