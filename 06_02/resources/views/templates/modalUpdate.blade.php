<div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">{{ $title }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{$text}}
            </div>

            <div class="modal-footer">
                <button type="button" id="noUpdate" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <input type="submit" value="Atualizar" class="btn btn-primary">
            </div>
        </div>
    </div>
</div>