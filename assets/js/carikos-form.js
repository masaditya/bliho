function validate() {
  var output = true;
  $(".signup-error").html('');

  if ($("#pemilik-field").css('display') != 'none') {
    if (!($("#nama").val())) {
      output = false;
      $("#nama-error").html("Nama required!");
    }
  }

  if ($("#kost-field").css('display') != 'none') {
    if (!($("#namakos").val())) {
      output = false;
      $("#namakos-error").html("Nama Kos required!");
    }

    if (!($("#jumlah").val())) {
      output = false;
      $("#jumlah-error").html("jumlah required!");
    }

    if (!($("#id_tipe").val())) {
      output = false;
      $("#id_tipe-error").html("Tipe kos required!");
    }
  }

  if ($("#fasilitas-field").css('display') != 'none') {
    output = true;
  }

  if ($("#lokasi-field").css('display') != 'none') {
    if (!($("#alamat").val())) {
      output = false;
      $("#alamat-error").html("Alamat required!");
    }
  }

  return output;
}

$(document).ready(function () {
  $("#next").click(function () {
    var output = validate();
    if (output === true) {
      var current = $(".active");
      var next = $(".active").next("li");
      if (next.length > 0) {
        $("#" + current.attr("id") + "-field").hide();
        $("#" + next.attr("id") + "-field").show();
        $("#back").show();
        $("#finish").hide();
        $(".active").removeClass("active");
        next.addClass("active");
        if ($(".active").attr("id") == $("li").last().attr("id")) {
          $("#next").hide();
          $("#finish").show();
        }
      }
    }
  });


  $("#back").click(function () {
    var current = $(".active");
    var prev = $(".active").prev("li");
    if (prev.length > 0) {
      $("#" + current.attr("id") + "-field").hide();
      $("#" + prev.attr("id") + "-field").show();
      $("#next").show();
      $("#finish").hide();
      $(".active").removeClass("active");
      prev.addClass("active");
      if ($(".active").attr("id") == $("li").first().attr("id")) {
        $("#back").hide();
      }
    }
  });

  $("input#finish").click(function (e) {
    var output = validate();
    var current = $(".active");

    if (output === true) {
      return true;
    } else {
      //prevent refresh
      e.preventDefault();
      $("#" + current.attr("id") + "-field").show();
      $("#back").show();
      $("#finish").show();
    }
  });
});
