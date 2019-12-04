<!-- Modal Agregar al grupo -->
<div class="modal fade" id="warning_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class= "message-text"> </p>
      </div>
      <div class="modal-footer">
        <span class="btn-inner--icon">
          <a id="agregar" class="btn btn-icon btn-2 btn-info btn-lg" role="button" title="Agregar." href="">
              {{ __('Sí, agregar') }}
          </a>
        </span>
        <span class="btn-inner--icon">
             <a class="btn btn-icon btn-2 btn-danger btn-lg" role="button" title="Cancelar" href="{{ url('/Habilidades') }}">
                 {{ __('Cancelar') }}
             </a>
        </span>
      </div>
    </div>
  </div>
</div>

<!-- Modal Eliminar del grupo -->
<div class="modal fade" id="eliminar_degrupo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class= "message-text"> </p>
      </div>
      <div class="modal-footer">
        <span class="btn-inner--icon">
          <a id="eliminar" class="btn btn-icon btn-2 btn-info btn-lg" role="button" title="Eliminar." href="">
              {{ __('Sí, eliminar') }}
          </a>
        </span>
        <span class="btn-inner--icon">
             <a class="btn btn-icon btn-2 btn-danger btn-lg" role="button" title="Cancelar" href="{{ url('/Habilidades') }}">
                 {{ __('Cancelar') }}
             </a>
        </span>
      </div>
    </div>
  </div>
</div>

<!-- Modal Eliminar del grupo -->
<div class="modal fade" id="eliminar_evaluacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class= "message-text"> </p>
      </div>
      <div class="modal-footer">
        <span class="btn-inner--icon">
          <a id="eliminar" class="btn btn-icon btn-2 btn-info btn-lg" role="button" title="Eliminar." href="">
              {{ __('Sí, eliminar') }}
          </a>
        </span>
        <span class="btn-inner--icon">
             <a class="btn btn-icon btn-2 btn-danger btn-lg" role="button" title="Cancelar" href="{{ url('/Habilidades') }}">
                 {{ __('Cancelar') }}
             </a>
        </span>
      </div>
    </div>
  </div>
</div>

<!-- Preload modal -->

<div class="modal fade" id="preload_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Error</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class= "message-text"> </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Delete modal -->

<div class="modal fade" id="delete_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Error</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class= "message-text"> </p>
      </div>
      <div class="modal-footer">
        <span class="btn-inner--icon">
          <a id="borrar" class="btn btn-icon btn-2 btn-info btn-lg" role="button" title="Eliminar." href="">
              {{ __('Sí, eliminar') }}
          </a>
        </span>
        <span class="btn-inner--icon">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"> {{ __('Cancelar') }}</button>


        </span>
      </div>
    </div>
  </div>
</div>

<!-- Delete modal -->

<div class="modal fade" id="delete_masivo_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Error</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class= "message-text"> </p>
      </div>
      <div class="modal-footer">
        <span class="btn-inner--icon">
          <button id="borrar" class="btn btn-icon btn-2 btn-info btn-lg" role="button" title="Eliminar." href="">
              {{ __('Sí, eliminar') }}
          </button>
        </span>
        <span class="btn-inner--icon">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"> {{ __('Cancelar') }}</button>


        </span>
      </div>
    </div>
  </div>
</div>
