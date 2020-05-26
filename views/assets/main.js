// $(document).ready(function() {
//     $('#submit').on('click touch', function(e){
//         e.preventDefault();
//         if($("#psw").val().trim() === 'Canatan') {
//             alert('hello');
//         } else {
//             alert('sorry, no access for you!');
//         }
//
//     });
// });



    // const data = {};
    // const modal = document.getElementById('rsvpForm');
    // const btn = document.getElementById("rsvp");
    // const span = document.getElementsByClassName("close")[0];
    //
    // $(document).on('click touch', '#rsvp', function(e) {
    //   e.preventDefault();
    //   console.log('click');
    //   btn.onclick = function() {
    //   modal.style.display = "block";
    //   }
    //   // When the user clicks on <span> (x), close the modal
    //   span.onclick = function() {
    //     modal.style.display = "none";
    //   }
    //   // When the user clicks anywhere outside of the modal, close it
    //   window.onclick = function(event) {
    //     if (event.target == modal) {
    //       modal.style.display = "none";
    //     }
    //   }
    // });
    //
    // $('#submit').on('click touch', function(e) {
    //   e.preventDefault();
    //   getData();
    //   sendData(data);
    // });
    //
    // getData = function() {
    //   data.childName = $('#childName').val().trim();
    //   data.parent1Name = $('#parent1Name').val().trim();
    //   data.parent1Phone = $('#parent1Phone').val().trim();
    //   data.parent1Email = $('#parent1Email').val().trim();
    //   data.parent2Name = $('#parent2Name').val().trim();
    //   data.parent2Phone = $('#parent2Phone').val().trim();
    //   data.parent2Email = $('#parent2Email').val().trim();
    //   data.numberGuests = $('#numberGuests').val().trim();
    //   data.whoGuests = $('#nameGuests').val().trim();
    //   data.comments = $('#comments').val().trim();
    // }//-ef
    //
    // sendData = function(data) {
    //   console.log("sending .... " , data);
    //   modal.style.display = "none";
    //   $.ajax({
    //     method: "POST",
    //     dataType: "json",
    //     url: "api/invitation.php?action=saveRSVP",
    //     data: {
    //       action: "saveRSVP",
    //       data: data
    //     }
    //   }).
    //   fail(function() {
    //     alert("There was an error connecting to the server[01]");
    //   }).done(function(resp) {
    //     if(resp == 'OK') {
    //       console.log("RSVP saved");
    //     } else {
    //       alert("There was an error connecting to the server[02]");
    //     }
    //   })
    // }//ef
