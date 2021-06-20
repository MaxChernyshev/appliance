@if(Request::segment(1) == 'amp')
    {{--    <form class="order-form" action-xhr="/documentation/examples/api/submit-form-input-text-xhr" target="_top" method="POST">--}}
    <form class="order-form" action-xhr="{{ route('sendcontactform') }}" method="POST" target="_top">
        @csrf


        <legend>Book a Repair Appointment</legend>
        <p>Personal Info<i>*</i></p>
        <div class="form-row">
            <div class="col-12 col-md-6 form-group">
                <input type="text" name="name" class="form-control" placeholder="Name" required>
            </div>
            <div class="col-12 col-md-6 form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-12 col-md-6 form-group">
                <input type="tell" name="tell" class="form-control" placeholder="Phone" required>
            </div>
            <div class="col-12 col-md-6 form-group">
                <input type="text" name="address" class="form-control" placeholder="Address" required>
            </div>
        </div>
        <p>Date & Time<i>*</i></p>
        <div class="form-row">
            <div class="col form-group">
                <input class="form-control" type="date">
            </div>
            <div class="col form-group">
                <input class="form-control" type="time">
            </div>
        </div>
        <p>Service Type<i>*</i></p>
        <div class="form-row">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Refrigerator">
                <label class="form-check-label" for="inlineCheckbox1">Refrigerator</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Wine-Cooler">
                <label class="form-check-label" for="inlineCheckbox2">Wine-Cooler</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Ice-Maker">
                <label class="form-check-label" for="inlineCheckbox3">Ice-Maker</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="Freezer">
                <label class="form-check-label" for="inlineCheckbox4">Freezer</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="Dishwasher">
                <label class="form-check-label" for="inlineCheckbox8">Dishwasher</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="Frabage Disposal">
                <label class="form-check-label" for="inlineCheckbox5">Garbage Disposal</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="Dryer">
                <label class="form-check-label" for="inlineCheckbox6">Dryer</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="Washer">
                <label class="form-check-label" for="inlineCheckbox7">Washer</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="Stove">
                <label class="form-check-label" for="inlineCheckbox9">Stove</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="Oven">
                <label class="form-check-label" for="inlineCheckbox10">Oven</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox12" value="Range">
                <label class="form-check-label" for="inlineCheckbox12">Range</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox11" value="Microwave">
                <label class="form-check-label" for="inlineCheckbox11">Microwave</label>
            </div>
        </div>
        <p>Description<i>*</i></p>
        <div class="form-row">
            <div class="col form-group">
                <textarea class="form-control" placeholder="Brand and a brief description of an issue" rows="5"></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-check form-check-inline agreement">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox13" value="">
                <label class="form-check-label" for="inlineCheckbox13">I understand that the $69 service call will be applied towards the total repair price</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary order-form-btn">Schedule My Appointment</button>
        <div submit-success>
            <template type="amp-mustache">
                Success!
            </template>
        </div>
        <div submit-error>
            <template type="amp-mustache">
                Error!
            </template>
        </div>
    </form>

@else
    <form class="order-form" action="{{ route('sendcontactform') }}" method="POST">
        @csrf
        <legend>Book a Repair Appointment</legend>
        <p>Personal Info<i>*</i></p>
        <div class="form-row">
            <div class="col-12 col-md-6 form-group">
                <input type="text" name="name" class="form-control" placeholder="Name" required>
            </div>
            <div class="col-12 col-md-6 form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-12 col-md-6 form-group">
                <input type="tell" name="tell" class="form-control" placeholder="Phone" required>
            </div>
            <div class="col-12 col-md-6 form-group">
                <input type="text" name="address" class="form-control" placeholder="Address" required>
            </div>
        </div>
        <p>Date & Time<i>*</i></p>
        <div class="form-row">
            <div class="col form-group">
                <input class="form-control" type="date" name="date">
            </div>
            <div class="col form-group">
                <input class="form-control" type="time" name="time">
            </div>
        </div>
        <p>Service Type<i>*</i></p>
        <div class="form-row">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Refrigerator">
                <label class="form-check-label" for="inlineCheckbox1">Refrigerator</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Wine-Cooler">
                <label class="form-check-label" for="inlineCheckbox2">Wine-Cooler</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Ice-Maker">
                <label class="form-check-label" for="inlineCheckbox3">Ice-Maker</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="Freezer">
                <label class="form-check-label" for="inlineCheckbox4">Freezer</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="Dishwasher">
                <label class="form-check-label" for="inlineCheckbox8">Dishwasher</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="Frabage Disposal">
                <label class="form-check-label" for="inlineCheckbox5">Garbage Disposal</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="Dryer">
                <label class="form-check-label" for="inlineCheckbox6">Dryer</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="Washer">
                <label class="form-check-label" for="inlineCheckbox7">Washer</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="Stove">
                <label class="form-check-label" for="inlineCheckbox9">Stove</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="Oven">
                <label class="form-check-label" for="inlineCheckbox10">Oven</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox12" value="Range">
                <label class="form-check-label" for="inlineCheckbox12">Range</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox11" value="Microwave">
                <label class="form-check-label" for="inlineCheckbox11">Microwave</label>
            </div>
        </div>
        <p>Description<i>*</i></p>
        <div class="form-row">
            <div class="col form-group">
                <textarea class="form-control" placeholder="Brand and a brief description of an issue" rows="5" name="message"></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-check form-check-inline agreement">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox13" value="">
                <label class="form-check-label" for="inlineCheckbox13">I understand that the $69 service call will be applied towards the total repair price</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary order-form-btn">Schedule My Appointment</button>
    </form>
@endif
