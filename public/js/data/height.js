$("#trigger").click(function () {
    var url = "data/height.php"; // the script where you handle the form input.

    $.ajax({
        type: "POST",
        url: url,
        data: $("#myform").serialize(), // serializes the form's elements.
        success: function (data) {
            // show response from the php script.
            $("#height").text(data);
            $("input[value=height").val(data);
        }
    });

    return false; // avoid to execute the actual submit of the form.
});