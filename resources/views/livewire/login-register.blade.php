<div>
    <div class="row">
        <div class="col-md-12">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    </div>

    @if($registerForm)
        <form>
            <div class="row">
               <div class="col-md-12">
                    <div class="form-group">
                        <label>Name :</label>
                        <input type="text" wire:model="name" class="form-control">
                        @error('name') <span class="text-danger error">{{ $message }}></span>
                            @enderror
                    </div>
               </div>
               <div class="col-md-12">
                    <div class="form-group">
                        <label>Email :</label>
                        <input type="text" wire:model="email" class="form-control">
                        @error('email') <span class="text-danger error">{{ $message }}></span>
                            @enderror
                    </div>
               </div>
               <div class="col-md-12">
                    <div class="form-group">
                        <label>Password :</label>
                        <input type="password" wire:model="password" class="form-control">
                        @error('password') <span class="text-danger error">{{ $message }}></span>
                            @enderror
                    </div>
               </div>
               <div class="col-md-12 text-center">
                    <button class="btn text-white btn-success" wire:click.prevent="registerStore">Rregister</button>
               </div>
               <div class="col-md-12 text-center">
                    <a class="text-primary" wire:click.prevent="register"><strong>Login</strong></a>
               </div>
            </div>
        </form>
    @else
    <form>
            <div class="row">
               <div class="col-md-12">
                    <div class="form-group">
                        <label>Email :</label>
                        <input type="text" wire:model="email" class="form-control">
                        @error('email') <span class="text-danger error">{{ $message }}></span>
                            @enderror
                    </div>
               </div>
               <div class="col-md-12">
                    <div class="form-group">
                        <label>Password :</label>
                        <input type="password" wire:model="password" class="form-control">
                        @error('password') <span class="text-danger error">{{ $message }}></span>
                            @enderror
                    </div>
               </div>
               <div class="col-md-12 text-center">
                    <a class="btn-text-white btn-success" wire:click.prevent="login"><strong>Login</strong></a>
               </div>
               <div class="col-md-12 text-center">
                <br>
                    Don't have account<a class="btn btn-small text-white btn-primary" wire:click.prevent="register"><strong>Click Here For Registration</strong></a>
               </div>
            </div>
        </form>
    @endif
</div>




