$("#changeBreak").click(function (event) {
    event.preventDefault(); // don't "execute" the link

    var $form = $("<form action='dashboards/changeBreak' method='post' style='display: none'>" +
        "<input type='submit' />" +
        "</form>").appendTo($('body'));

    $form.submit();
});
