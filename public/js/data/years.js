
$("#trigger").click(function () {
    var url = "data/years.php"; // the script where you handle the form input.

    $.ajax({
        type: "POST",
        url: url,
        data: $("#myform").serialize(), // serializes the form's elements.
        success: function (data) {
            // show response from the php script.
            $("#years").text(data);
            $("input[value=years").val(data);
        }
    });

    return false; // avoid to execute the actual submit of the form.
});
