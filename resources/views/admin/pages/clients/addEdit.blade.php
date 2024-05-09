@extends('admin.main')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Clients</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Clients</li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <form method="POST" action="{{ route('clients.store') }}">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title">Client Details</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label>Source</label>
                                                            <select class="form-control select2bs4 @error('source') is-invalid @enderror" style="width: 100%;" name="source">
                                                                <option value="" selected>-- SELECT SOURCE --</option>
                                                                @foreach ($sources as $source)
                                                                    <option value="{{ $source->id }}">{{ $source->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            @error('source')
                                                                <span class="d-block fs-6 text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="companyName">Company Name</label>
                                                            <input type="text" class="form-control @error('companyName') is-invalid @enderror" name="companyName" id="companyName">
                                                            @error('companyName')
                                                                <span class="d-block fs-6 text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="TA">T/A</label>
                                                            <input type="text" class="form-control" id="TA" name="TA">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="natureBusiness">Nature of Business</label>
                                                            <input type="text" class="form-control" name="natureBusiness" id="natureBusiness">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="specialistArea">Specialist Area</label>
                                                            <input type="text" class="form-control" name="specialistArea" id="specialistArea">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Industry</label>
                                                            <select class="form-control select2bs4" style="width: 100%;" name="industry">
                                                                <option value="" selected>-- SELECT INDUSTRY --
                                                                </option>
                                                                @foreach ($industries as $industry)
                                                                    <option value="{{ $industry->id }}">
                                                                        {{ $industry->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="address">Address</label>
                                                            <input type="text" class="form-control" name="address" id="address">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Country</label>
                                                            <select class="form-control select2bs4" name="country">
                                                                <option selected value="">-- SELECT REGION --</option>
                                                                @foreach ($nationalityContent as $key => $country)
                                                                    <option value="{{ $country['num_code'] }}">
                                                                        {{ $country['en_short_name'] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Region</label>
                                                            <select class="form-control select2bs4" style="width: 100%;" name="region" id="region">
                                                                <option value="" selected>-- SELECT REGION -- </option>
                                                                @foreach ($regionContent['RECORDS'] as $region)
                                                                    <option value="{{ $region['id'] }}"
                                                                        data-regcode="{{ $region['regCode'] }}">
                                                                        {{ $region['regDesc'] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Province</label>
                                                            <select class="form-control select2bs4" style="width: 100%;" name="province" id="province">
                                                                <option value="" selected>-- SELECT PROVINCE --</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>City</label>
                                                            <select class="form-control select2bs4" style="width: 100%;" name="city" id="city">
                                                                <option value="" selected>-- SELECT CITY --</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Barangay</label>
                                                            <select class="form-control select2bs4" style="width: 100%;" name="barangay" id="barangay">
                                                                <option value="" selected>-- SELECT BARANGAY --</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="zipCode">Zip Code</label>
                                                            <input type="text" class="form-control" name="zipCode" id="zipCode">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="telno">Telephone Number</label>
                                                            <input type="text" class="form-control" name="telno id="telno">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="alternateTelNo">Alternate Telephone Number</label>
                                                            <input type="text" class="form-control" name="alternateTelNo" id="alternateTelNo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input type="email" class="form-control" name="email" id="email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="website">Website</label>
                                                            <input type="text" class="form-control" name="website" id="website">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Terms Sent</label>
                                                            <select class="form-control select2bs4" style="width: 100%;" name="termSent">
                                                                <option value="" selected>-- SELECT TERMS SENT --
                                                                </option>
                                                                @foreach ($users as $user)
                                                                    <option value="{{ $user->id }}">
                                                                        {{ $user->first_name }} {{ $user->last_name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Term Sent Date:</label>
                                                            <div class="input-group date" id="termSentDate"
                                                                data-target-input="nearest">
                                                                <input type="text"
                                                                    class="form-control datetimepicker-input"
                                                                    data-target="#termSentDate" name="termSentDate"/>
                                                                <div class="input-group-append"
                                                                    data-target="#termSentDate"
                                                                    data-toggle="datetimepicker">
                                                                    <div class="input-group-text"><i
                                                                            class="fa fa-calendar"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Terms Received</label>
                                                            <select class="form-control select2bs4" style="width: 100%;" name="termReceive">
                                                                <option value="" selected>-- SELECT TERMS RECEIVE --</option>
                                                                @foreach ($termReceives as $termReceive)
                                                                    <option value="{{ $termReceive->id }}">
                                                                        {{ $termReceive->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Term Received Date:</label>
                                                            <div class="input-group date" id="termReceivedDate"
                                                                data-target-input="nearest">
                                                                <input type="text"
                                                                    class="form-control datetimepicker-input"
                                                                    data-target="#termReceivedDate" name="termReceivedDate"/>
                                                                <div class="input-group-append"
                                                                    data-target="#termReceivedDate"
                                                                    data-toggle="datetimepicker">
                                                                    <div class="input-group-text"><i
                                                                            class="fa fa-calendar"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title">Contact Details</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label>Salutation</label>
                                                            <select class="form-control select2bs4" style="width: 100%;" name="salutation">
                                                                <option value="" selected>-- SELECT SALUTATION --
                                                                </option>
                                                                @foreach ($salutations as $salutation)
                                                                    <option value="{{ $salutation->id }}">
                                                                        {{ $salutation->salutations }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="contactFirstName">First Name</label>
                                                            <input type="text" class="form-control" name="contactFirstName"
                                                                id="contactFirstName">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="contactLastName">Last Name</label>
                                                            <input type="text" class="form-control" name="contactLastName"
                                                                id="contactLastName">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="contactPosition">Position</label>
                                                            <input type="text" class="form-control" name="contactPosition"
                                                                id="contactPosition">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Decision Maker</label>
                                                            <select class="form-control select2bs4" style="width: 100%;" name="decisionMaker">
                                                                <option selected="selected">-- SELECT AN OPTION --</option>
                                                                <option value="1">Yes</option>
                                                                <option value="0">No</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="contactDirectDial">Direct Dial</label>
                                                            <input type="text" class="form-control" name="contactDirectDial"
                                                                id="contactDirectDial">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="contactMobileNo">Mobile Number</label>
                                                            <input type="text" class="form-control" name="contactMobileNo"
                                                                id="contactMobileNo">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="contactEmail">Email</label>
                                                            <input type="email" class="form-control" name="contactEmail" id="contactEmail">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="notes">Notes</label>
                                                            <textarea class="form-control" name="notes" id="notes"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <div class="submit-btn text-center">
                                    <a href="/iris/clients"><button type="button"
                                            class="btn btn-default mr-3">Cancel</button></a>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </form>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
@section('scripts')
    
    <script src="{{ asset('admin/js/clients.js') }}"></script>
    <script src="{{ asset('admin/js/global.js') }}"></script>
@endsection
