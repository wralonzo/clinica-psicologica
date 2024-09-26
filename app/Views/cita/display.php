<div class="w-full mb-12 px-4">
    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
        <div class="rounded-t mb-0 px-4 py-3 border-0">
            <div class="flex flex-wrap items-center">
                <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                    <h3 class="font-semibold text-4xl text-blueGray-700 text-center">
                        Listado de reservaciones
                    </h3>
                    <div class="grid gap-5">
                        <a href="<?php echo base_url(); ?>cita/registrar">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-green-500">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </a>
                    </div>
                    <?php if (session()->get('no_access')) : ?>
                    <h5 style="color: red"><?php echo session()->get('no_access'); ?></h5>
                    <?php endif ?><br>
                    <!-- Search Input -->
                    <input type="text" id="searchInput" placeholder="Buscar..."
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring transition-all duration-150" />
                    <br><br>
                    <hr>

                    <div class="block w-full overflow-x-auto">

                        <!-- Projects Table -->
                        <table id="example"
                            class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">Fecha</th>
                                    <th scope="col" class="px-6 py-3">Hora</th>
                                    <th scope="col" class="px-6 py-3">Estudiante</th>
                                    <th scope="col" class="px-6 py-3">Jornada</th>
                                    <th scope="col" class="px-6 py-3">Estado</th>
                                    <th scope="col" class="px-6 py-3">Paciente</th>
                                    <th scope="col" class="px-6 py-3">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>


                                <?php if (count($citas) > 0) : foreach ($citas as $cita) : ?>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <?= $cita['fecha'] ?></td>
                                    <td class="px-6 py-4"><?= $cita['hora'] ?></td>
                                    <td class="px-6 py-4"><?= $cita['carnet'] ?> <?= $cita['nombre'] ?></td>
                                    <td class="px-6 py-4"><?= $cita['jornada'] ?></td>
                                    <td class="px-6 py-4"><?= $cita['estado_cita'] ?></td>
                                    <td class="px-6 py-4"><?= $cita['paciente'] ?></td>
                                    <td class="px-6 py-4">
                                        <a href="<?= base_url() ?>cita/editar/<?= $cita['cita'] ?>"><i
                                                class="fas fa-pencil-alt"></i></a>
                                        <a onclick="deletePass(<?= $cita['cita'] ?>)"><i
                                                class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                <?php endforeach; endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
$(document).ready(function() {
    // Search functionality
    $('#searchInput').on('keyup', function() {
        var value = $(this).val().toLowerCase();
        $("#example tbody tr").filter(function() {
            // Check if any cell in the row contains the search term
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });

    setupHover();
    paint(); // Initial call to paint

    function setupHover() {
        const hoverableRows = document.querySelectorAll("#example tbody tr");

        hoverableRows.forEach((row) => {
            row.addEventListener("mouseenter", paint);
            row.addEventListener("mouseleave", paint);
        });
    }

    function paint() {
        console.log("Paint function called");
        $("#example tbody tr").each((i, tr) => {
            const status = tr.children[4].textContent.trim(); // Adjust index as needed
            if (status === 'Cancelada') {
                $(tr).css("background-color", "red");
                $(tr).css("color", "white");
            } else if (status === 'Modificada') {
                $(tr).css("background-color", "green");
                $(tr).css("color", "white");
            } else {
                $(tr).css("background-color", ""); // Reset background for other statuses
            }
        });
    }
});

function deletePass(id) {
    Swal.fire({
        title: "Quiere eliminar el registro?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Eliminar"
    }).then((result) => {
        if (result.isConfirmed) {
            fetch('<?= base_url() ?>cita/borrar/' + id)
                .then(res => {
                    Swal.fire("Eliminado!", "Registro eliminado.", "success");
                    location.reload();
                });
        }
    });
}
</script>
