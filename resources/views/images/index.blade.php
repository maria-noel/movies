<div class="container">
    <div class="container has-text-centered">
        <div class="column is-4 is-offset-4">
            <h3 class="title has-text-grey">{{ __('Add Image') }}</h3>

            <div class="box">

                @if ($message = Session::get('success'))

                <div class="alert alert-success alert-block">

                    <button type="button" class="close" data-dismiss="alert">×</button>

                    <strong>{{ $message }}</strong>

                </div>

                <img src="images/{{ Session::get('image') }}"> @endif @if (count($errors) > 0)

                <div class="alert alert-danger">

                    <strong>Whoops!</strong> There were some problems with your input.

                    <ul>

                        @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

                @endif

                <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="field">
                        <div class="control">
                            <input class="input is-large " type="text" placeholder="{{ __('Name') }}">

                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <input class="input is-large " type="text" placeholder="{{ __('Alt') }}">
                        </div>
                    </div>

                    <div class="field">
                        <div class="control">
                            <input class="input is-large " type="text" placeholder="{{ __('Order') }}">
                        </div>
                    </div>
                  
                    <div class="field">
                        <div class="control">
                            <div class="file has-name ">
                                <label class="file-label">
                                    <input class="file-input" type="file" name="image" id="file">
                                    <span class="file-cta">
                                        <span class="file-icon">
                                            <i class="fas fa-upload"></i>
                                        </span>
                                        <span class="file-label">
                                            Choose a file…
                                        </span>
                                    </span>
                                    {{-- <span class="file-name">
                                        Screen Shot 2017-07-29 at 15.54.25.png
                                    </span> --}}
                                </label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <button type="submit">Save</button>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>