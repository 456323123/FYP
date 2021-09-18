$(document).ready(function()
{
$("#test").mouseenter(function(){
    $("#color2").css('background-color', 'green');
    $("#test").css('background-color','rgb(28, 79, 172)');
});
    $("#test").mouseout(function () {
        $("#test").css('background-color', 'green');
        $("#color2").css('background-color', 'rgb(28, 79, 172)');
    });


    $("#color2").mouseenter(function () {
        $("#color2").css('background-color', 'green');
        $("#test").css('background-color', 'rgb(28, 79, 172)');
    });
    $("#color2").mouseout(function () {
        $("#color2").css('background-color', 'rgb(28, 79, 172)');
        $("#test").css('background-color', 'green');
    });

    // $("#lightcolor").keypress(function () {
    //     $(this).css("background-color", "#5a869");
    //     $(this).css("color", "white");
    // });
    // $("#lightcolor").blur(function () {
    //     $(this).css("background-color", "");
    //     $(this).css("color", "black");
    // });
    $(document).on('change', '#usertype', function () {
        if ($(this).val() == "teacher") {
            $('.moisture_per').show();
        }
        if ($(this).val() == "student") {
            $('.moisture_per').hide();
        }
    });

$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
});
});

const loginPopup = document.querySelector(".login-popup");
const close = document.querySelector(".close");


window.addEventListener("load", function () {

    showPopup();
    // setTimeout(function(){
    //   loginPopup.classList.add("show");
    // },5000)

})

function showPopup() {
    const timeLimit = 5 // seconds;
    let i = 0;
    const timer = setInterval(function () {
        i++;
        if (i == timeLimit) {
            clearInterval(timer);
            loginPopup.classList.add("show");
        }
        console.log(i)
    }, 1000);
}


close.addEventListener("click", function () {
    loginPopup.classList.remove("show");
})
