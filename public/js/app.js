$(document).ready(() => {
    registerSW();
    $('#login').click(login);

    $('#test').click(() => {
        showNotification();
    });
});

/**
 * Register the service worker for the app
 */
async function registerSW() {
    if ('serviceWorker' in navigator) {
        try {
            await navigator.serviceWorker.register('./js/sw.js');
        } catch (e) {
            console.log(`SW registration failed`);
        }
    }
}

/**
 * Login with ajax
 * @param {*} event 
 */
function login(event) {
    if (event) {
        event.preventDefault();
    }

    // intialisation
    var username = $("username").val();
    var password = $("password").val();

    // processing
    if (username.length == 0) {
        
    }
}