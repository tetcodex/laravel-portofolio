<div class="modal fade" id="formquestion" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLabel">Dont Hesitate To Text Me</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/" method="POST">
            @csrf
            <div class="form-group">
              <label for="recipient-name" class="col-form-label modal-title">Your Name :</label>
              <input type="text" class="form-control" id="recipient-name" name="name">
              @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>  
            <div class="form-group">
              <label for="message-text" class="col-form-label modal-title">Your Text / Messages :</label>
              <textarea class="form-control" id="message-text" name="message"></textarea>
              @error('message')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <button class="btn btn-outline-primary">Send message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
