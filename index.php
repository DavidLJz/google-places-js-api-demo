<?php 
	$lines = file('.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

	$apikey = explode('=', trim($lines[0]), 2)[1];
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Google Form Autocomplete Demo</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:400,500"
      rel="stylesheet"
    />

    <link rel="stylesheet" type="text/css" href="./style.min.css" />
    <script src="./index.min.js"></script>
  </head>
  <body>
    <form action="" method="get" autocomplete="off">
      <span><em>* = required field</em></span>
      <label class="full-field">

        <span class="form-label">Deliver to*</span>
        <input
          id="ship-address"
          name="ship-address"
          required
          autocomplete="off"
        />
      </label>
      <!-- <label class="full-field">
        <span class="form-label">Apartment, unit, suite, or floor #</span>
        <input id="address2" name="address2" />
      </label> -->
      <label class="full-field">
        <span class="form-label">City*</span>
        <input id="locality" name="locality" required />
      </label>
      <label class="slim-field-left">
        <span class="form-label">State/Province*</span>
        <input id="state" name="state" required />
      </label>
      <label class="slim-field-right" for="postal_code">
        <span class="form-label">Postal code*</span>
        <input id="postcode" name="postcode" required />
      </label>
      <label class="full-field">
        <span class="form-label">Country/Region*</span>
        <input id="country" name="country" required />
      </label>
      <button type="button" id="send">Save address</button>
    </form>

    <script
      src="https://maps.googleapis.com/maps/api/js?key=<?= $apikey ?>&callback=initAutocomplete&libraries=places&v=weekly"
      async
    ></script>
  </body>
</html>