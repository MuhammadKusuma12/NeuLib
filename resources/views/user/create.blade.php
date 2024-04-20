<x-layout>
    <x-slot name="dashboard">
        @include('components.dashboard')
    </x-slot>
    <div class="d-flex align-items-center justify-content-center position-absolute top-50 start-50 translate-middle">
        <div class="card" style="border-color: brown;">
            <div class="card-header bg-cMedium text-white text-center">
                <h5 class="card-title m-0 py-1">Create</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf

                    <label for="username">Username</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <label for="password">Password</label>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="col-12">
                        <button class="btn btn-cMedium text-white" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>
