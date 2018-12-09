$("#trigger").click(function () {
  $("#myModal").modal("show");
});


$("#trigger").click(function () {
  var url = "rezult.php"; // the script where you handle the form input.

  $.ajax({
    type: "POST",
    url: url,
    data: $("#myform").serialize(), // serializes the form's elements.
    success: function (data) {
      // show response from the php script.
      $("#kcal").text(data);
      $("input[value=kcal]").val(data);
    }
  });

  return false; // avoid to execute the actual submit of the form.
});

var sliderHeight = document.getElementById("heightRange");
var outputHeight = document.getElementById("heightValue");
outputHeight.innerHTML = sliderHeight.value;

sliderHeight.oninput = function () {
  outputHeight.innerHTML = this.value;
}

var sliderWeight = document.getElementById("weightRange");
var outputWeight = document.getElementById("weightValue");
outputWeight.innerHTML = sliderWeight.value;

sliderWeight.oninput = function () {
  outputWeight.innerHTML = this.value;
}







