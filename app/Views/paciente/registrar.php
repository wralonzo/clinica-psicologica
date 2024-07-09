</div>
</div>
<div class="px-4 md:px-2 mx-auto w-full -m-24">
  <form method="POST" action="<?= base_url() ?>paciente/registrar">

    <div class="flex-auto px-4 lg:px-10 py-15 pt-0">
      <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
        <div class="relative w-full mb-2 px-5">
          <h2 class="text-xs text-blueGray-600 font-bold text-2xl text-center mb-5">Registro de paciente</h2>
        </div>
        <div id="main" class="grid grid-rows-3 grid-flow-col">
          <div class="relative w-full mb-3 px-5">
            <label class="block uppercase text-xs text-blueGray-600 font-bold mb-2" for="grid-password">Nombre</label>
            <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="nombre" name="nombre" />
          </div>

          <div class="relative w-full mb-3 px-5">
            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">lugar</label>
            <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="lugar" name="lugar" />
          </div>

          <div class="relative w-full mb-3 px-5">
            <label class="block uppercase  text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Fecha naciemiento</label><input type="date" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="fecha_nacimiento" name="fecha_nacimiento" />
          </div>

          <div class="relative w-full mb-3 px-5">
            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">edad</label>
            <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="edad" name="edad" />
          </div>
          <div class="relative w-full mb-3 px-5">
            <div id="pecesSelecr" class="col-span-6 sm:col-span-3 rounded-md border border-gray-300 bg-white py-2 px-3">
              <label for="country" class="block text-sm font-medium text-gray-700">Tipo Sexo</label>
              <select required id="sexo" name="sexo" autocomplete="country-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                <option value="Hombre">Hombre</option>
                <option value="Mujer">Mujer</option>
              </select>
            </div>
          </div>
          <div class="relative w-full mb-3 px-5">
            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">lugar familia</label>
            <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="lugar_familia" name="lugar familia" />
          </div>

          <div class="relative w-full mb-3 px-5">
            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">ocupacion</label>
            <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="ocupacion" name="ocupacion" />
          </div>
          <div class="relative w-full mb-3 px-5">
            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">observaciones</label>
            <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="observaciones" name="observaciones" />
          </div>
          <div class="relative w-full mb-3 px-5">
            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">escolaridad</label>
            <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="escolaridad" name="escolaridad" />
          </div>
          <div class="relative w-full mb-3 px-5">
            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">estado civil</label>
            <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="estado_civil" name="estado_civil" />
          </div>
          <div class="relative w-full mb-3 px-5">
            <div id="pecesSelecr" class="col-span-6 sm:col-span-3 rounded-md border border-gray-300 bg-white py-2 px-3">
              <label for="country" class="block text-sm font-medium text-gray-700">Estudiante</label>
              <select required id="sexo" name="estudiante" autocomplete="country-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                <option >Seleccione un estudiante</option>
                <?php
                if (count($estudiantes) > 0) :
                  foreach ($estudiantes as $estudiante) : ?>
                    <option value="<?= $estudiante['id_estudiante'] ?>"> <?= $estudiante['nombre'] ?> <?= $estudiante['apellido'] ?></option>
                <?php endforeach;
                endif; ?>
              </select>
            </div>
          </div>
        </div>
        <hr class="py-3" />

        <div class="relative w-full mb-3 px-5">
        <h2 class="text-xs text-blueGray-600 font-bold text-2xl text-center mb-5">Detalle del conyugue</h2>
      </div>
      <div id="main" class="grid grid-rows-3 grid-flow-col">
        <div class="relative w-full mb-3 px-5">
          <label class="block uppercase text-xs text-blueGray-600 font-bold mb-2" for="grid-password">Nombre</label>
          <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="nombre" name="nombrec" />
        </div>

        <div class="relative w-full mb-3 px-5">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">ocupacion</label>
          <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="ocupacion" name="ocupacionc" />
        </div>

        <div class="relative w-full mb-3 px-5">
          <label class="block uppercase  text-blueGray-600 text-xs font-bold mb-2" for="grid-password">observacion</label>
          <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="observacion" name="observacionc" />
        </div>

        <div class="relative w-full mb-3 px-5">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">escolaridad</label>
          <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="escolaridad" name="escolaridadc" />
        </div>

        <div class="relative w-full mb-3 px-5">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">edad</label>
          <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="edad" name="edadc" />
        </div>

        <div class="relative w-full mb-3 px-5">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">lugar familia</label>
          <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="lugar familia" name="lugar_familiac" />
        </div>

        <div class="relative w-full mb-3 px-5">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">direccion</label>
          <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="direccion" name="direccionc" />
        </div>
        <div class="relative w-full mb-3 px-5">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">telefono</label>
          <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="telefono" name="telefonoc" />
        </div>
      </div>
        <hr class="py-3" />

        <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
          <div class="relative w-full mb-2 px-5">
            <br>
            <br>
            <h2 class="text-xs text-blueGray-600 font-bold text-2xl text-center mb-5">Ficha del paciente</h2>
          </div>
          <div id="main" class="grid grid-rows-3 grid-flow-col">
            <div class="relative w-full mb-2 px-5">
              <label class="block uppercase text-xs text-blueGray-600 font-bold mb-2" for="grid-password">datos generales</label>
              <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="datos generales" name="datos_generales" />
            </div>

            <div class="relative w-full mb-3 px-5 ">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">situacion y ambiente familiar</label>
              <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="situacion familiar" name="situacion_familiar" />
            </div>

            <div class="relative w-full mb-3 px-5 ">
              <label class="block uppercase  text-blueGray-600 text-xs font-bold mb-2" for="grid-password">motivo de consulta</label><input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="motivo_consulta" name="motivo_consulta" />
            </div>

            <div class="relative w-full mb-3 px-5 ">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">historia del problema actual</label>
              <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="historia problema" name="historia_problema" />
            </div>

            <div class="relative w-full mb-3 px-5 ">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">historia patologica y no patologica</label>
              <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="historia_patologica" name="historia_patologica" />
            </div>

            <!-- <div class="relative w-full mb-3 px-5 ">
            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Situación y ambiente familiar</label>
            <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="situacion_ambiente" name="situacion_ambiente" />
          </div> -->

            <div class="relative w-full mb-3 px-5 ">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Historia personal</label>
              <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="historia_personal" name="historia_personal" />
            </div>
            <div class="relative w-full mb-3 px-5 ">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Situacion laboral</label>
              <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="situacion_laboral" name="situacion_laboral" />
            </div>
            <!-- <div class="relative w-full mb-3 px-5 ">
            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Examen mental</label>
            <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="examen_mental" name="examen_mental" />
          </div> -->
            <div class="relative w-full mb-3 px-5 ">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Apariencia personal</label>
              <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="apariencia_personal" name="apariencia_personal" />
            </div>
            <div class="relative w-full mb-3 px-5 ">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Actitud de conducta</label>
              <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="actitud_conducta" name="actitud_conducta" />
            </div>
            <div class="relative w-full mb-3 px-5 ">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Actitud motora</label>
              <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="actitud_motora" name="actitud_motora" />
            </div>
            <div class="relative w-full mb-3 px-5 ">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Conciencia</label>
              <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="conciencia" name="conciencia" />
            </div>
            <div class="relative w-full mb-3 px-5 ">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Animo</label>
              <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="animo" name="animo" />
            </div>
            <div class="relative w-full mb-3 px-5 ">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Pensamiento</label>
              <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="pensamiento" name="pensamiento" />
            </div>
            <div class="relative w-full mb-3 px-5 ">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Pruebas auxiliares</label>
              <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="pruebas_auxiliares" name="pruebas_auxiliares" />
            </div>
            <div class="relative w-full mb-3 px-5 ">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Criterios diagnosticos</label>
              <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="criterios_diagnostico" name="criterios_diagnostico" />
            </div>
            <!-- <div class="relative w-full mb-3 px-5 ">
            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Evaluacion dsm</label>
            <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="evaluacion_dsm" name="evaluacion_dsm" />
          </div> -->
            <!-- <div class="relative w-full mb-3 px-5 ">
            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Plan terapeutico</label>
            <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="plan_terapeutico" name="plan_terapeutico" />
          </div> -->
            <div class="relative w-full mb-3 px-5 ">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Metas alcanzadas</label>
              <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="metas_alcanzadas" name="metas_alcanzadas" />
            </div>
            <!-- <div class="relative w-full mb-3 px-5 ">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Nombre</label>
              <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="nombre" name="nombre" />
            </div> -->
          </div>

          <hr class="py-3" />
          <div class="relative w-full mb-2 px-5">
            <br>
            <br>
            <h2 class="text-xs text-blueGray-600 font-bold text-2xl text-center mb-5">Situación familiar</h2>
          </div>
          <table class="tableFamiliar w-full bg-transparent">
            <thead>
              <tr>
                <th class="uppercase">nombre</th>
                <th class="uppercase">Sexo</th>
                <th class="uppercase">Edad</th>
                <th class="uppercase">Estado cívil</th>
                <th class="uppercase">escolaridad</th>
                <th class="uppercase">observacion</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr class="maintableFamiliar">
                <td>
                  <div class="relative w-full mb-3 px-5 ">
                    <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="nombre" name="situcion[0][nombref]" />
                  </div>
                </td>
                <td>
                  <div class="relative w-full mb-3 px-5 ">
                    <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="sexo" name="situcion[0][sexof]" />
                  </div>
                </td>
                <td>
                  <div class="relative w-full mb-3 px-5 ">
                    <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="edad" name="situcion[0][edadf]" />
                  </div>
                </td>
                <td>
                  <div class="relative w-full mb-3 px-5 ">
                    <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Estado civil" name="situcion[0][estado_civilf]" />
                  </div>
                </td>
                <td>
                  <div class="relative w-full mb-3 px-5 ">
                    <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="escolaridad" name="situcion[0][escolaridadf]" />
                  </div>
                </td>
                <td>
                  <div class="relative w-full mb-3 px-5 ">
                    <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="observacionf" name="situcion[0][observacionf]" />
                  </div>
                </td>
                <td><button class="text-green-500" type="button" onclick="add_table(undefined)"><i class="fa fa-plus fa-2x"></i></button></td>
              </tr>
            </tbody>
          </table>

          <hr class="py-3" />
          <div class="relative w-full mb-2 px-5">
            <br>
            <br>
            <h2 class="text-xs text-blueGray-600 font-bold text-2xl text-center mb-5">Evaluacion segun DSM V WHODA 2.0</h2>
          </div>

          <table class="items-center w-full dsm">
            <thead>
              <tr>
                <th class="uppercase">escala evaluada</th>
                <th class="uppercase">hallazgo</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr class="main-dsm">
                <td>
                  <div class="relative w-full mb-3 px-5 ">
                    <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="nombre" name="dsm[0][escalad]" />
                  </div>
                </td>
                <td>
                  <div class="relative w-full mb-3 px-5 ">
                    <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="nombre" name="dsm[0][hallazgod]" />
                  </div>
                </td>
                <td><button class="text-green-500" type="button" onclick="add_tabledsm(undefined)"><i class="fa fa-plus fa-2x"></i></button></td>

              </tr>
            </tbody>
          </table>

          <hr class="py-3" />
          <div class="relative w-full mb-2 px-5">
            <br>
            <br>
            <h2 class="text-xs text-blueGray-600 font-bold text-2xl text-center mb-5">Plan terapeutico</h2>
          </div>
          <table class="items-center w-full plan">
            <thead>
              <tr>
                <th class="uppercase">fecha de sesiones</th>
                <th class="uppercase">Actividad realizada</th>
                <th class="uppercase">% Logros o dificultades; observaciones por sesion</th>
              </tr>
            </thead>
            <tbody>
              <tr class="main-plan">
                <td>
                  <div class="relative w-full mb-3 px-5 ">
                    <input required type="date" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="nombre" name="plan[0][fechap]" />
                  </div>
                </td>
                <td>
                  <div class="relative w-full mb-3 px-5 ">
                    <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="nombre" name="plan[0][actividap]" />
                  </div>
                </td>
                <td>
                  <div class="relative w-full mb-3 px-5 ">
                    <input required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="nombre" name="plan[0][logrop]" />
                  </div>
                </td>
                <td><button class="text-green-500" type="button" onclick="add_tableplan(undefined)"><i class="fa fa-plus fa-2x"></i></button></td>

              </tr>
            </tbody>
          </table>

          <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
            <div class="relative w-full mb-2 px-5">
              <br>
              <br>
              <h2 class="text-xs text-blueGray-600 font-bold text-2xl text-center mb-5">Examen mental</h2>
            </div>

            <h2 class="text-xs-3 text-blueGray-600 font-bold mb-5 relative w-full mb-2 px-8">Apariencia personal</h2>
            <div id="main" class="grid grid-rows-3 grid-flow-col">
              <?php $customFields = getFields('apariencia');
              foreach ($customFields as $field) :
                echo inputType($field->tipo, $field->id_campo, $field->nombre);
              endforeach;
              ?>
            </div>

            <hr class="py-3" />
            <h2 class="text-xs-3 text-blueGray-600 font-bold mb-2 relative w-full mb-2 px-8">Actitud y conducta</h2>
            <div id="main" class="grid grid-rows-2 grid-flow-col">
              <?php $customFields = getFields('conducta');
              foreach ($customFields as $field) :
                echo inputType($field->tipo, $field->id_campo, $field->nombre);
              endforeach;
              ?>
            </div>

            <hr class="py-3" />
            <h2 class="text-xs-3 text-blueGray-600 font-bold mb-5 relative w-full mb-2 px-8">Actitud motora</h2>
            <div id="main" class="grid grid-rows-4 grid-flow-col">
              <?php $customFields = getFields('motora');
              foreach ($customFields as $field) :
                echo inputType($field->tipo, $field->id_campo, $field->nombre);
              endforeach;
              ?>
            </div>

            <hr class="py-3" />
            <h2 class="text-xs-3 text-blueGray-600 font-bold mb-5 relative w-full mb-2 px-8">Conciencia</h2>
            <div id="main" class="grid grid-rows-1 grid-flow-col">
              <?php $customFields = getFields('conciencia');
              foreach ($customFields as $field) :
                echo inputType($field->tipo, $field->id_campo, $field->nombre);
              endforeach;
              ?>
            </div>

            <hr class="py-3" />
            <h2 class="text-xs-3 text-blueGray-600 font-bold mb-5 relative w-full mb-2 px-8">Animo</h2>
            <div id="main" class="grid grid-rows-2 grid-flow-col">
              <?php $customFields = getFields('animo');
              foreach ($customFields as $field) :
                echo inputType($field->tipo, $field->id_campo, $field->nombre);
              endforeach;
              ?>
            </div>

            <hr class="py-3" />
            <h2 class="text-xs-3 text-blueGray-600 font-bold mb-5 relative w-full mb-2 px-8">Pensamiento</h2>
            <div id="main" class="grid grid-rows-1 grid-flow-col">
              <?php $customFields = getFields('pensamiento');
              foreach ($customFields as $field) :
                echo inputType($field->tipo, $field->id_campo, $field->nombre);
              endforeach;
              ?>
            </div>

            <hr class="py-3" />
            <h2 class="text-xs-3 text-blueGray-600 font-bold mb-5 relative w-full mb-2 px-8">Contenido</h2>
            <div id="main" class="grid grid-rows-2 grid-flow-col">
              <?php $customFields = getFields('contenido');
              foreach ($customFields as $field) :
                echo inputType($field->tipo, $field->id_campo, $field->nombre);
              endforeach;
              ?>
            </div>

            <hr class="py-3" />
            <h2 class="text-xs-3 text-blueGray-600 font-bold mb-5 relative w-full mb-2 px-8">Memoria</h2>
            <div id="main" class="grid grid-rows-1 grid-flow-col">
              <?php $customFields = getFields('memoria');
              foreach ($customFields as $field) :
                echo inputType($field->tipo, $field->id_campo, $field->nombre);
              endforeach;
              ?>
            </div>


          </div>



          <div class="text-center mt-6">
            <div id="main" class="grid grid-rows-1 grid-flow-col">
              <div class="relative w-full mb-3 px-5">
                <a href="<?= base_url() ?>paciente/display">
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
        </div>
  </form>
</div>

<script>
  function add_table(itemid) {
    var table_row = '';
    var item_key = $("body").find('tbody .item').length + 1;

    data = get_item_preview_values();
    table_row += '<tr class="sortable item">';
    table_row += '<td><div class="relative w-full mb-3 px-5 "><input type="text" name="situcion[' + item_key + '][nombref]" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"> </div></td>';
    table_row += '<td><div class="relative w-full mb-3 px-5 "><input type="text" name="situcion[' + item_key + '][sexof]" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"> </div></td>';
    table_row += '<td><div class="relative w-full mb-3 px-5 "><input type="text" name="situcion[' + item_key + '][edadf]" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"> </div></td>';
    table_row += '<td><div class="relative w-full mb-3 px-5 "><input type="text" name="situcion[' + item_key + '][estado_civilf]" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"> </div></td>';
    table_row += '<td><div class="relative w-full mb-3 px-5 "><input type="text" name="situcion[' + item_key + '][escolaridadf]" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"> </div></td>';
    table_row += '<td><div class="relative w-full mb-3 px-5 "><input type="text" name="situcion[' + item_key + '][observacionf]" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"> </div></td>';

    table_row += '<td><button type="button" class="text-red-500" onclick="delete_item(this,' + itemid + '); return false;"><i class="fas fa-trash-alt"></i></button></td>';

    table_row += '</tr>';

    $('table.tableFamiliar tbody').append(table_row);
    $(document).trigger({
      type: "item-added-to-table",
      data: data,
      row: table_row
    });
    // clean_items();
  }

  function get_item_preview_values() {
    var response = {};
    response.nombref = $('.maintableFamiliar input[name="nombref"]').val();
    response.sexof = $('.maintableFamiliar input[name="sexof"]').val();
    response.edadf = $('.maintableFamiliar input[name="edadf"]').val();
    response.estado_civilf = $('.maintableFamiliar input[name="estado_civilf"]').val();
    response.escolaridadf = $('.maintableFamiliar input[name="escolaridadf"]').val();
    response.observacionf = $('.maintableFamiliar input[name="observacionf"]').val();
    return response;
  }

  function clean_items() {
    var previewArea = $('.maintableFamiliar');

    previewArea.find('input[name="nombref"]').val('');
    previewArea.find('input[name="sexof"]').val('');
    previewArea.find('input[name="edadf"]').val('');
    previewArea.find('input[name="estado_civilf"]').val('');
    previewArea.find('input[name="escolaridadf"]').val('');
    previewArea.find('input[name="observacionf"]').val('');
  }

  function delete_item(row, itemid) {
    $(row).parents('tr').remove();
    // // If is edit we need to add to input removed_items to track activity
    // if ($('input[name="isedit"]').length > 0) {
    //     $('#removed-items').append(hidden_input('removed_items[]', itemid));
    // }
  }



  function add_tabledsm(itemid) {
    var table_row = '';
    var item_key = $("body").find('tbody .dsm').length + 1;

    data = get_item_preview_valuesdsm();
    table_row += '<tr class="sortable dsm">';
    table_row += '<td><div class="relative w-full mb-3 px-5 "><input type="text" name="dsm[' + item_key + '][escalad]" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"> </div></td>';
    table_row += '<td><div class="relative w-full mb-3 px-5 "><input type="text" name="dsm[' + item_key + '][hallazgod]" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"> </div></td>';

    table_row += '<td><button type="button" class="text-red-500" onclick="delete_itemdsm(this,' + itemid + '); return false;"><i class="fas fa-trash-alt"></i></button></td>';

    table_row += '</tr>';

    $('table.dsm tbody').append(table_row);
    $(document).trigger({
      type: "item-added-to-table",
      data: data,
      row: table_row
    });
    // clean_itemsdsm();
  }

  function get_item_preview_valuesdsm() {
    var response = {};
    response.escalad = $('.main-dsm input[name="escalad"]').val();
    response.hallazgod = $('.main-dsm input[name="hallazgod"]').val();
    return response;
  }

  function clean_itemsdsm() {
    var previewArea = $('.main-dsm');
    previewArea.find('input[name="escalad"]').val('');
    previewArea.find('input[name="hallazgod"]').val('');
  }

  function delete_itemdsm(row, itemid) {
    $(row).parents('tr').remove();
  }



  function add_tableplan(itemid) {
    var table_row = '';
    var item_key = $("body").find('tbody .plan').length + 1;

    data = get_item_preview_valuesdsm();
    table_row += '<tr class="sortable dsm">';
    table_row += '<td><div class="relative w-full mb-3 px-5 "><input type="date" name="plan[' + item_key + '][fechap]" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"> </div></td>';
    table_row += '<td><div class="relative w-full mb-3 px-5 "><input type="text" name="plan[' + item_key + '][actividap]" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"> </div></td>';
    table_row += '<td><div class="relative w-full mb-3 px-5 "><input type="text" name="plan[' + item_key + '][logrop]" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"> </div></td>';

    table_row += '<td><button type="button" class="text-red-500" onclick="delete_itemplan(this,' + itemid + '); return false;"><i class="fas fa-trash-alt"></i></button></td>';

    table_row += '</tr>';

    $('table.plan tbody').append(table_row);
    $(document).trigger({
      type: "item-added-to-table",
      data: data,
      row: table_row
    });
    // clean_itemsplan();
  }

  function get_item_preview_valuesplan() {
    var response = {};
    response.fechap = $('.main-plan input[name="fechap"]').val();
    response.actividap = $('.main-plan input[name="actividap"]').val();
    response.logrop = $('.main-plan input[name="logrop"]').val();
    return response;
  }

  function clean_itemsplan() {
    var previewArea = $('.main-plan');
    previewArea.find('input[name="fechap"]').val('');
    previewArea.find('input[name="actividap"]').val('');
    previewArea.find('input[name="logrop"]').val('');
  }

  function delete_itemplan(row, itemid) {
    $(row).parents('tr').remove();
  }
</script>