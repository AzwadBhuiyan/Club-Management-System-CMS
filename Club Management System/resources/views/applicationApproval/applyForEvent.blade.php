<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CMS</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/applyForEvent.css') }}">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="{{ asset('css/privateTest.css') }}"> -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</head>

<body>

<div class="site-wrap">

  {{-- nav bar --}}
  @include('menu.navBar')
  
  {{-- nav bar end--}}


<div class="signup-container">
  
  <div class="right-container bg-light p-4">
      <h2 class="mx-auto">Apply for Event</h2>
      <b>N.B. Write a clearly understandable application for best results </b>
      
      <div class="set">
        <div class="eventName">
          <label for="eventName">Event Name</label>
          <input id="eventName" placeholder="Your event's name" type="text"></input>
        </div>      
      </div>

      <div class="set">
        <div class="eventType">
          <label for="eventType">Event Type</label>
          <select id="eventType" name="eventType">
            <option value="Activation">Seminar</option>
            <option value="Activation">Festival</option>
            <option value="Activation">Exhibitions</option>
            <option value="Activation">Workshop</option>
            <option value="Activation">Sports</option>
            <option value="Activation">Competition</option>
            <option value="Activation">Charity</option>
            <option value="Activation">Show</option>
            <option value="Activation">Party</option>
            <option value="Activation">Activation</option>
            <option value="Cultural">Cultural</option>
          </select>
        </div>

        <div class="eventDate">
          <label for="eventDate">Event Date</label>
          <input id="eventDate" type="date"></input>
        </div>
      </div>

      <div class="setSummary">
        <div class="eventSummary">
          <label for="eventSummary">Event Summary</label>
          <textarea name="eventSummary" id="eventSummary" placeholder="Write a short description about the event" cols="30" rows="2"></textarea>
        </div>      
      </div>

    <div class="departments">
    <label for="selectDepartments">Select Departments</label>
    <br>
    <div class="checkbox-container">
      <input id="selectDepartmentsFacilities" name="selectDepartments" type="checkbox" value="0-25"></input>
        <label for="selectDepartmentsFacilities">Facilities</label>
      <input id="selectDepartmentsONM" name="selectDepartments" type="checkbox" value="25-50"></input>
        <label for="selectDepartmentsONM">ONM</label>
      <input id="selectDepartmentsMPR" name="selectDepartments" type="checkbox" value="50-100"></input>
        <label for="selectDepartmentsMPR">MPR</label>
      <input id="selectDepartmentsSecurity" name="selectDepartments" type="checkbox" value="100+"></input>
        <label for="selectDepartmentsSecurity">Security</label>
      <input id="selectDepartmentsCITS" name="selectDepartments" type="checkbox" value="100+"></input>
        <label for="selectDepartmentsCITS">CITS</label>
      <input id="selectDepartmentsFinance" name="selectDepartments" type="checkbox" value="100+"></input>
        <label for="selectDepartmentsFinance">Finance</label>
      <input id="selectDepartmentsCGPAR" name="selectDepartments" type="checkbox" value="100+"></input>
        <label for="selectDepartmentsCGPAR">CGPAR</label>
      <input id="selectDepartmentsAdministration" name="selectDepartments" type="checkbox" value="100+"></input>
        <label for="selectDepartmentsAdministration">Administration</label>
      <input id="selectDepartmentsCouncil" name="selectDepartments" type="checkbox" value="100+"></input>
        <label for="selectDepartmentsCouncil">Council Affairs</label>
    </div>
  </div>


    <!-- <div class="drop-container">
        <label for="images" >
        <span class="drop-title">Drop files here</span>
        <br>
        &emsp; &emsp; &emsp; or
        <input type="file" id="images" accept="image/*" required>
        </label>
    </div> -->

<div class="dropContainer">
  <form class="form">
    <div class="file-upload-wrapper" data-text="Select your file or drag it here">
      <input name="file-upload-field" type="file" class="file-upload-field" value="">
    </div>
  </form>
</div>


    
    <button id="next" class="submit-button mx-auto m-3">Submit</button>
   
</div>
</div>
</div>




{{-- footer --}}
     @include('menu.footer')
      {{-- footer end--}}

  

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

<script>

  $("form").on("change", ".file-upload-field", function(){ 
    $(this).parent(".file-upload-wrapper").attr("data-text",         $(this).val().replace(/.*(\/|\\)/, '') );
});

</script>

    
</body>

</html>
