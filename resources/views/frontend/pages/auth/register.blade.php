<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{route('register')}}" method="post">
            @csrf
        <div class="form-outline form-white mb-4">
              <label class="form-label" for="name">Name</label>
                <input type="name" name="name" id="" class="form-control form-control-lg"/>
              </div>

        <div class="form-outline form-white mb-4">
              <label class="form-label" for="typeEmailX">Email</label>
                <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg"/>
              </div>

              <div class="form-outline form-white mb-4">
              <label class="form-label" for="typePasswordX">Password</label>
                <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" />
              </div>

              <div>
              <p class="text-center text-muted mt-2 mb-0">Have already an account? <a href=""
                    class="fw-bold text-body"><u>Login here</u></a></p>

            </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>