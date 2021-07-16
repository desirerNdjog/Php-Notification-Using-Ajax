$(document).ready(function () {
  setInterval(function () {
    load_last_notification();
  }, 5000); 

  function load_last_notification() {
    $.ajax({
      url: "Messages.php",
      method: "POST",
      success: function (data) {
        $(".content").html(data);
      },
    });
  }

  $("#comment_form").on("submit", function (event) {
    event.preventDefault();
    if ($("#subject").val() != "" && $("#comment").val() != "") {
      var form_data = $(this).serialize();
      $.ajax({
        url: "insert.php",
        method: "POST",
        data: form_data,
        success: function (data) {
          $("#comment_form")[0].reset();
        },
      });
    } else {
      alert("remplir tous les champs");
    }
  });
});
