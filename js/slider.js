$(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
 
      navigation : true, // Show next and prev buttons
      slideSpeed : 1200,
      autoPlay: true,
      pagination: false,
      navigationText: ["geri","ileri"],
      paginationSpeed : 1200,
      singleItem:true
  });
 
});

$(document).ready(function() {
 
  $("#owl-demo-ic").owlCarousel({
 
      navigation : true, 
      slideSpeed : 1200,
      autoPlay: true,
      navigationText: ["geri","ileri"],
      paginationSpeed : 1200,
	  navigation: false,
      singleItem: true
 });
 
});
 $("#owl-demo2").owlCarousel({
    jsonPath : "json/data.json" 
  });
 

