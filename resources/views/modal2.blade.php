<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Модальное окно</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('content2.update') }}" method="POST">
                    @csrf
                    @foreach($blocks as $block)
                        <p>
                            <button type="submit" name="selected_block" value="{{ $block->id }}">{{ $block->content }}</button>
                        </p>
                    @endforeach
                </form>

            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

