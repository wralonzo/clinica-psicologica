</div>
</div>
<div class="px-4 md:px-12 mx-auto w-full -m-24">
  <div class="flex-auto px-4 lg:px-10 py-20 pt-0">
    <div class="text-blueGray-400 text-center mb-3 font-bold">
      <small>Restrar test</small>
    </div>
    <form method="POST" action="<?= base_url() ?>test/registrar" class="confirmar">

      <div class="relative w-full mb-3">
        <label class="block uppercase text-xs text-white font-bold mb-2" for="grid-password">Nombre</label>
        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="nombre" name="nombre" />
      </div>


      <div class="text-center mt-6">
        <div id="main" class="grid grid-rows-1 grid-flow-col">
          <div class="relative w-full mb-3 px-5">
            <a href="<?= base_url() ?>test/display">
              <button type="button" class="bg-blue-600 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150">
                Cancelar
              </button>
            </a>
          </div>
          <div class="relative w-full mb-3 px-5">
            <button class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150" type="submit">
              Guardar Datos
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    $('.confirmar').submit(function(e) {
      e.preventDefault();
      Swal.fire({
        title: "Quiere guardar el registro?",
        text: "Guardar!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonText: 'Cancelar?',
        cancelButtonColor: "#d33",
        confirmButtonText: "Guardar el registro!"
      }).then((result) => {
        if (result.isConfirmed) {
          this.submit();
        }
      });
    });
  })
</script>