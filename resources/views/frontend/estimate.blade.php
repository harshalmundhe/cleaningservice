@extends('layout.app')

@section('content')
<form action="{{ route('estimate.add') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name">
    </div>

    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" class="form-control" name="phone">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email">
    </div>

    
    <div class="form-group">
        <label for="p_type">Type of property</label>
        <select name="p_type" class="form-control" id="">
            <option value="Single">Single Family Home</option>
            <option value="Apartment">Apartment</option>
            <option value="Condo">Condo</option>
        </select>
    </div>

    <div class="form-group">
        <label for="no_bed_bath">Number of bedroom/bathroom</label>
        <input type="text" class="form-control" name="no_bed_bath">
    </div>

    <div class="form-group">
        <label for="f_type">Flooring Type</label>
        <select name="f_type" class="form-control" id="">
            <option value="Carpet">Carpet</option>
            <option value="Apartment">Hardwood</option>
            <option value="Condo">Tile</option>
        </select>
    </div>

    <div class="form-group">
        <label for="s_room">Any Special Room</label>
        <select name="s_room" class="form-control" id="">
            <option value="No">No</option>
            <option value="Yes">Yes</option>
        </select>
    </div>

    <div class="form-group">
        <label for="clean_service_period">How often would you like Cleaning Service</label>
        <select name="clean_service_period" class="form-control" id="">
            <option value="Weekly">Weekly</option>
            <option value="Bi-Weekly">Bi Weekly</option>
            <option value="Monthly">Monthly</option>
            <option value="One time">One time cleaning</option>
            <option value="other">Other</option>
        </select>
    </div>

    
    <div class="form-group">
        <label for="clean_service_period_other">Other</label>
        <input type="text" class="form-control" name="clean_service_period_other">
    </div>


    <div class="form-group">
        <label for="clean_service">What Specific cleaning service are you interested in?</label>
        <input type="checkbox" name="clean_service[]" value="General Cleaning"> General Cleaning <br>
        <input type="checkbox" name="clean_service[]" value="Commercial Cleaning"> Commercial Cleaning <br>
        <input type="checkbox" name="clean_service[]" value="Deep Cleaning"> Deep Cleaning <br>
        <input type="checkbox" name="clean_service[]" value="Move In/Move Out Cleaning"> Move In/Move Out Cleaning <br>
        <input type="checkbox" name="clean_service[]" value="Specialized Cleaning"> Specialized Cleaning <br>
        <input type="checkbox" name="clean_service[]" value="Eco Friendly Cleaning"> Eco Friendly Cleaning <br>
        <input type="checkbox" name="clean_service[]" value="other"> Other <br>

    </div>

    
    <div class="form-group">
        <label for="clean_service_other">Other</label>
        <input type="text" class="form-control" name="clean_service_other">
    </div>

    
    <div class="form-group">
        <label for="pets">Do you have pets in house?</label>
        <select name="pets" class="form-control" id="">
            <option value="No">No</option>
            <option value="Yes">Yes</option>
        </select>
    </div>

    <div class="form-group">
        <label for="pet_type">Pet type</label>
        <input type="text" class="form-control" name="pet_type">
    </div>

    
    <div class="form-group">
        <label for="allergies_sensitives">Are there any allergies or sensitives that our cleaner should be aware of?</label>
        <input type="text" class="form-control" name="allergies_sensitives">
    </div>

    <div class="form-group">
        <label for="present">Will someone be present during cleaning sessions</label>
        <input type="text" class="form-control" name="present">
    </div>

    
    <div class="form-group">
        <label for="access">How will our team access the property</label>
        <select name="access" class="form-control" id="">
            <option value="Key">Key</option>
            <option value="Lockbox">Lockbox</option>
            <option value="Be Home">Be Home</option>
        </select>
    </div>


    <div class="form-group">
        <label for="attension">Are there any spefic areas or items you want our team to pay extra attension to</label>
        <input type="text" class="form-control" name="attension">
    </div>


    <div class="form-group">
        <label for="request">Do you have any addition request or prefrences related to cleaing service</label>
        <input type="text" class="form-control" name="request">
    </div>


    <div class="form-group">
        <label for="hear">How did you hear about us?</label>
        <input type="text" class="form-control" name="hear">
    </div>

    <div class="form-group">
        <label for="extra">Is there anything else you'd like to share or ask regrading cleaning service</label>
        <input type="text" class="form-control" name="extra">
    </div>





    
    <input type="submit" name="save" value="Save" class="mt-3 btn btn-primary">
</form>


@endsection