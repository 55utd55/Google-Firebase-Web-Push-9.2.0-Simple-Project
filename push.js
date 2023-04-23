import { initializeApp } from "https://www.gstatic.com/firebasejs/9.20.0/firebase-app.js";
import { getMessaging, getToken, onMessage } from "https://www.gstatic.com/firebasejs/9.20.0/firebase-messaging.js";

const firebaseConfig = {
##Config-is-Here##
};

const app = initializeApp(firebaseConfig);


const messaging = getMessaging(app);
getToken(messaging, { vapidKey: '##Web_Push_Certificates_Key_is_Here##' }).then((currentToken) => {
    console.log(currentToken);

    $.ajax({
      url: "##Website_Url_and_Path_is_Here##/add-token-to-txt.php",
      method: "GET",
      data: { "token": currentToken },
    });

});

onMessage(messaging, (payload) => {
  console.log('Message received. ', payload);
});