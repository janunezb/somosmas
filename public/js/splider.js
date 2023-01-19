var hi = document.getElementsByClassName( 'splide' );
		console.log(hi);
		for ( var i = 0; i < hi.length; i++ ) {
		new Splide( hi[ i ] ).mount();
		}
var grid1 = new Muuri('.grid-1', {
    dragEnabled: true,
    layout: {
    fillGaps: true
    }
 });
 var grid2 = new Muuri('.grid-2', {
    dragEnabled: true,
    layout: {
    fillGaps: true
    }
 });
 var grid3 = new Muuri('.grid-3', {
    dragEnabled: true,
    layout: {
    fillGaps: true
    }
 });
 var grid4 = new Muuri('.grid-4', {
    dragEnabled: true,
    layout: {
    fillGaps: true
    }
 });
 var grid5 = new Muuri('.grid-5', {
    dragEnabled: true,
    layout: {
    fillGaps: true
    }
 });
 var grid6 = new Muuri('.grid-6', {
    dragEnabled: true,
    layout: {
    fillGaps: true
    }
 });

//  var elms = document.getElementsByClassName( 'splide' );
//         console.log(elms);
// 		for ( var i = 0; i < elms.length; i++ ) {
// 		new Splide( elms[ i ] ).mount();
// 		}
// new Splide( '.slider1',{
//     perPage: 1,
//     focus  : 0,
//     omitEnd: true,
//     type    : 'loop',
//     arrows: false,
//     autoplay: true,
//     pagination: false,
//     snap:  false,
// } ).mount();

