@extends('admin.app')
@section('title') {{ $pageTitle }} @endsection
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-shopping-bag"></i> {{ $pageTitle }} - {{ $subTitle }}</h1>
        </div>
    </div>
    @include('admin.partials.flash')
    <div class="row user">
        <div class="col-md-3">
            <div class="tile p-0">
                <ul class="nav flex-column nav-tabs user-tabs">
                    <li class="nav-item"><a class="nav-link active" href="#general" data-toggle="tab">General</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="#images" data-toggle="tab">Images</a></li> -->
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="tab-content">
                <div class="tab-pane active" id="general">
                    <div class="tile">
                        <form action="{{ route('admin.seedlings.store') }}" method="POST" role="form">
                            @csrf
                            <h3 class="tile-title">Seedling Information</h3>
                            <hr>
                            <div class="tile-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label" for="myan_name">Myanmar Name</label>
                                            <input
                                                class="form-control @error('myan_name') is-invalid @enderror"
                                                type="text"
                                                placeholder="Enter myanmar name"
                                                id="myan_name"
                                                name="myan_name"
                                                value="{{ old('myan_name') }}"
                                            />
                                            <div class="invalid-feedback active">
                                                <i class="fa fa-exclamation-circle fa-fw"></i> @error('myan_name') <span>{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label" for="eng_name">English Name</label>
                                            <input
                                                class="form-control @error('eng_name') is-invalid @enderror"
                                                type="text"
                                                placeholder="Enter english name"
                                                id="eng_name"
                                                name="eng_name"
                                                value="{{ old('eng_name') }}"
                                            />
                                            <div class="invalid-feedback active">
                                                <i class="fa fa-exclamation-circle fa-fw"></i> @error('eng_name') <span>{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label" for="botany_name">Botany Name</label>
                                            <input
                                                class="form-control @error('botany_name') is-invalid @enderror"
                                                type="text"
                                                placeholder="Enter botany name"
                                                id="botany_name"
                                                name="botany_name"
                                                value="{{ old('botany_name') }}"
                                            />
                                            <div class="invalid-feedback active">
                                                <i class="fa fa-exclamation-circle fa-fw"></i> @error('botany_name') <span>{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label" for="cultivateTitle">CultivateTitle</label>
                                            <input
                                                class="form-control @error('cultivateTitle') is-invalid @enderror"
                                                type="text"
                                                placeholder="Enter cultivateTitle"
                                                id="cultivateTitle"
                                                name="cultivateTitle"
                                                value="{{ old('cultivateTitle') }}"
                                            />
                                            <div class="invalid-feedback active">
                                                <i class="fa fa-exclamation-circle fa-fw"></i> @error('cultivateTitle') <span>{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label" for="soilTitle">soilTitle</label>
                                            <input
                                                class="form-control @error('soilTitle') is-invalid @enderror"
                                                type="text"
                                                placeholder="Enter soilTitle"
                                                id="soilTitle"
                                                name="soilTitle"
                                                value="{{ old('soilTitle') }}"
                                            />
                                            <div class="invalid-feedback active">
                                                <i class="fa fa-exclamation-circle fa-fw"></i> @error('soilTitle') <span>{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label" for="growTitle">GrowTitle</label>
                                            <input
                                                class="form-control @error('growTitle') is-invalid @enderror"
                                                type="text"
                                                placeholder="Enter growTitle"
                                                id="growTitle"
                                                name="growTitle"
                                                value="{{ old('growTitle') }}"
                                            />
                                            <div class="invalid-feedback active">
                                                <i class="fa fa-exclamation-circle fa-fw"></i> @error('growTitle') <span>{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label" for="medicineTitle">MedicineTitle</label>
                                            <input
                                                class="form-control @error('medicineTitle') is-invalid @enderror"
                                                type="text"
                                                placeholder="Enter medicineTitle"
                                                id="medicineTitle"
                                                name="medicineTitle"
                                                value="{{ old('medicineTitle') }}"
                                            />
                                            <div class="invalid-feedback active">
                                                <i class="fa fa-exclamation-circle fa-fw"></i> @error('medicineTitle') <span>{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label" for="duration">Duration</label>
                                            <input
                                                class="form-control @error('duration') is-invalid @enderror"
                                                type="text"
                                                placeholder="Enter duration"
                                                id="duration"
                                                name="duration"
                                                value="{{ old('duration') }}"
                                            />
                                            <div class="invalid-feedback active">
                                                <i class="fa fa-exclamation-circle fa-fw"></i> @error('duration') <span>{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label" for="origin">Origin</label>
                                            <input
                                                class="form-control @error('origin') is-invalid @enderror"
                                                type="text"
                                                placeholder="Enter Origin"
                                                id="origin"
                                                name="origin"
                                                value="{{ old('origin') }}"
                                            />
                                            <div class="invalid-feedback active">
                                                <i class="fa fa-exclamation-circle fa-fw"></i> @error('origin') <span>{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label" for="race">Race</label>
                                            <input
                                                class="form-control @error('race') is-invalid @enderror"
                                                type="text"
                                                placeholder="Enter seedling race"
                                                id="race"
                                                name="race"
                                                value="{{ old('race') }}"
                                            />
                                            <div class="invalid-feedback active">
                                                <i class="fa fa-exclamation-circle fa-fw"></i> @error('race') <span>{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label" for="slug">Slug</label>
                                            <input
                                                class="form-control @error('slug') is-invalid @enderror"
                                                type="text"
                                                placeholder="Enter seedling slug"
                                                id="slug"
                                                name="slug"
                                                value="{{ old('slug') }}"
                                            />
                                            <div class="invalid-feedback active">
                                                <i class="fa fa-exclamation-circle fa-fw"></i> @error('slug') <span>{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label" for="type_id">Type</label>
                                            <select name="type_id" id="type_id" class="form-control @error('type_id') is-invalid @enderror">
                                                <option value="0">Select a type</option>
                                                @foreach($types as $type)
                                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback active">
                                                <i class="fa fa-exclamation-circle fa-fw"></i> @error('type_id') <span>{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label" for="categories">Categories</label>
                                            <select name="categories[]" id="categories" class="form-control" multiple>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="price">Price</label>
                                            <input
                                                class="form-control @error('price') is-invalid @enderror"
                                                type="text"
                                                placeholder="Enter seedling price"
                                                id="price"
                                                name="price"
                                                value="{{ old('price') }}"
                                            />
                                            <div class="invalid-feedback active">
                                                <i class="fa fa-exclamation-circle fa-fw"></i> @error('price') <span>{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="special_price">Special Price</label>
                                            <input
                                                class="form-control"
                                                type="text"
                                                placeholder="Enter seedling special price"
                                                id="special_price"
                                                name="special_price"
                                                value="{{ old('special_price') }}"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="quantity">Quantity</label>
                                            <input
                                                class="form-control @error('quantity') is-invalid @enderror"
                                                type="number"
                                                placeholder="Enter seedling quantity"
                                                id="quantity"
                                                name="quantity"
                                                value="{{ old('quantity') }}"
                                            />
                                            <div class="invalid-feedback active">
                                                <i class="fa fa-exclamation-circle fa-fw"></i> @error('quantity') <span>{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="weight">Weight</label>
                                            <input
                                                class="form-control"
                                                type="text"
                                                placeholder="Enter seedling weight"
                                                id="weight"
                                                name="weight"
                                                value="{{ old('weight') }}"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="cultivate">Cultivate</label>
                                    <textarea name="cultivate" id="cultivate" rows="8" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="soil">Soil</label>
                                    <textarea name="soil" id="soil" rows="8" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="grow">Grow</label>
                                    <textarea name="grow" id="grow" rows="8" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="medicine">Medicine</label>
                                    <textarea name="medicine" id="medicine" rows="8" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input"
                                                   type="checkbox"
                                                   id="status"
                                                   name="status"
                                                />Status
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input"
                                                   type="checkbox"
                                                   id="featured"
                                                   name="featured"
                                                />Featured
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="tile-footer">
                                <div class="row d-print-none mt-2">
                                    <div class="col-12 text-right">
                                        <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save Seedling</button>
                                        <a class="btn btn-danger" href="{{ route('admin.seedlings.index') }}"><i class="fa fa-fw fa-lg fa-arrow-left"></i>Go Back</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script type="text/javascript" src="{{ asset('backend/js/plugins/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/plugins/dropzone/dist/min/dropzone.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/plugins/bootstrap-notify.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/app.js') }}"></script>
    <script>
        Dropzone.autoDiscover = false;

        $( document ).ready(function() {
            $('#categories').select2();

            let myDropzone = new Dropzone("#dropzone", {
                paramName: "image",
                addRemoveLinks: false,
                maxFilesize: 4,
                parallelUploads: 2,
                uploadMultiple: false,
                url: "{{ route('admin.seedlings.images.upload') }}",
                autoProcessQueue: false,
            });
            myDropzone.on("queuecomplete", function (file) {
                window.location.reload();
                showNotification('Completed', 'All seedling images uploaded', 'success', 'fa-check');
            });
            $('#uploadButton').click(function(){
                if (myDropzone.files.length === 0) {
                    showNotification('Error', 'Please select files to upload.', 'danger', 'fa-close');
                } else {
                    myDropzone.processQueue();
                }
            });
            function showNotification(title, message, type, icon)
            {
                $.notify({
                    title: title + ' : ',
                    message: message,
                    icon: 'fa ' + icon
                },{
                    type: type,
                    allow_dismiss: true,
                    placement: {
                        from: "top",
                        align: "right"
                    },
                });
            }
        });
    </script>
@endpush
