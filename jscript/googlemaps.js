/**********************************

googlemaps.js

Modification History
====================

Date		Programmer	Description
26/05/2012	CDN			Created

***************************************/


/*************
Loads Google Map into div with id ="location_map_canvas">
**********************/
function loadGoogleMapApiVer2()
{

	if (document.getElementById('location_map_canvas') && GBrowserIsCompatible())
	{
		var lat = 51.260439;
		var long = -2.462847;
		var zoomLevel = 9;  // 13;

		var map = new GMap2(document.getElementById('location_map_canvas'));
		var marker = new GMarker(new GLatLng(lat, long), zoomLevel);
		var html = 'Matthew Higby & Co Ltd';

		map.setCenter(new GLatLng(lat, long), zoomLevel);
		map.addControl(new GSmallMapControl());
		map.addControl(new GMapTypeControl());
		map.addControl(new GScaleControl());
		map.addOverlay(marker);
		//marker.openInfoWindowHtml(html,{maxWidth:50});
	}

}