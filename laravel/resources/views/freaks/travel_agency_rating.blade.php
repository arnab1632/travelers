@extends('freaks.layout')
  @section('content')

    <div class="row m45">
        <div class="col-md-5 mx-auto">
         	<div class="card card-signin my-4">
            	<div class="card-body">
	                <div class="form-label-group my-4 text-center">
	                  <img src="/abc/images/freaks.png" alt="User Image" height="150px" width="150px" style=" border-radius: 50%;">
	                </div>

	                <div class="form-label-group my-4">
	                  <p name="inputName">Name: </p>
	                </div>

	                <div class="form-label-group my-4">
	                  <p name="inputName">Email Address: </p>
	                </div>

	                <div class="form-label-group my-4">
	                  <p name="inputName">Agency name: </p>
	                </div>

	                <div class="form-label-group my-4">
	                  <p name="inputName">Phone No: </p>
	                </div>

	                <div class="form-label-group my-4">
						<div class="panel panel-default">
						    <ul class="list-group list-group-flush>
						        <li class="list-group-item text-center">
						            <div class="skillLineDefault">
						            	<div class="skill pull-left text-center" name="inputName">Rating: </div>
						                <div class="rating" id="rate1"></div>
						            </div>
						        </li>
						    </ul>
						</div>
					</div>

					<button class="btn btn-lg btn-block my-4" type="submit">Submit</button>	    
				</div>	
            </div>
        </div>
    </div>
    
@endsection

@section('title')
Booked Events
@endsection

<style>
    .rating {
        margin-left: 30px;
    }

    div.skill {
        font-size: 1rem;
    }

    .skillLine {
        display: inline-block;
        width: 100%;
        min-height: 90px;
        padding: 3px 4px;
    }
</style>

<!-- you need to include the shieldui css and js assets in order for the charts to work -->
<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

<script type="text/javascript">
    initializeRatings();

    function initializeRatings() {
        $('#rate1').shieldRating({
            max: 5,
            step: 1,
            value: 1,
            markPreset: false
        });
        $('#rate2').shieldRating({
            max: 5,
            step: 1,
            value: 2,
            markPreset: false
        });
        $('#rate3').shieldRating({
            max: 5,
            step: 1,
            value: 3,
            markPreset: false
        });
        $('#rate4').shieldRating({
            max: 5,
            step: 1,
            value: 4,
            markPreset: false
        });
        $('#rate5').shieldRating({
            max: 5,
            step: 1,
            value: 5,
            markPreset: false
        });
    }
</script>