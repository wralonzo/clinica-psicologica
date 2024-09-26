<!-- Card stats -->
<div class="flex flex-wrap">

    <div class="w-full lg:w-6/12 xl:w-6/12 px-4">
        <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
            <a href="<?= base_url() ?>paciente/display">
                <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                            <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                                Pacientes
                            </h5>
                            <span class="font-semibold text-xl text-blueGray-700">
                                <?= $pacientes ?>
                            </span>
                        </div>
                        <div class="relative w-auto pl-4 flex-initial">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-blue-500">
                                <i class="fa fa-solid fa-hospital-user"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-sm text-blueGray-400 mt-4">
                        <span class="text-orange-500 mr-2">
                            <i class="fa-solid fa-hospital-user"></i>
                        </span>
                        <span class="whitespace-nowrap"> Ver pacientes </span>
                    </p>
                </div>
            </a>
        </div>
    </div>
    <div class="w-full lg:w-6/12 xl:w-6/12 px-4">
        <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
            <a href="<?= base_url() ?>cita/display">
                <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                            <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                                Citas
                            </h5>
                            <span class="font-semibold text-xl text-blueGray-700">
                                <?= $citas ?>
                            </span>
                        </div>
                        <div class="relative w-auto pl-4 flex-initial">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-lightBlue-500">
                                <i class="fas fa-clock mr-2 text-sm text-blueGray-300"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-sm text-blueGray-400 mt-4">
                        <span class="text-emerald-500 mr-2">
                            <i class="fas fa-arrow-up"></i>
                        </span>
                        <span class="whitespace-nowrap">
                            Ver citas
                        </span>
                    </p>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="flex flex-wrap py-6">
    <div class="w-full lg:w-6/12 xl:w-6/12 px-4">
        <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
            <a href="<?= base_url() ?>estudiante/display">
                <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                            <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                                Estudiantes
                            </h5>
                            <span class="font-semibold text-xl text-blueGray-700">
                                <?= $estudiantes  ?>
                            </span>
                        </div>
                        <div class="relative w-auto pl-4 flex-initial">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-orange-500">
                                <i class="fas fa-solid fa-user-graduate"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-sm text-blueGray-400 mt-4">
                        <span class="text-red-500 mr-2">
                            <i class="fas fa-arrow-down"></i>
                        </span>
                        <span class="whitespace-nowrap">Ver estudiantes </span>
                    </p>
                </div>
            </a>
        </div>
    </div>

    <div class="w-full lg:w-6/12 xl:w-6/12 px-4">
        <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
            <a href="<?= base_url() ?>test/display">
                <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                            <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                                Tests
                            </h5>
                            <span class="font-semibold text-xl text-blueGray-700">
                                <?= $tests ?>
                            </span>
                        </div>
                        <div class="relative w-auto pl-4 flex-initial">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500">
                                <i class="fas fa-list"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-sm text-blueGray-400 mt-4">
                        <span class="text-emerald-500 mr-2">
                            <i class="fas fa-arrow-up"></i>
                        </span>
                        <span class="whitespace-nowrap">
                            Ver tests
                        </span>
                    </p>
                </div>
            </a>
        </div>
    </div>
    <br><br>

    <div class="block w-full overflow-x-auto  mt-4 py-6">
        <!-- Projects table -->
        <table id="example" class="items-center w-full bg-transparent border-collapse">
            <thead>
                <tr>
                    <th
                        class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                        Fecha
                    </th>
                    <th
                        class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                        Hora
                    </th>
                    <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                        Estudiante
                    </th>
                    <th
                        class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                        Jornada
                    </th>
                    <th
                        class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                        Estado
                    </th>

                    <th
                        class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                        Paciente
                    </th>
                </tr>
            </thead>
            <tbody>

                <?php if (count($citasModel) > 0) : foreach ($citasModel as $cita) : ?>
                <tr>
                    <td style="background-color: goldenrod;"
                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 bg-red text-xs whitespace-nowrap p-4 text-left flex items-center">

                        <span class="ml-3 font-bold text-blueGray-600">
                            <?= $cita['fecha'] ?>
                        </span>
                    </td>
                    <td style="background-color: goldenrod;" class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <?= $cita['hora'] ?>

                    </td>
                    <td style="background-color: goldenrod;" class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <?= $cita['carnet'] ?> <?= $cita['nombre'] ?>

                    </td>
                    <td style="background-color: goldenrod;" class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <?= $cita['jornada'] ?>
                    </td>
                    <td style="background-color: goldenrod;" class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <?= $cita['estado_cita']  ?>
                        <i
                            class="fas fa-circle text-<?= $cita['estado_cita'] == 'Reservada' ? 'green' : 'red' ?>-500 mr-2"></i>
                    </td>
                    <td style="background-color: goldenrod;" class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <?= $cita['paciente'] ?>
                    </td>


                </tr>
                <?php endforeach;
                    endif; ?>
            </tbody>
        </table>
    </div>

</div>


<script type="text/javascript">
/* Make dynamic date appear */
(function() {
    if (document.getElementById("get-current-year")) {
        document.getElementById("get-current-year").innerHTML =
            new Date().getFullYear();
    }
})();
/* Sidebar - Side navigation menu on mobile/responsive mode */
function toggleNavbar(collapseID) {
    document.getElementById(collapseID).classList.toggle("hidden");
    document.getElementById(collapseID).classList.toggle("bg-white");
    document.getElementById(collapseID).classList.toggle("m-2");
    document.getElementById(collapseID).classList.toggle("py-3");
    document.getElementById(collapseID).classList.toggle("px-6");
}
/* Function for dropdowns */
function openDropdown(event, dropdownID) {
    let element = event.target;
    while (element.nodeName !== "A") {
        element = element.parentNode;
    }
    Popper.createPopper(element, document.getElementById(dropdownID), {
        placement: "bottom-start"
    });
    document.getElementById(dropdownID).classList.toggle("hidden");
    document.getElementById(dropdownID).classList.toggle("block");
}
</script>