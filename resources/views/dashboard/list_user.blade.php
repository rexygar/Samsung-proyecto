@extends('layouts_admin.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Lista de Usuarios')


@section('content')

    <div class="col-span-10 col-start-3 px-6 ">
        <div class="mx-auto container">
            <div class=" border-b  px-6 py-2 items-center grid grid-cols-12">
              <input type="hidden" id="rutaListar" value="{{ route('list.user') }}">
                <div class="col-span-12">
                    <div class="flex flex-col max-w-full shadow-md m-6">
                  <!-- Header -->
                  <div class="flex justify-between items-center bg-gray-100 border-b px-6 py-4">
                    <p class="text-5xl text-gray-800 font-semibold">Lista de Todos los Usuarios</p>

                    <div class="flex justify-between items-center bg-gray-100 border-b px-6 py-4">
                      <a href="{{ route('create.user') }}" type="submit" class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Crear Usuario</a>
                    </div>
                  </div>
                  <!-- End Header -->
                
                  <!-- Table -->
                  <table class="overflow-x-auto w-full bg-white divide-y divide-gray-200 data-table">
                    <thead class="bg-gray-50 text-gray-800 text-sm">
                      <tr class="divide-x divide-gray-300">
                        <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                        <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase">Nombre</th>
                        <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase">Correo</th>
                        <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase">Acciones</th>
                      </tr>
                    </thead>
                    <tbody class="text-gray-700 text-xl divide-y divide-gray-200">
                    </tbody>
                  </table>
                  <!-- End Table -->
                </div>
                
                </div>
            </div>
        </div>
    </div>
    <div class="main-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
		style="background: rgba(0,0,0,.7);">
		<div
			class="border border-teal-500 shadow-lg modal-container bg-white mx-auto rounded shadow-lg z-50 overflow-y-auto">
			<div class="modal-content py-4 text-left px-6">
				<!--Title-->
				<div class="flex justify-between items-center pb-3">
					<p class="text-2xl font-bold">Eliminar Usuario</p>
				</div>
				<!--Body-->
				<div class="my-5">
					<input type="hidden" id="idDelete" value="">
          <input type="hidden" id="productos" value="{{ route('delete.user') }}">
          ¿Está seguro que desea Eliminar este registro?
				</div>
				<!--Footer-->
				<div class="flex justify-end pt-2">
					<button class="focus:outline-none modal-close px-4 bg-gray-400 p-3 rounded-lg text-black hover:bg-gray-300">Cancelar</button>
					<button class="focus:outline-none px-4 bg-green-500 p-3 ml-3 rounded-lg text-white hover:bg-green-400" onclick="eliminar()">Eliminar</button>
				</div>
			</div>
		</div>
	</div>
@stop

@section('page-styles')
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://nightly.datatables.net/searchpanes/css/searchPanes.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('js/toastr/toastr.min.css') }}">
<style>
  .animated {
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
  }

  .animated.faster {
    -webkit-animation-duration: 500ms;
    animation-duration: 500ms;
  }

  .fadeIn {
    -webkit-animation-name: fadeIn;
    animation-name: fadeIn;
  }

  .fadeOut {
    -webkit-animation-name: fadeOut;
    animation-name: fadeOut;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
    }

    to {
      opacity: 1;
    }
  }

  @keyframes fadeOut {
    from {
      opacity: 1;
    }

    to {
      opacity: 0;
    }
  }
</style>
@endsection

@section('vendor-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://nightly.datatables.net/js/jquery.dataTables.min.js"></script>
<script src="https://nightly.datatables.net/searchpanes/js/dataTables.searchPanes.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://nightly.datatables.net/select/js/dataTables.select.min.js"></script>
<script src="https://nightly.datatables.net/buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('js/toastr/toastr.js') }}"></script>
@endsection

@section('page-script')
<script src="{{ asset('js/tablaUser.js') }}"></script>
<script src="{{ asset('js/utils.js') }}"></script>
<script>
  const modal = document.querySelector('.main-modal');
		const closeButton = document.querySelectorAll('.modal-close');

		const modalClose = () => {
			modal.classList.remove('fadeIn');
			modal.classList.add('fadeOut');
			setTimeout(() => {
				modal.style.display = 'none';
			}, 500);
		}

		const openModal = () => {
			modal.classList.remove('fadeOut');
			modal.classList.add('fadeIn');
			modal.style.display = 'flex';
		}

		for (let i = 0; i < closeButton.length; i++) {

			const elements = closeButton[i];

			elements.onclick = (e) => modalClose();

			modal.style.display = 'none';

			window.onclick = function (event) {
				if (event.target == modal) modalClose();
			}
		}
</script>
@stop