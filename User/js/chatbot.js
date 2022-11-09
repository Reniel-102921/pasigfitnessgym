// Collapsible
var coll = document.getElementsByClassName("collapsible");

for (let i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");

    var content = this.nextElementSibling;

    if (content.style.maxHeight) {
      content.style.maxHeight = null;
      $(coll).css('background-color', 'rgb(255,159,15)');
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
      $(coll).css('background-color', '#ffc480');
    }

  });
}

// Once chatbot open
$(document).ready(function() {
  $("#send-btn").on("click", function() {
    $value = $("#data").val();
    $msg = '<div class="user-inbox inbox"> <div class="msg-header"> <p>' + $value + '</p></div></div>';
    $(".form").append($msg);
    $("#data").val('');
    // start ajax code
    $.ajax({
      url: 'message.php',
      type: 'POST',
      data: 'text=' + $value,
      success: function(result) {
        $replay = '<div class="bot-inbox inbox"><div class="icon">  <img  class="icon" src="Image/bot.jpg" ></div><div class="msg-header"><p>' + result + '</p></div></div>';
        $(".form").append($replay);
        // when chat goes down the scroll bar automatically comes to the bottom
        $(".form").scrollTop($(".form")[0].scrollHeight);
      }
    });
  });
});

  /*enter keyboard for chatbot*/
  var input = document.getElementById("data");
  input.addEventListener("keypress", function(event) {
    if (event.key === "Enter") {
      event.preventDefault();
      document.getElementById("send-btn").click();
    }
  });


// Hiding and showing content
$(document).ready(function() {
  // Hide the div
  $(".intro").hide();
  // Show the div in 4s
  $(".gif").delay(2000).fadeIn(200);
  $(".intro").delay(1500).fadeIn(200);
  $(".chatbot-icon").delay(2000).fadeIn(200);
  $(".loading-buffer").hide(1000);
});

$(document).ready(function() {
// Trigger the hidden form for calculating BMI
const btnIcon = document.querySelector("#Calculate");
const msg = document.querySelector(".msg");
const calculate = document.querySelector(".calculate-button");
const resultcolor = document.querySelector(".result");
const hiddenbtn = document.querySelector("#Calculates");

btnIcon.addEventListener("click", function(e) {
  e.preventDefault();

  $('.remove').css('display', 'block');
  $(".calculator-container").show();

  // $(".form").scrollTop(100);
  $("#Calculate").hide();
  $("#Calculates").show();

  // After clicking the btn this button it will show
  hiddenbtn.addEventListener('click', function(e) {
    e.preventDefault();

    $(".calculator-container").css('display', 'block');
    $("#Calculates").hide();
    $("#Calculate").show();
    $(".form").scrollTop($(".form")[0].scrollHeight);
    console.log("second button");
  });//And after this button it will hide itself and show the btn(button)

  // Once the calculate(btn) button clicked
  calculate.addEventListener('click', function(e) {
    e.preventDefault();

    if (heightInput.value.length === 0 || weightInput.value.length === 0) {
      $(".msg").delay(100).fadeIn();
      msg.innerHTML = "<p class='error'> Please complete details </p>";
      msg.style.color = "red";
      setTimeout(() => document.querySelector(".error").remove(), 1500);

    } else {
      // $(".calculator-container").css('display', 'none');
      $(".BMI-result").delay(500).fadeIn();

      // For its specific BMI
      if ((BMI > 1) && (BMI < 18.5)) {
        resultcolor.style.color = "blue";
        // $(".bot-inbox").displayAfter(".BMI-result");
        $(".bot-inbox").delay(2000).fadeIn(200);
        $(".icon").delay(2000).fadeIn(200);
        $("#underweight").delay(2000).fadeIn(200);
        $("#program1").delay(3000).fadeIn(200);
        $(".form").scrollTop(0);
        $(".form").scrollTop($(".form")[0].scrollHeight);
        console.log("underweight");
      } else {
        $(".bot-inbox").hide();
        $(".icon").hide();
        $("#underweight").hide();
        $("#program1").hide();
        $(".form").scrollTop($(".form")[0].scrollHeight);
        console.log("hide");
      }

      if ((BMI > 18.5) && (BMI < 24.9)) {
        resultcolor.style.color = "green";
        $(".bot-inbox").delay(2000).fadeIn(200);
        $(".icon").delay(2000).fadeIn(200);
        $("#normal").delay(2000).fadeIn(200);
        $("#program2").delay(3000).fadeIn(200);
        $(".form").scrollTop($(".form")[0].scrollHeight);
        console.log("normal");
      } else {
        $(".bot-inbox").hide();
        $(".icon").hide();
        $("#normal").hide();
        $("#program2").hide();
        $(".form").scrollTop($(".form")[0].scrollHeight);
        console.log("hide");
      }

      if ((BMI > 25) && (BMI < 29.9)) {
        resultcolor.style.color = "yellow";
        $(".bot-inbox").delay(2000).fadeIn(200);
        $(".icon").delay(2000).fadeIn(200);
        $("#overweight").delay(2000).fadeIn(200);
        $("#program3").delay(3000).fadeIn(200);
        $(".form").scrollTop($(".form")[0].scrollHeight);
        console.log("overweight");
      } else {
        $(".bot-inbox").hide();
        $(".icon").hide();
        $("#overweight").hide();
        $("#program3").hide();
        $(".form").scrollTop($(".form")[0].scrollHeight);
        console.log("hide");
      }

      if (BMI > 30) {
        resultcolor.style.color = "red";
        $(".bot-inbox").delay(2000).fadeIn(200);
        $(".icon").delay(2000).fadeIn(200);
        $("#obese").delay(2000).fadeIn(200);
        $("#program4").delay(3000).fadeIn(200);
        $(".form").scrollTop($(".form")[0].scrollHeight);
        console.log("obese");

      } else {
        $(".bot-inbox").hide();
        $(".icon").hide();
        $("#obese").hide();
        $("#program4").hide();
        $(".form").scrollTop($(".form")[0].scrollHeight);
        console.log("hide");
      }
    }
  });
});
});

$(document).ready(function() {
  let bar = $(".progress-bar");
  let percent  = $(".percent");
  let progress = $(".progress");

    $("#form-upload").ajaxForm({
        beforeSend: function(){
            progress.css('display', 'block');
            let percentVal = '0%';
            bar.width(percentVal);
            percent.html(percentVal);
        },
        uploadProgress: function(event, position, total, percentComplete){
            let percentVal = percentComplete + '%';
            bar.width(percentVal);
            percent.html(percentVal);
        },
        complete: function(){
        }
    });
  });

  const enroll = document.querySelector("#sumbit-register");
  const upload = document.querySelector("#upload");
  const myfile = document.querySelector("#myfile");

  upload.addEventListener('click', function(e){
    e.preventDefault();

    if(myfile.files.length == 0) {
      $(".label").delay(500).fadeIn();
      label.innerHTML = "<p class='error'> Please upload receipt </p>";
      label.style.color = "red";
      setTimeout(() => document.querySelector(".error").remove(), 3000);

    }else{
        $(".imageupload").hide();
        $(".col-12").show();
      }
  });