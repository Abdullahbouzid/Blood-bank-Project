

var $timerMessage = 3000;

function checkDataDonation() {
    var nameVisitor = document.getElementById('Name_Visitor').value;
    var DOB = document.getElementById('DOB_Visitor').value;
    var Adds = document.getElementById('Adds_Visitor').value;
    var phone = document.getElementById('Ph_Visitor').value;
    var TOB = document.getElementById('TOB_Visitor').value;
    var gender = document.getElementById('Gender_Visitor').value;
    var DOD = document.getElementById('date').value;
    var nameCenter = document.getElementById('Name_Center').value;

    if (nameVisitor && phone && DOB && Adds && TOB && gender && DOD && nameCenter) {
        Swal.fire({
            title: "!احسنت",
            text: "تمت عملية ارسال البيانات بنجاح",
            icon: "success",
            showConfirmButton: false,
            timer: $timerMessage
        });
        return true;
    } else {
        Swal.fire({
            title: "! عذرا",
            text: "من فضلك تأكد من إدخال جميع البيانات بشكل صحيح",
            icon: "warning",
            showConfirmButton: false,
            timer: $timerMessage
        });
        return false;
    }

}

function checkDataRequest() {
    var namePatient = document.getElementById('Name_Patient').value;
    var DOB = document.getElementById('DOB_Patient').value;
    var Adds = document.getElementById('Adds_Patient').value;
    var phone = document.getElementById('Phone_Patient').value;
    var TOB = document.getElementById('TOB_Patient').value;
    var gender = document.getElementById('Gander_Patient').value;
    var state = document.getElementById('State_of_Patient').value;

    if (namePatient && phone && DOB && Adds && TOB && gender && state) {
        Swal.fire({
            title: "!احسنت",
            text: "تمت عملية ارسال البيانات بنجاح",
            icon: "success",
            showConfirmButton: false,
            timer: $timerMessage
        });
        return true;
    } else {
        Swal.fire({
            title: "! عذرا",
            text: "من فضلك تأكد من إدخال جميع البيانات بشكل صحيح",
            icon: "warning",
            showConfirmButton: false,
            timer: $timerMessage
        });
        return false;
    }

}

function checkData_CreateVisitor() {
    var username = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var password_again = document.getElementById('password_again').value;
    var DOB = document.getElementById('DOB_Visitor').value;

    if (username && email && password && password_again && DOB) {
        Swal.fire({
            title: "!احسنت",
            text: "تمت عملية إنشاء الحساب بنجاح",
            icon: "success",
            showConfirmButton: false,
            timer: $timerMessage
        });
        return true;
    } else {
        Swal.fire({
            title: "! عذرا",
            text: "من فضلك تأكد من إدخال جميع البيانات بشكل صحيح",
            icon: "warning",
            showConfirmButton: false,
            timer: $timerMessage
        });
        return false;
    }
}

function getMonthDifference(startDate, endDate) {
    // // Ensure valid Date objects
    // startDate = new Date(startDate);
    // endDate = new Date(endDate);

    // // Get year and month differences
    // const yearDiff = endDate.getFullYear() - startDate.getFullYear();
    // const monthDiff = endDate.getMonth() - startDate.getMonth();

    // // Handle negative month differences (e.g., December to February)
    // if (monthDiff < 0) {
    //     yearDiff--;
    //     monthDiff += 12;
    // }

    // // Calculate and return total months difference
    // return yearDiff * 12 + monthDiff;


}

// // Example usage
// const startDate = new Date("2023-10-25");
// const endDate = new Date("2024-02-18");
// const monthsBetween = getMonthDifference(startDate, endDate);

// console.log(`There are ${monthsBetween} months between ${startDate.toLocaleDateString()} and ${endDate.toLocaleDateString()}.`);

function checkMatch() {
    const firstPass = document.getElementById("password").value;
    const secondPass = document.getElementById("password_again").value;
    const errorMessage = document.getElementById("error-message");


    if (firstPass !== secondPass) {
        errorMessage.style.color = "red";
        errorMessage.textContent = "كلمات المرور المدخلة غير متطابقة !";
        errorMessage.classList.remove("hidden");

        return false;
    } else {
        errorMessage.style.color = "green";
        errorMessage.textContent = "كلمات المرور المدخلة متطابقة";
        errorMessage.classList.add("hidden");

        return true;
    }
}

