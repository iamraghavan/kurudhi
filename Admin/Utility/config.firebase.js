
var firebaseConfig = {
  apiKey: "AIzaSyDxAw4TI0OJD2zHPEuyR2vEwPEts3cyPGI",
  authDomain: "kurudhi-blood-bank.firebaseapp.com",
  databaseURL: "https://kurudhi-blood-bank-default-rtdb.asia-southeast1.firebasedatabase.app",
  projectId: "kurudhi-blood-bank",
  storageBucket: "kurudhi-blood-bank.appspot.com",
  messagingSenderId: "701515333227",
  appId: "1:701515333227:web:f93a22941229d194827b2e",
  measurementId: "G-5D4KHPF20X"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);


admin.initializeApp({
    credential: admin.credential.applicationDefault(),
  });
firebase.analytics();