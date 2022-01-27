$(function () {
    $(document).on('click','#login',function(e) {
    e.preventDefault();
        $.ajax({
          type : 'post',
          url : './include/login.php',
          data: $('form').serialize(),
          success: function(data) {
              if(data=='invalid'){
                  console.log(data);
              var x = document.getElementById("snackbar");
              x.innerHTML="Invalid Credentials";
              x.className = "show";
              setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
          }  
          else if(data=='Admin'){
            var x = document.getElementById("snackbar");
            x.innerHTML=" Administrator Authorized";
            x.className = "show";
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
            window.location = '../example/index.php';
            
         }

     
          
           
          
          else if(data=='Operation'){
            var x = document.getElementById("snackbar");
            x.innerHTML="Authorized For Operation";
            x.className = "show";
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
            window.location = '../example/operations.php';
              
        }
        else if(data=='Marketing'){
            var x = document.getElementById("snackbar");
            x.innerHTML="Authorized For Marketing";
            x.className = "show";
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
            window.location = '../example/marketing.php';
        }
         else if(data=='Billing'){
            var x = document.getElementById("snackbar");
            x.innerHTML="Authorized For Operation";
            x.className = "show";
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
            window.location = '../example/billing.php'';
              
        }
        }
        });
      
      });
    });