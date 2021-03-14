<!-- button dinamis -->
<button type="button" class="btn btn-{{ $setup }}" data-toggle="modal" data-target="#staticBackdrop">
    Show Modal
</button>

<div class="modal-dialog modal-dialog-centered">
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Your Modal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Hello, You've Successfull using this Modal
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-{{ $setup }}">Understood</button>
                </div>
            </div>
        </div>
    </div>
</div>
