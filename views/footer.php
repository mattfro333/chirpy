<!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<footer>
        <p>&copy; Robs Website 2020</p>
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Chirpy</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
         <h4 class="modal-title" id="loginModalTitle">Login</h4>

       </div>
       <div class="modal-body">
 <form>
   <input type="hidden" id="loginActive" name="loginActive" value="1">
   <div class="form-group">
     <label for="email">Email address</label>
     <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
     <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
   </div>
   <div class="form-group">
     <label for="password">Password</label>
     <input type="password" class="form-control" id="password" placeholder="Password">
   </div>
   <div class="form-check">
     <input type="checkbox" class="form-check-input" id="exampleCheck1">
     <label class="form-check-label" for="exampleCheck1">Check me out</label>
   </div>
   <button type="button" class="btn btn-primary" id="loginSignupButton">Login</button>
 </form>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="button" class="btn btn-primary" id="toggleLogin">Sign Up</button>
       </div>
     </div>
   </div>
 </div>
 <script>

 $('#toggleLogin').click(function(){
   if($("#loginActive").val() == "1"){

      $("#loginActive").val("0");
      $("#loginModalTitle").html("Sign Up");
      $("#loginSignupButton").html("Sign Up");
      $("#toggleLogin").hide();

   } else {
     $("#loginActive").val("1");
     $("#loginModalTitle").html("Sign Up");
     $("#loginSignupButton").html("Sign Up");
     $("#toggleLogin").hide();
   }
 })
 $("#loginSignupButton").click(function(){
   $.ajax({
        type: "POST",
        url: "actions.php?action=loginSignup",
        data: "email=" + $("#email").val() +
   "&password=" + $("#password").val() + "&loginActive=" +
   $("#loginActive").val(),
            success: function(result) {
                alert(result)
            }

   })
 })
 </script>

</body>
</html>
