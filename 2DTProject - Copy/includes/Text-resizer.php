 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

 <script src="js/FluidTextResizer.js">


 </script>

 <script>
 	var mytextsizer = new fluidtextresizer({
 		controlsdiv: "sizecontroldiv", //id of special div containing your resize controls. Enter "" if not defined
 		targets: ["body"], //target elements to resize text within: ["selector1", "selector2", etc]
 		levels: 5, //number of levels users can magnify (or shrink) text
 		persist: "session", //enter "session" or "none"
 		animate: 200 //animation duration of text resize. Enter 0 to disable
 	})
 </script>

 <!-- Link to customized css - Internal Styling -->
 <!-- Link to LIGHTBOX css -->
 <link rel="stylesheet" href="lightbox.css" type="text/css" media="screen">

 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
 <!-- Link to Awesome fonts - External Link -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

 <div class="container pt-3">
 	<div id="sizecontroldiv" class="controlstyle">

 		<a href="#smaller"><i class="fa fa-minus" aria-hidden="true"></i></a> <a href="#bigger"><i class="fa fa-plus" aria-hidden="true"></i></a><br><br>


 	</div>

 </div>