<!-- Modal -->
<div class="erase-modal" tabindex="-1" style="display: none">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Eliminazione Post</h5>
            </div>
            <div class="modal-body">
                Stai eliminando definitivamente questo post. Vuoi coninuare?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-button">Chiudi</button>
                
               
                <form action="{{ route('posts.destroy', $post) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Elimina
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>