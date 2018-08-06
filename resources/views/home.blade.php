@extends('template')

@section('content')
<div id="hero"><!--houses the background image-->
	<div id="hero-overlay"><!--empty box where you can put content. itswidth = hero width-->
	     <!-- site-navigation start -->  
	

<div class="container-fluid" style="margin-top: 200px;">
    <div class="row">
        <div class="col-md-12">
        <h1 class="header-text">HIRE SKILLED PROFESSIONALS & ARTISANS ANYWHERE IN 
            <span style="color:green">NIG</span><span style="color:white">ER</span><span style="color:green">IA</span></h1> 
        <p class="info">Find the right person to handle that task for you. <br />
    It's easy, very fast and 100% <span style="color:red">FREE.</span></p> 
        </div>
        
        <div class="col-md-12 search-panel">
          <div class="search-form-container">  
        <form class="form-inline" id="search-form">
            <div class="form-group">
                <label class="search-label">I am looking for...</label>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>

                <input type="text" size="55" class="form-control" id="skill" 
                placeholder="e.g. (web developer, electrician, plumber, A.C technician">
                </div>
            </div>

            <div class="form-group">
                <label class="sr-only">State</label>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                <select name="state" style="width:150px" class="form-control" id="state">
                    <option>All states</option>
                    <option>lagos</option>
                    <option>lagos</option>
                </select>
                </div>    
            </div>

             <div class="form-group">
                <label class="sr-only">Town</label>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                <select name="town" style="width:150px" class="form-control" id="town">
                    <option>All towns</option>
                    <option>lagos</option>
                    <option>lagos</option>
                </select>
                </div>    
            </div>
            
            <button type="submit" class="btn btn-warning"><span><i class="fa fa-search"></i></span> Search</button>
        </form>
        </div>
        </div> 

    </div><!--end of row-->
        
</div><!--end of container fluid-->
		<!--all contents above are within the hero overlay-->
		</div><!--end of hero overlay-->

	</div><!--end of hero-->
    
    
    
    <!--new section all contents below are outside the hero-->


@stop