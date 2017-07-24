
<html>
  <head>
    
    <title class="title">Step by step form template</title>
  
   
   <meta charset="uft-8">
   
   <meta name="viewport" content="width=device-width, initial-scale=1">
 
   <link rel="stylesheet" href="/step_by_step_form.css">  
  
   <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
 

       
  </head>


<div class="modal-wrap">
  <div class="modal-header"><span class="is-active"></span><span></span><span></span><span></span></div>
  <div class="modal-bodies">
    <div class="modal-body modal-body-step-1 is-showing">
      <div class="title">Step 1</div>
      <div class="description">Hello there, would you like to place an order?</div>
      <form></form>
      <input type="text" placeholder="Name"/>
      <input type="text" placeholder="Address"/>
      <div class="text-center">
        <div class="button">Start</div>
      </div>
    </div>
    <div class="modal-body modal-body-step-2">
      <div class="title">Step 2</div>
      <div class="description">Select a restaurant.</div>
      <form>
        <label>
          <input type="radio" name="radio"/>Sweet Beans n Things
        </label>
        <label>
          <input type="radio" name="radio" id="radio2"/>Pizza Hut
        </label>
        <div class="text-center fade-in">
          <div class="button">Next</div>
        </div>
      </form>
    </div>
    <div class="modal-body modal-body-step-3">
      <div class="title">Step 3</div>
      <div class="description">Select food.</div>
      <div class="text-center">
        <div class="button">Next</div>
      </div>
    </div>
    <div class="modal-body modal-body-step-4">
      <div class="title">Step 4 </div>
      <div class="description">Pay</div>
      <div class="text-center">
        <div class="button">Pay   </div>
      </div>
    </div>
  </div>
</div>
<div class="text-center">
  <div class="rerun-button">Place a new order.</div>
</div>

   <script type="text/javascript" src="/step_by_step_form.js"></script>

</html>