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

$(document).on("click", "#btn-send", function () {
    $value = $("#txtHint").val();
    let token = $('meta[name="csrf-token"]').attr("content");
    $.ajaxSetup({ headers: { "X-CSRF-TOKEN": token } });
    $.ajax({
        type: "POST",
        url: "/search",
        dataType: "json",
        data: {
            search: $value,
            id: 12,
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
            table : value3,
        },
        success: function (rep3) {
            // $("#usertable").append(rep3.data3. );
            // console.log(rep3);
            alert('ajax search');
        },
        error: function (rep3) {
            alert('ajax search');
        },
    });
});

$(document).on("click", "#pagination", function () {
    $value3 = $("#usertable").val();
    console.log(value4);
    let token = $('meta[name="csrf-token"]').attr("content");
    $.ajaxSetup({ headers: { "X-CSRF-TOKEN": token } });
    $.ajax({
        type: "GET",
        url: "/table",
        dataType: "json",
        data: {
            table : value4,
        },
        success: function (rep4) {
            // $("#usertable").append(rep3.data3. );
            // console.log(rep3);
            alert('pagi success');
        },
        error: function (rep4) {
            alert('pagination not found');
        },
    });
});



// fetch
