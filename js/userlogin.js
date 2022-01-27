document.addEventListener('DOMContentLoaded', function() {
    var user=<?php echo $_SESSION['id']; ?>;
     localStorage.setItem("id", user);  
 }, false);

$(document).ready(function(){

    var user_type='<?php echo $user_type; ?>';

    if( user_type=="Admin"){
      
    }
    else if(user_type=="Marketing"){

      $("#Home").css("display","none");
      $("#Operation").css("display","none");
      $("#Admin").css("display","none");
      $("#operation").css("display","none");
      $("#home").css("display","none");
      $("#admin").css("display","none");
       $("#Marketing").css("display","block");

      //$(window).scrollTop($('#marketing').offset().top);

    }

    else if(user_type=="Operation"){

      $("#Home").css("display","none");
      $("#Marketing").css("display","none");
      $("#Admin").css("display","none");
      $("#marketing").css("display","none");
      $("#home").css("display","none");
      $("#admin").css("display","none");
       $("#Operation").css("display","block");
    }


    var selected = [];
    var table = $("#example").DataTable({
     
        "ajax": 'fetch.php',
       
        columnDefs: [ {
            orderable: false,
            className: 'select-checkbox',
            targets:   0
        } ],
        select: {
          style: 'multi',
            selector: 'td:first-child'
        },
        order: [[ 1, 'asc' ]]
   });
   
   
     
   // Handle form submission event 
    $('#frm-example').on('submit', function(e){
      var form = this;
      
      var rows_selected = table.column(0).checkboxes.selected();

      // Iterate over all selected checkboxes
      $.each(rows_selected, function(index, rowId){
         // Create a hidden element 
         $(form).append(
             $('<input>')
                .attr('type', 'hidden')
                .attr('name', 'id[]')
                .val(rowId)
         );
      });

      // FOR DEMONSTRATION ONLY
      // The code below is not needed in production
      
      // Output form data to a console     
      $('#example-console-rows').text(rows_selected.join(","));
      
      // Output form data to a console     
      $('#example-console-form').text($(form).serialize());
       
      // Remove added elements
      $('input[name="id\[\]"]', form).remove();
       
      // Prevent actual form submission
      e.preventDefault();
    });   
} );

    function openLink(evt, animName) {
      var i, x, tablinks;
      x = document.getElementsByClassName("city");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < x.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" w3-black", "");
      }
      document.getElementById(animName).style.display = "block";
      evt.currentTarget.className += " w3-black";
    }

    
