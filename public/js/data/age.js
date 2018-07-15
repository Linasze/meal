
$("#trigger").click(function () {
    var url = "data/age.php"; // the script where you handle the form input.

    $.ajax({
        type: "POST",
        url: url,
        data: $("#myform").serialize(), // serializes the form's elements.
        success: function (data) {
            // show response from the php script.
            $("#age").text(data);
            $("input[value=age").val(data);
        }
    });

    return false; // avoid to execute the actual submit of the form.
});