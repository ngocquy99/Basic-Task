// alert('tet ');

// lăng nghe sự kiện bên gui
// click , change keyup ...
$(document).on("change", "#txtHint", function () {
    let value = $(this).val();
    console.log(value);
});

// gửi thông tin qua  controller

//ajax

// axios dung cho vue js


let a = 10
b = 12 ;
function add(a,b){
    return a+b;
}
$(document).on("click", "#btn-send", function () {
    alert (add(a,b));
    $value = $("#txtHint").val();
    let token = $('meta[name="csrf-token"]').attr("content");
    $.ajaxSetup({ headers: { "X-CSRF-TOKEN": token } });
    $.ajax({
        type: "POST",
        url: "/search",
        dataType: "json",
        data: {
            search: $value,
            id: 13,
            email: testgmail.com,
        },
        success: function (rep) {
            $("#list_user").append(rep.data.name + "<br>");
            console.log(rep);
        },
        error: function (rep) {
            console.log(rep);
        },
      
    });
});
let counter = 120;
console.log(typeof(counter)); // "number"

counter = false; 
console.log(typeof(counter)); // "boolean"

counter = "Hi";
console.log(typeof(counter)); // "string"


$(document).on("click", "#send-email", function () {
    let value2 = $("#email_check").val();
    alert("12", value2);

    let token = $('meta[name="csrf-token"]').attr("content");
    $.ajaxSetup({ headers: { "X-CSRF-TOKEN": token } });
    $.ajax({
        type: "post",
        url: "/emailcheck",
        dataType: "json",
        data: {
            emailcheck: value2,
        },
        success: function (rep2) {
            $("#email_checked").append(rep2.data2.email + "<br>");
            console.log(rep2);
        },
        error: function (rep2) {
            console.log(rep2);
        },
    });
});

$(document).on("click", "#searchUser", function () {
    $value3 = $("#usertable").val();
    console.log(value3);
    let token = $('meta[name="csrf-token"]').attr("content");
    $.ajaxSetup({ headers: { "X-CSRF-TOKEN": token } });
    $.ajax({
        type: "GET",
        url: "/tabel/search",
        dataType: "json",
        data: {
            table: value3,
        },
        success: function (rep3) {
            // $("#usertable").append(rep3.data3. );
            // console.log(rep3);
            alert("ajax search");
        },
        error: function (rep3) {
            alert("ajax search");
        },
    });
});


// fetch
