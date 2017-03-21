// Initialize app
var myApp = new Framework7();


// If we need to use custom DOM library, let's save it to $$ variable:
var $$ = Dom7;

// Add view
var mainView = myApp.addView('.view-main', {
    // Because we want to use dynamic navbar, we need to enable it for this view:
    dynamicNavbar: true
});

// Handle Cordova Device Ready Event
$$(document).on('deviceready', function() {
    console.log("Device is ready!");
});


// Now we need to run the code that will be executed only for About page.

// Callback page orders.html
myApp.onPageInit('orders', function (page) {
    // Do something here for "about" page
})

// Callback page products.html
myApp.onPageInit('products', function (page) {
    // Do something here for "about" page
})

// Callback page providers.html
myApp.onPageInit('providers', function (page) {
    // Do something here for "about" page
})

// Callback page users.html
myApp.onPageInit('users', function (page) {
    // Do something here for "about" page
})
