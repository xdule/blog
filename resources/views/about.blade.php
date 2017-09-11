
@extends('sadrzaj')

@section('content')
Lorem ipsum dolor sit amet, consectetur adipiscing elit. In viverra aliquam neque, id consectetur metus sodales eget. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec id justo cursus, congue eros sed, faucibus ipsum. Mauris scelerisque, leo ut porttitor auctor, lectus nibh dictum tellus, nec dignissim odio libero eu nibh. Morbi facilisis augue et metus convallis eleifend. Proin a erat ac ligula varius scelerisque. Donec nec dui facilisis, tempus est sit amet, tempus dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas sed neque ut leo finibus auctor. Cras suscipit sem sit amet ligula malesuada rutrum.

Sed congue urna vitae nunc varius scelerisque. Etiam eleifend quis tortor posuere condimentum. Praesent vitae quam iaculis, cursus ipsum pellentesque, sodales nibh. Aliquam ligula felis, placerat suscipit auctor vel, dapibus nec massa. Maecenas at malesuada lorem, eget placerat nulla. Proin eget iaculis ipsum, non suscipit purus. Praesent condimentum turpis in velit faucibus semper. Mauris lacinia sollicitudin turpis tempus volutpat. Vivamus placerat nulla a sollicitudin gravida. Nullam non sem ac ex egestas malesuada sed quis neque. Curabitur neque erat, faucibus at nunc et, imperdiet pellentesque justo. Mauris ultricies augue non turpis fermentum aliquet.

Praesent et enim et metus vestibulum tempor ac vel elit. Nam mattis gravida luctus. Praesent venenatis velit quis blandit tincidunt. Sed ut tellus sit amet ligula vehicula pretium. Nam vestibulum justo tortor. Cras sed sem eu arcu tincidunt elementum. Aliquam blandit rutrum dictum. Duis eleifend augue ut nisi tristique, porta interdum nunc accumsan. Ut dapibus consectetur mauris nec porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ut lectus malesuada, fermentum diam at, fermentum justo. Phasellus in fringilla sem. Nulla facilisi. Proin non pharetra lorem, sit amet blandit quam.

<body>



<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(43.8563, 18.4131),
    zoom:15,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8spsFLehAGDd2-57cVO_vJqv1CfsYv-E&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>




@endsection
@section('babo')
<li ><a href="{{route('home')}}">Home <span class="sr-only">(current)</span></a></li>

<li class='active'><a href="{{route('about')}}">About</a></li>
@endsection
@section('title','|  O nama')
