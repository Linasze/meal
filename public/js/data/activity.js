$("#trigger").click(function () {
    var url = "http://localhost/meal/data/activity.php"; // the script where you handle the form input.

    $.ajax({
        type: "POST",
        url: url,
        data: $("#myform").serialize(), // serializes the form's elements.
        success: function (data) {
            // show response from the php script.
            $("#activity").text(data);
            $("input[value=activity").val(data);
        }
    });

    return false; // avoid to execute the actual submit of the form.
});